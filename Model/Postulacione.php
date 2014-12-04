<?php
App::uses('AppModel', 'Model');
/**
 * Postulacione Model
 *
 * @property Alumno $Alumno
 * @property Oferta $Oferta
 */
class Postulacione extends AppModel {
    public $name = 'Postulaciones';
/**
 * Validation rules
 *
 * @var array
 */
    public $filterArgs = array(
      'Empresa' => array(
          'type' => 'like',
          'field' => 'Empresa.EmpresaRazonSocial'
      ),
      'Nombre' => array(
          'type' => 'like',
          'field' => 'Alumno.nombre'
      )
    );
    
	public $validate = array(
		'alumno_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Alumno' => array(
			'className' => 'Alumno',
			'foreignKey' => 'alumno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Oferta' => array(
			'className' => 'Oferta',
			'foreignKey' => 'oferta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
