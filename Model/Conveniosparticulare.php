<?php
App::uses('AppModel', 'Model');
/**
 * Conveniosparticulare Model
 *
 * @property Tutore $Tutore
 * @property Oferta $Oferta
 * @property Empresa $Empresa
 * @property Alumno $Alumno
 * @property Carrera $Carrera
 * @property Adenda $Adenda
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
		'Tutore' => array(
			'className' => 'Tutore',
			'foreignKey' => 'tutore_id',
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
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Adenda' => array(
			'className' => 'Adenda',
			'foreignKey' => 'conveniosparticulare_id',
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


	
	
	var $validate = array(

					'FechaInicio' => array(
			 			'rule'=>'date',
					  	'required' => true,
					  	'allowEmpty' => false,
			 		 ),
					 
					 'FechaFin' => array(
			 			'rule'=>'date',
					  	'required' => true,
					  	'allowEmpty' => false,
			 		 ),
					  'FechaFirmaConvenio' => array(
			 			'rule'=>'date',
					  	'required' => true,
					  	'allowEmpty' => false,
					  	
			 		 ),
					   'FechaAltaObraSocial' => array(
			 			'rule'=>'date',
					  	'required' => true,
					  	'allowEmpty' => false,
			 		 ),
					
					   'ImporteArt' => array(
							'rule' => array('range', 0, 9999),
							'required' => false,
					  		'allowEmpty' => true,
							'message' => 'Por favor ingrese un número mayor o igaul a 0'
			 		 ),
					 
					   'ImporteObraSocial' => array(
							'rule' => array('range', 0, 9999),
							'required' => false,
					  		'allowEmpty' => true,
							'message' => 'Por favor ingrese un número mayor o igaul a 0'
			 		 ),
					 
					   'ImporteAsignacionEstimulo' => array(
							'rule' => array('range', 0, 9999),
							'required' => false,
					  		'allowEmpty' => true,
							'message' => 'Por favor ingrese un número mayor o igaul a 0'
			 		 ),
	);
	
	
	
	
	
	
}
