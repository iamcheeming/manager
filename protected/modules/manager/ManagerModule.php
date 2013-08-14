<?php
class ManagerModule extends CWebModule
{
    public function init()
    {
        $this->setImport(array(
            'manager.components.*',
            'manager.models.*',
        ));
        Yii::app()->theme = 'manager';
        Yii::app()->name = 'Manager System';
        Yii::app()->setComponents(array(
            'user' => array(
                'class' => 'application.modules.manager.components.WebUser',
                'allowAutoLogin' => true,
                'loginUrl' => array('default/signin'),
            ),
            'errorHandler'=>array(
                'errorAction' => 'manager/error/index',
            ),
        ));

        // 分类列表
        $categories = Category::model()->findAll(array('order' => 'sortnum asc'));
        $temp = array();
        foreach ($categories as $item) {
            $temp[$item->id] = $item->getAttributes();
        }
        $this->setParams(array('categories' => $temp));
        unset($categories, $temp);
    }

    public function beforeControllerAction($controller, $action)
    {
        if (parent::beforeControllerAction($controller, $action)) {
            if ($controller->id == 'default' && $action->id != 'index') {
                if ($action->id == 'signin' && !Yii::app()->user->isGuest) {
                    $controller->redirect(array('default/index'));
                }
            } else {
                if (Yii::app()->user->isGuest) {
                    $controller->redirect(Yii::app()->user->loginUrl);
                }
            }
            // 验证角色
            return true;
        } else {
            return false;
        }
    }
}