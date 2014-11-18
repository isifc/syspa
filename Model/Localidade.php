<?php
App::uses('AppModel', 'Model');
/**
 * Localidade Model
 *
 * @property Departamento $Departamento
 * @property id_empresa $id_empresa
 */
class Localidade extends AppModel {

public $virtualFields = array('name' => 'CONCAT(Localidade.nombre)');
/*$this->Timelog->query('
select p.nombre,d.nombre,l.nombre
from Localidade l inner join Departamento d on d.id=l.departamento_id inner join Provincia p p.id=d.provincia_id
	');*/
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $actsAs = array(
        'Search.Searchable'
    );
   public $filterArgs = array(
        'nombre_departamento' => array(
            'type' => 'like',
            'field' => array('Departamento.nombre')
        ),
		'nombre_provincia'=> array (
			'type' =>'like',
			'field'=>array('Provincia.nombre')
			
		)	
    );
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Departamento' => array(
			'className' => 'Departamento',
			'foreignKey' => 'departamento_id',
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
		'id_empresa' => array(
			'className' => 'id_empresa',
			'foreignKey' => 'localidade_id',
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
