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
        if ($queryString && isset($queryString[$mark])) {
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
            $prev = '<li><a href="' . $url . ($pageNo - 1) . '"><i class="icon-double-angle-left"></i></a></li>';
        } else {
            $prev = '<li class="disabled"><a href="javascript:;"><i class="icon-double-angle-left"></i></a></li>';
        }

        // 下一页
        if ($totalPage > $pageNo) {
            $next = '<li><a href="' . $url . ($pageNo + 1) . '"><i class="icon-double-angle-right"></i></a></li>';
        } else {
            $next = '<li class="disabled"><a href="javascript:;" <i class="icon-double-angle-right"></i></a></li>';
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

//        if ($start > 1) {
//            $pageInfo .= '<li><a href="' . $url . '1">1</a></li>';
//            if ($start > 2) {
//                $pageInfo .= '<li><a href="' . $url . '2">2</a></li>';
//            }
//            $pageInfo .= '<li class="separator">...</li>';
//        }

        for ($i = $start; $i <= $end; $i++) {
            if ($pageNo == $i) {
                $pageInfo .= '<li class="active"><a href="javascript:;">' . $i . '</a></li>';
            } else {
                $pageInfo .= '<li><a href="' . $url . $i . '">' . $i . '</a></li>';
            }
        }

//        if ($end < $totalPage) {
//            $pageInfo .= '<li class="separator">...</li>';
//            if ($end < $totalPage - 1) {
//                $pageInfo .= '<li><a href="' . $url . ($totalPage - 1) . '">' . ($totalPage - 1) . '</a></li>';
//            }
//            $pageInfo .= '<li><a href="' . $url . $totalPage . '">' . $totalPage . '</a></li>';
//        }

        return '<ul>' . $prev . $pageInfo . $next . '</ul>';
    }
}