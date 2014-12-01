<?php
App::uses('AppModel', 'Model');
/**
 * Adenda Model
 *
 * @property Convenioparticulare $Convenioparticulare
 */
class Adenda extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Convenioparticulare' => array(
			'className' => 'Convenioparticulare',
			'foreignKey' => 'convenioparticulare_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
