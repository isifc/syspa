<?php
App::uses('AppModel', 'Model');
/**
 * Conveniosparticulare Model
 *
 * @property Oferta $Oferta
 * @property Empresa $Empresa
 * @property Alumno $Alumno
 * @property Carrera $Carrera
 * @property Tutore $Tutore
 */
class Conveniosparticulare extends AppModel {

/**
 * Display field
 *
 * @var string
 */


 public $actsAs = array(
        'Search.Searchable'
    );
   public $filterArgs = array(
        'Empresa' => array(
            'type' => 'like',
            'field' => array('Empresa.EmpresaRazonSocial')
        ),
		'Alumno'=> array (
			'type' =>'like',
			'field'=>array('Alumno.Apellido','Alumno.Nombre')
			
		),
		'Carrera'=> array (
			'type' =>'like',
			'field'=>array('Carrera.carrera')
		) 		
    );
 
 
 
	public $displayField = 'id';


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
		'Empresa' => array(
			'className' => 'Empresa',
			'foreignKey' => 'empresa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Alumno' => array(
			'className' => 'Alumno',
			'foreignKey' => 'alumno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Carrera' => array(
			'className' => 'Carrera',
			'foreignKey' => 'carrera_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tutore' => array(
			'className' => 'Tutore',
			'foreignKey' => 'tutore_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
