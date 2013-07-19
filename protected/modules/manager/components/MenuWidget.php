<?php
class MenuWidget extends CWidget
{
    public function run()
    {
        $rows = Category::model()->findAllByAttributes(array('pid' => 0), array('order' => 'sortnum asc'));
        $this->render('MenuWidget', array('rows' => $rows));
    }
}