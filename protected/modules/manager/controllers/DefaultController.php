<?php
class DefaultController extends DManagerController
{
    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionSignin()
    {
        $this->layout = false;
        $this->render('signin');
    }

    public function actionSignout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->user->loginUrl);
    }
}