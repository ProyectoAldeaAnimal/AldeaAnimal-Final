<?php
App::uses('AppModel', 'Model');
/**
 * Pat Model
 *
 * @property Far $Far
 * @property Atencion $Atencion
 * @property TIPO_MA $TIPO_MA
 */
class Pat extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'pat';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_PAT';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'NOMBRE_PAT';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ID_PAT' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Far' => array(
			'className' => 'Far',
			'joinTable' => 'far_pat',
			'foreignKey' => 'pat_id',
			'associationForeignKey' => 'far_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Atencion' => array(
			'className' => 'Atencion',
			'joinTable' => 'pat_atencion',
			'foreignKey' => 'pat_id',
			'associationForeignKey' => 'atencion_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'TIPO_MA' => array(
			'className' => 'TIPO_MA',
			'joinTable' => 'PAT_MAS',
			'foreignKey' => 'pat_id',
			'associationForeignKey' => 'pat_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
