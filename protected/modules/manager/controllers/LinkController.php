<?php
class LinkController extends PController
{
    public function actionIndex()
    {
        if (Yii::app()->request->isPostRequest) {
            $link = Yii::app()->request->getPost('link');
            $model = Setting::model()->findByPk('link');
            $model->content = $link;
            $model->save();
            Yii::app()->user->setFlash('success', '保存成功');
            $this->redirect('index');
        }

        $model = Setting::model()->findByPk('link');
        if (!$model) {
            $model = new Setting();
            $model->token = 'link';
            $model->content = '';
            $model->save();
        }
        $this->render('index', array('link' => $model->content));
    }
}