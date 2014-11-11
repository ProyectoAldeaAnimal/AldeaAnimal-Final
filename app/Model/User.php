<?php
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {
public $name = 'User';

public $validate = array(
		'rut' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        )

		);

	public function beforeSave($options = array()) {
            // hash our password
        echo "Hhice un hash reculiao!!!!";
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        
        // if we get a new password, hash it
        if (isset($this->data[$this->alias]['password_update'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password_update']);
        }
            return parent::beforeSave($options);
        }
	}
?>