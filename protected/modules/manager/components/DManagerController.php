<?php
class DManagerController extends Controller
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
}