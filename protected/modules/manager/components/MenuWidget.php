<?php
class MenuWidget extends CWidget
{
    public function run()
    {
        $rows = Category::model()->findAll(array('order' => 'sortnum asc'));
        $temp = array();
        foreach ($rows as $item) {
            $temp[$item->id] = $item->getAttributes();
        }
        Yii::app()->controller->module->setParams(array('categories' => $temp));
        foreach ($temp as $item) {
            $temp[$item['pid']]['_child'][$item['id']] = &$temp[$item['id']];
        }
        $rows = isset($temp[0]['_child']) ? $temp[0]['_child'] : array();
        unset($temp);
        $this->render('MenuWidget', array('rows' => $rows));
    }
}