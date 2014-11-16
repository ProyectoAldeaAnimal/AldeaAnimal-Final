<?php
App::uses('AuthComponent', 'Controller/Component');
class Vet extends AppModel {
public $useTable = 'VET ';
public $validate = array(
		'rut_vet' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password_vet' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        )

		);

	public function beforeSave($options = array()) {
            // hash our password
        
        if (isset($this->data[$this->alias]['password_vet'])) {
            $this->data[$this->alias]['password_vet'] = AuthComponent::password($this->data[$this->alias]['password_vet']);
        }
        
        // if we get a new password, hash it
        if (isset($this->data[$this->alias]['password_update'])) {
            $this->data[$this->alias]['password_vet'] = AuthComponent::password($this->data[$this->alias]['password_update']);
        }
            return parent::beforeSave($options);
        }
	}
?>