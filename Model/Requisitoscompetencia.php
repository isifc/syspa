<?php
App::uses('AppModel', 'Model');
/**
 * Requisitoscompetencia Model
 *
 * @property Oferta $Oferta
 * @property Competencia $Competencia
 */
class Requisitoscompetencia extends AppModel {
    public $name = 'Requisitoscompetencias';
    public $displayField = 'Competencianombre';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'oferta_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'competencia_id' => array(
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
		'Oferta' => array(
			'className' => 'Oferta',
			'foreignKey' => 'oferta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Competencia' => array(
			'className' => 'Competencia',
			'foreignKey' => 'competencia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
