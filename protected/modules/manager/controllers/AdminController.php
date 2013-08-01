<?php
class AdminController extends PController
{
    public function actionIndex()
    {
        $rows = Admin::model()->findAll(array('order' => 'id desc'));
        $this->render('index', array('rows' => $rows));
    }

    public function actionAdd()
    {
        $record = array(
            'id' => 0,
            'username' => '',
            'nick_name' => '',
            'group_id' => 2,
        );
        $this->render('form', array('record' => $record));
    }

    public function actionEdit()
    {
        $id = Yii::app()->request->getQuery('id');
        if ($id < 1) {
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $record = Admin::model()->findByPk($id);
        $this->render('form', array('record' => $record));
    }

    public function actionForm()
    {
        if (!Yii::app()->request->isPostRequest) {
            Yii::app()->user->setFlash('error', '错误的请求方式');
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $request = Yii::app()->request;
        $id = $request->getPost('id');
        $username = $request->getPost('username');
        $nickName = $request->getPost('nick_name');
        $groupId = $request->getPost('group_id');
        if (!$nickName || !$groupId) {
            Yii::app()->user->setFlash('error', '请填写完整');
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        if ($id > 0) {
            $model = Admin::model()->findByPk($id);
        } else {
            if (!$username) {
                Yii::app()->user->setFlash('error', '请填写完整');
                $this->redirect(Yii::app()->request->urlReferrer);
            }
            if (Admin::model()->countByAttributes(array('username' => $username))) {
                Yii::app()->user->setFlash('error', '管理员账户名称已存在，请更换');
                $this->redirect(Yii::app()->request->urlReferrer);
            }
            $model = new Admin();
            $model->username = $username;
            $model->password = '';
        }
        $model->nick_name = $nickName;
        $model->group_id = $id == 1 ? 1 : $groupId;
        if ($model->save()) {
            Yii::app()->user->setFlash('success', '保存成功');
            $this->redirect(array('index'));
        }
        Yii::app()->user->setFlash('error', '保存失败');
        $this->redirect(Yii::app()->request->urlReferrer);
    }

    public function actionDel()
    {
        $id = Yii::app()->request->getQuery('id');
        if ($id < 1) {
            Yii::app()->user->setFlash('error', '错误的管理员id');
            $this->redirect(array('index'));
        }
        if ($id == 1) {
            Yii::app()->user->setFlash('error', 'administerator帐号不允许删除');
            $this->redirect(array('index'));
        }
        $model = Admin::model()->findByPk($id);
        if (!$model) {
            Yii::app()->user->setFlash('error', '不存在的管理员id');
            $this->redirect(array('index'));
        }
        if ($model->delete()) {
            Yii::app()->user->setFlash('success', '删除成功');
        } else {
            Yii::app()->user->setFlash('error', '删除失败，请重试');
        }
        $this->redirect(array('index'));
    }

    public function actionResume()
    {
        $id = Yii::app()->request->getQuery('id');
        if ($id < 2) {
            Yii::app()->user->setFlash('error', '错误的用户id');
            $this->redirect(array('index'));
        }
        $password = $this->generatePassword();
        if (Admin::model()->updateByPk($id, array('password' => md5($password)))) {
            Yii::app()->user->setFlash('success', '重置密码成功，重置后密码为“' . $password . '”');
        } else {
            Yii::app()->user->setFlash('error', '重置密码失败，请重试');
        }
        $this->redirect(array('index'));
    }

    public function actionMe()
    {
        if (Yii::app()->request->isPostRequest) {
            $request = Yii::app()->request;
            $oldPassword = $request->getPost('old_password');
            $password = $request->getPost('password');
            $confirmPassword = $request->getPost('confirm_password');
            if (empty($oldPassword) || empty($password)) {
                Yii::app()->user->setFlash('error', '请填写完整');
            } elseif ($password != $confirmPassword) {
                Yii::app()->user->setFlash('error', '2次密码不一致');
            } else {
                $model = Admin::model()->findByPk(Yii::app()->user->id);
                if ($model->password != md5($oldPassword)) {
                    Yii::app()->user->setFlash('error', '旧密码不正确');
                } else {
                    $model->password = md5($password);
                    $model->save();
                    Yii::app()->user->setFlash('success', '密码修改成功');
                    $this->redirect(array('me'));
                }
            }
        }
        $this->render('me');
    }

    private function generatePassword($length = 6)
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_';
        return substr(str_shuffle($chars), 0, $length);
    }
}