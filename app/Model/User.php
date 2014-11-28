<?php
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {
var $name = 'User'; 
public $useTable = 'cli';
public $primaryKey= 'ID';
public $virtualFields = array(
    'name' => 'CONCAT(User.NOMBRE_CLI, " ", User.APELLIDO_PCLI, " ",User.APELLIDO_MCLI)'
);
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
/*
    public function isAuthorized($user) {
                // Here is where we should verify the role and give access based on role
                
                return true;
            }


*/

    public $belongsTo = array(
        'Group' => array(
            'className' => 'Group',
            'foreignKey' => 'ID_GROUP',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
   public $actsAs = array('Acl' => array('type' => 'requester', 'enabled' => false));

    public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['User']['ID_GROUP'])) {
            $groupId = $this->data['User ']['ID_GROUP'];
        } else {
            $groupId = $this->field('ID_GROUP');
        }
        if (!$groupId) {
            return null;
        } else {
            return array('Group' => array('ID_GROUP' => $groupId));
        }
    }

    public function bindNode() {
        $user = AuthComponent::user();   
       
        return array('model' => 'Group', 'foreign_key' => $user[0]['User']['ID_GROUP']);
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