<?php
App::uses('AppModel', 'Model');
/**
 * Requisitosmateria Model
 *
 * @property Ofertascarreras $Ofertascarreras
 * @property Materia $Materia
 */
class Requisitosmateria extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'RequisitoMateriaCondicion' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ofertascarreras_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'materia_id' => array(
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Ofertascarreras' => array(
			'className' => 'Ofertascarreras',
			'foreignKey' => 'ofertascarreras_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'materia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
