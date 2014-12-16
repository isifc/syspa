<?php
App::uses('AppModel', 'Model');
/**
 * Tarea Model
 *
 * @property Actividade $Actividade
 * @property Conveniosparticulare $Conveniosparticulare
 */
class Tarea extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

	
	
	public $actsAs = array(
        'Search.Searchable'
    );
   public $filterArgs = array(
        'Actividad:' => array(
            'type' => 'like',
            'field' => array('Actividade.ActividadDescripcion')
        ),
		'Tarea:'=> array (
			'type' =>'like',
			'field'=>'TareaDescripcion'
		),
		
		
    );

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Actividade' => array(
			'className' => 'Actividade',
			'foreignKey' => 'actividade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Conveniosparticulare' => array(
			'className' => 'Conveniosparticulare',
			'foreignKey' => 'conveniosparticulare_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
