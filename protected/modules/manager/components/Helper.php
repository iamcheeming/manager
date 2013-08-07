<?php
class Helper
{
    public static function generatePassword($length = 6)
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_';
        return substr(str_shuffle($chars), 0, $length);
    }

    public static function pagination($totalNum, $pageNo = 1, $pageSize = 20)
    {
        if ($totalNum <= $pageSize) return '';

        $mark = 'page';
        $pageNo = $pageNo > 0 ? $pageNo : 1;
        $queryString = Yii::app()->request->getQueryString();
        parse_str($queryString, $queryString);
        if ($queryString && array_key_exists($mark, $queryString)) {
            unset($queryString[$mark]);
        }
        $queryString = http_build_query($queryString);
        $url = Yii::app()->request->getUrl();
        $url = preg_replace("/(?:\?|&).*/i", '', $url);
        if ($queryString) {
            $url = "{$url}?{$queryString}&{$mark}=";
        } else {
            $url = "{$url}?{$mark}=";
        }

        $pageSize = $pageSize > 0 ? $pageSize : 20;
        $totalPage = ceil($totalNum / $pageSize);
        $prev = $next = $pageInfo = '';

        // 上一页
        if ($pageNo > 1) {
            $prev = '<li><a href="' . $url . ($pageNo - 1) . '">« prev</a></li>';
        } else {
            $prev = '<li class="disabled">« prev</li>';
        }

        // 下一页
        if ($totalPage > $pageNo) {
            $next = '<li><a href="' . $url . ($pageNo + 1) . '">next »</a></li>';
        } else {
            $next = '<li class="disabled">next »</li>';
        }

        // 页码
        $delimitationNum = 2;
        $start = $pageNo - $delimitationNum;
        $end = $pageNo + $delimitationNum;
        if ($start < 1) {
            $end += 1 - $start;
            $start = 1;
        }
        if ($end > $totalPage) {
            $start -= $end - $totalPage;
            if ($start < 1) {
                $start = 1;
            }
            $end = $totalPage;
        }

        if ($start > 1) {
            $pageInfo .= '<li><a href="' . $url . '1">1</a></li>';
            if ($start > 2) {
                $pageInfo .= '<li><a href="' . $url . '2">2</a></li>';
            }
            $pageInfo .= '<li class="separator">...</li>';
        }

        for ($i = $start; $i <= $end; $i++) {
            if ($pageNo == $i) {
                $pageInfo .= '<li class="current">' . $i . '</li>';
            } else {
                $pageInfo .= '<li><a href="' . $url . $i . '">' . $i . '</a></li>';
            }
        }

        if ($end < $totalPage) {
            $pageInfo .= '<li class="separator">...</li>';
            if ($end < $totalPage - 1) {
                $pageInfo .= '<li><a href="' . $url . ($totalPage - 1) . '">' . ($totalPage - 1) . '</a></li>';
            }
            $pageInfo .= '<li><a href="' . $url . $totalPage . '">' . $totalPage . '</a></li>';
        }

        return '<div class="pagination pagination-left"><div class="results"><span>showing results ' . (($pageNo - 1) * $pageSize + 1) . '-' . $pageNo * $pageSize . ' of ' . $totalNum . '</span></div><ul class="pager">' . $prev . $pageInfo . $next . '</ul></div>';
    }
}