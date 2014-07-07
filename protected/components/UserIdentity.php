<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {
    private $_id;
    private $_role;
    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        

        //$username = strtolower($this->username);
        $user = User::model()->findByAttributes(array('username'=>  $this->username));
        if ($user === NULL)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else {
            if (!$user->validatePassword($this->password))
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
            else
            {
                $this->_id = $user->id;
                $this->username = $user->username;
                $this->errorCode = self::ERROR_NONE;
                //$this->_role = $user->level_id;
                $this->setState('role', $user->level_id);
            }    
        }
        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }
}
