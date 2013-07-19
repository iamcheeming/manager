<?php
class WebUser extends CWebUser
{
    public function getIsGuest()
    {
        if (parent::getIsGuest()) {
            return true;
        } else {
            // 增加 manager 登录标记
            if ($this->getState('loginFrom') != 'manager') {
                return true;
            }
            return false;
        }
    }

    public function login($identity, $duration = 0)
    {
        if (!$identity->getIsAuthenticated()) {
            return false;
        }
        parent::login($identity, $duration);
        return true;
    }
}