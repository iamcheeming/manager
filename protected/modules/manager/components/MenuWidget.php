<?php
class MenuWidget extends CWidget
{
    public function run()
    {
        $pid = Yii::app()->request->getQuery('pid', 0);
        $cid = Yii::app()->request->getQuery('cid', 0);
        $controller = Yii::app()->controller->id;
        $action = Yii::app()->controller->action->id;
        $categories = Yii::app()->controller->module->params->categories;
        if ($pid && isset($categories[$pid])) $pid = $categories[$pid];
        if ($cid && isset($categories[$cid])) $cid = $categories[$cid];
        foreach ($categories as $item) {
            $categories[$item['pid']]['_child'][$item['id']] = &$categories[$item['id']];
        }
        $categories = isset($categories[0]['_child']) ? $categories[0]['_child'] : array();

        $this->render('MenuWidget', array(
            'pid' => $pid,
            'cid' => $cid,
            'controller' => $controller,
            'action' => $action,
            'rows' => $categories,
        ));
    }
}