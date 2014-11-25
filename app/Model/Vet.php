<?php
App::uses('AuthComponent', 'Controller/Component');
class Vet extends AppModel {
public $useTable = 'vet';
public $primaryKey = 'ID_VET';
public $name = 'Vet';
public $virtualFields = array(
    'name' => 'CONCAT(Vet.NOMBRE_VET, " ", Vet.APELLIDO_PVET, " ",Vet.APELLIDO_MVET)'
);
public $displayField = 'name';

public $validate = array(
		'RUT_VET' => array(
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

    public $hasMany = array(
        'OfertaHor' => array(
            'className' => 'OfertaHor',
            'foreignKey' => 'ID_OFERTA_HOR',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
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