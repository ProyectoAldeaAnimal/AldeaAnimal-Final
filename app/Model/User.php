<?php
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {

public $useTable = 'cli';

public $displayField = 'NOMBRE_CLI';
public $validate = array(
		'RUT_CLI' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'PASSWORD_CLI' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        )

		);

    public function isAuthorized($user) {
                // Here is where we should verify the role and give access based on role
                
                return true;
            }

	public function beforeSave($options = array()) {

            // hash our password
      
       if (isset($this->data[$this->alias]['PASSWORD_CLI'])) {
            $this->data[$this->alias]['PASSWORD_CLI'] = Security::hash($this->data[$this->alias]['PASSWORD_CLI']);
        }
        
        // if we get a new password, hash it
        if (isset($this->data[$this->alias]['password_update'])) {
            $this->data[$this->alias]['PASSWORD_CLI'] = Security::hash($this->data[$this->alias]['password_update']);
       
            return true;
        }
	}
}
?>