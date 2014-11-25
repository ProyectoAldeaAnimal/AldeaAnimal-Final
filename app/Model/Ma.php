<?php
App::uses('AppModel', 'Model');
/**
 * Ma Model
 *
 * @property User $User
 * @property TipoMas $TipoMas
 */
class Ma extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_MAS';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'NOMBRE_MAS';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'ID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoMa' => array(
			'className' => 'TipoMa',
			'foreignKey' => 'ID_TIPO_MAS',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
