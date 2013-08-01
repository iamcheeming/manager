<?php
class DefaultController extends PController
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

    public function actionPost()
    {
        $request = Yii::app()->request;
        $username = $request->getPost('username');
        $password = $request->getPost('password');
        $remember = $request->getPost('remember');

        if (empty($username) || empty($password)) {
            Yii::app()->user->setFlash('error', '用户名和密码不能为空。');
            $this->redirect(array('default/signin'));
        }
        $identity = new UserIdentity($username, $password);
        if ($identity->authenticate()) {
            // Yii::app()->user->login($identity, $remember ? 3600 * 8 : 0);
            Yii::app()->user->login($identity, 0);
            $this->redirect(array('default/index'));
        }
        Yii::app()->user->setFlash('error', '用户名或密码不正确。');
        $this->redirect(array('default/signin'));
    }
}