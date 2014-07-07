<?php

class EWebUser extends CWebUser {
    /* protected $model;


      protected function loadUser()
      {
      if($this->model === null)
      {
      $this->model = User::model()->findByPk(Yii::app()->user->id);
      }
      return $this->model;
      }

      public function getLevel()
      {
      $user = $this->loadUser();
      if($user)
      return $user->level_id;
      return 100;
      } */

    // Store model to not repeat query.
    private $_model;

    // This is a function that checks the field 'role'
    // in the User model to be equal to 1, that means it's admin
    // access it by Yii::app()->user->isAdmin()
    function isAdmin() {
        $user = $this->loadUser(Yii::app()->user->id);
        return intval($user->level_id) == 1;
    }

    // Load user model.
    protected function loadUser($id = null) {
        if ($this->_model === null) {
            if ($id !== null)
                $this->_model = User::model()->findByPk($id);
        }
        return $this->_model;
    }

}
