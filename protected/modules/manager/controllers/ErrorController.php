<?php
class ErrorController extends DManagerController
{
    public function actionIndex()
    {
        $this->pageTitle = Yii::app()->name . ' - Error';
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } else {
                $this->render('index', $error);
            }
        }
    }
}