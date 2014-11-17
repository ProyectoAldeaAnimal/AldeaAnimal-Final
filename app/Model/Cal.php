<?php
App::uses('AppModel', 'Model');
/**
 * Cal Model
 *
 */
class Cal extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'cal';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_CAL';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'FECHA_CAL';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ID_CAL' => array(
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
}
