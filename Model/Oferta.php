<?php
App::uses('AppModel', 'Model');
/**
 * Oferta Model
 *
 * @property Empresa $Empresa
 * @property Conveniosparticulare $Conveniosparticulare
 * @property Ofertascarrera $Ofertascarrera
 * @property Postulacione $Postulacione
 * @property Requisitoscompetencia $Requisitoscompetencia
 */
class Oferta extends AppModel {
    public $dispalyField = 'OfertaDescripcion';

    public $actsAs = array(
        'Search.Searchable'
    );
   public $filterArgs = array(
        'Empresa' => array(
            'type' => 'like',
            'field' => 'Empresa.EmpresaRazonSocial'
        ),
	'Descripcion'=> array (
                'type' =>'like',
                'field'=>'OfertaDescripcion'
		),
		
    );

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
                'id' => array(
                    'hidden' => true,
                ),
		'OfertaVigenciaDesde' => array(
                    'rule'=>'date',
                    'required' => true,
                    'allowEmpty' => false,
                    'message'=> 'la fecha debe ser de formato AAAA-MM-DD'
		),
		'OfertaVigenciaHasta' => array(
                    'rule'=>'date',
                    'required' => true,
                    'allowEmpty' => false,
                    'message'=> 'la fecha debe ser de formato AAAA-MM-DD'
		),
            
		'OfertaDescripcion' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'empresa_id' => array(
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
		'Empresa' => array(
			'className' => 'Empresa',
			'foreignKey' => 'empresa_id',
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
		'Conveniosparticulare' => array(
			'className' => 'Conveniosparticulare',
			'foreignKey' => 'oferta_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Ofertascarrera' => array(
			'className' => 'Ofertascarrera',
			'foreignKey' => 'oferta_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Postulacione' => array(
			'className' => 'Postulacione',
			'foreignKey' => 'oferta_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Requisitoscompetencia' => array(
			'className' => 'Requisitoscompetencia',
			'foreignKey' => 'oferta_id',
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

}
