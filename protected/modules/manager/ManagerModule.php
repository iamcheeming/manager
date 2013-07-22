<?php
class ManagerModule extends CWebModule
{
    private $_assetsUrl;

    public function getAssetsUrl()
    {
        if ($this->_assetsUrl === null) {
            $this->_assetsUrl = Yii::app()->assetManager->publish(
                Yii::getPathOfAlias('webroot.themes.manager.assets')
            );
        }
        return $this->_assetsUrl;
    }

    public function init()
    {
        $this->setImport(array(
            'manager.components.*',
            'manager.models.*',
        ));
        Yii::app()->theme = 'manager';
        Yii::app()->setComponents(array(
            'user' => array(
                'class' => 'application.modules.manager.components.WebUser',
                'allowAutoLogin' => true,
                'loginUrl' => array('default/signin'),
            ),
        ));
    }

    public function beforeControllerAction($controller, $action)
    {
        if (parent::beforeControllerAction($controller, $action)) {
//            if ($controller->id == 'default' && $action->id == 'signin') {
//                if (!Yii::app()->user->isGuest) {
//                    $controller->redirect(array('default/index'));
//                }
//            } else {
//                if (Yii::app()->user->isGuest) {
//                    $controller->redirect(Yii::app()->user->loginUrl);
//                }
//            }
            // 验证角色
            return true;
        } else {
            return false;
        }
    }
}