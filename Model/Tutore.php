<?php
App::uses('AppModel', 'Model');
/**
 * Tutore Model
 *
 * @property Conveniosparticulare $Conveniosparticulare
 */
class Tutore extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	
public $actsAs = array(
        'Search.Searchable'
    );

    public $filterArgs = array(
        'Cuil' => array(
            'type' => 'like',
            'field' => 'CUIL'
        ),
        'Tutor' => array(
            'type' => 'like',
            'field' => 'ApellidoNombre'
        ),
        'Cargo' => array(
           'type' => 'like',
           'field' => 'TutorCargo'
        )
    );


	
	
	public $displayField = 'id';
 
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Conveniosparticulare' => array(
			'className' => 'Conveniosparticulare',
			'foreignKey' => 'tutore_id',
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

var $validate= array(

	'CUIL' => array(
						'beetwen'=>array(
			 				'rule' => array('between', 11, 11),
		        			'message' => 'Un CUIL debe  tener 11 caracteres.'
		        		        ),
						'isUnique' => array(
		            		'rule' => 'isUnique',
		           			'message' => 'Este CUIL ya existe.',
		            		'last' => true
		         				))

	
	);

}
