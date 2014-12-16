<?php
App::uses('AppModel', 'Model');
/**
 * Actividade Model
 *
 * @property Area $Area
 * @property Tarea $Tarea
 */
class Actividade extends AppModel {

public $displayField = 'ActividadDescripcion';






public $actsAs = array(
        'Search.Searchable'
    );
   public $filterArgs = array(
        'Area' => array(
            'type' => 'like',
            'field' => array('Area.AreaDescripcion')
        ),
		'Actividad'=> array (
			'type' =>'like',
			'field'=>'ActividadDescripcion'
		),
		
		
    );
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Area' => array(
			'className' => 'Area',
			'foreignKey' => 'area_id',
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
		'Tarea' => array(
			'className' => 'Tarea',
			'foreignKey' => 'actividade_id',
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
