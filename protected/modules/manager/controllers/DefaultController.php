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
            Yii::app()->user->login($identity, $remember ? 3600 * 4 : 0);
            $this->redirect(array('default/index'));
        }
        Yii::app()->user->setFlash('error', '用户名或密码不正确。');
        $this->redirect(array('default/signin'));
    }

    public function actionAuth()
    {
        foreach (Yii::app()->log->getRoutes() as $route) {
            $route->enabled = false;
        }

        $secretKey = 'A000BC77RU';
        if (!$secretKey) {
            echo '{"error":{"message":"No secret key set.","code":130}}';
            Yii::app()->end();
        }
        if (!isset($_REQUEST['hash']) || !isset($_REQUEST['seed'])) {
            echo '{"error":{"message":"Error in input.","code":120}}';
            Yii::app()->end();
        }
        if (Yii::app()->user->isGuest) {
            echo '{"error":{"message":"没有权限操作","code":180}}';
            Yii::app()->end();
        }

        $hash = $_REQUEST['hash'];
        $seed = $_REQUEST['seed'];
        $localHash = hash_hmac('sha256', $seed, $secretKey);

        if ($hash == $localHash) {
            // echo '{"result" : {"filesystem.rootpath" : "' . $_SERVER['DOCUMENT_ROOT'] . '/uploads' . '"}}';
            echo '{"result":{}}';
        } else {
            echo '{"error":{"message":"Error in input.","code":120}}';
        }
    }
}