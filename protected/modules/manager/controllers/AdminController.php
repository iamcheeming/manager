<?php
class AdminController extends DManagerController
{
    public function actionIndex()
    {
        $rows = Admin::model()->findAll(array('order' => 'id desc'));
        $this->render('index', array('rows' => $rows));
    }

    public function actionAdd()
    {}

    public function actionEdit()
    {}

    public function actionDel()
    {}
}