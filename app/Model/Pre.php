<?php
App::uses('AppModel', 'Model');
/**
 * Pre Model
 *
 * @property TipoPre $TipoPre
 */
class Pre extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'ID_PRES';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'NOMBRE_PRES';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TipoPre' => array(
			'className' => 'TipoPre',
			'foreignKey' => 'ID_TIPO_PRES',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
