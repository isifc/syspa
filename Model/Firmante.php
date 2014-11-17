<?php
App::uses('AppModel', 'Model');
/**
 * Firmante Model
 *
 * @property Empresa $Empresa
 * @property Anexo $Anexo
 */
class Firmante extends AppModel {


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
		),
		'Anexo' => array(
			'className' => 'Anexo',
			'foreignKey' => 'anexo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Localidade' => array(
			'className' => 'Localidade',
			'foreignKey' => 'localidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


	var $validate = array(

		 
		 'FirmanteCUIL'=>array(
		 		'rule' => array('between', 11, 11),
		 		'message' => 'Un CUIL debe  tener 11 caracteres.'
		 	),


		 'FirmanteTelefono'=> array(
					 	'rule' => 'notEmpty',
					 	'message' => 'Falta completar'
					  ),
					 
		 'FirmanteNombre'=> array(
					 'rule' => 'notEmpty',
					 'message' => 'Falta completar'
					 ),
		 'FirmanteNombre'=> array(
					 'rule' => 'notEmpty',
					 'message' => 'Falta completar'
					 ),

		'FirmanteDireccion'=> array(
					 'rule' => 'notEmpty',
					 'message' => 'Falta completar'
					 ),

		'FirmanteApellido'=> array(
					 'rule' => 'notEmpty',
					 'message' => 'Falta completar'
					 ),


		 

		);
}
