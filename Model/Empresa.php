<?php
App::uses('AppModel', 'Model');
/**
 * Empresa Model
 *
 * @property Anexo $Anexo
 * @property Conveniosparticulare $Conveniosparticulare
 * @property Estadocuenta $Estadocuenta
 * @property Firmante $Firmante
 * @property Oferta $Oferta
 */
class Empresa extends AppModel {
    public $displayField = 'EmpresaRazonSocial';
public $actsAs = array(
        'Search.Searchable'
    );
   public $filterArgs = array(
        'CUIT' => array(
            'type' => 'like',
            'field' => 'EmpresaCUIT'
        ),
		'RazonSocial'=> array (
			'type' =>'like',
			'field'=>'EmpresaRazonSocial'
		),
		
    );
 


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Anexo' => array(
			'className' => 'Anexo',
			'foreignKey' => 'empresa_id',
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
		'Conveniosparticulare' => array(
			'className' => 'Conveniosparticulare',
			'foreignKey' => 'empresa_id',
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
		'Estadocuenta' => array(
			'className' => 'Estadocuenta',
			'foreignKey' => 'empresa_id',
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
		'Firmante' => array(
			'className' => 'Firmante',
			'foreignKey' => 'empresa_id',
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
		'Oferta' => array(
			'className' => 'Oferta',
			'foreignKey' => 'empresa_id',
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


		public function isValid($value)
		{
		if (!is_numeric($value)) {
		return false;
		}

		if (strlen($value) != 11) {
		return false;
		}

		$prefijo = (int) substr($value, 0,2);
		if (!in_array($prefijo, array(20,23,24,27))) {
		return false;
		}

		$coeficiente = array(5,4,3,2,7,6,5,4,3,2);

		$sum=0;

		for ($i=0; $i < 10 ; $i++) { 
		$sum=$sum+($value[$i]*$coeficiente[$i]);
		}

		$resto=$sum % 11;

		if ($value[10] != 11-$resto) {
		return false; 
		}

		return true;
		}


		/*public function isValid($cuit) {
            $cadena = str_split($cuit);

            $result = $cadena[0]*5;
            $result += $cadena[1]*4;
            $result += $cadena[2]*3;
            $result += $cadena[3]*2;
            $result += $cadena[4]*7;
            $result += $cadena[5]*6;
            $result += $cadena[6]*5;
            $result += $cadena[7]*4;
            $result += $cadena[8]*3;
            $result += $cadena[9]*2;

            $div = intval($result/11);
            $resto = $result - ($div*11);

            if($resto==0){
                if($resto==$cadena[10]){
                    return true;
                }else{
                    return false;
                }
            }elseif($resto==1){
                if($cadena[10]==9 AND $cadena[0]==2 AND $cadena[1]==3){
                    return true;
                }elseif($cadena[10]==4 AND $cadena[0]==2 AND $cadena[1]==3){
                    return true;
                }
            }elseif($cadena[10]==(11-$resto)){
                return true;
            }else{
                return false;
            }
        }*/

		
                
	
			var $validate = array(

					'EmpresaCUIT' => array(
						/*'beetwen'=>array(
			 				'rule' => array('between', 11, 11),
		        			'message' => 'Un CUIT debe  tener 11 caracteres.'
		        		        ),
						'isUnique' => array(
		            		'rule' => 'isUnique',
		           			'message' => 'Este CUIT ya existe.',
		            		'last' => true
		         				),*/
						
						 'isValid'=> array(
						 	 'rule'=> 'isValid',
						 	 'message'=> 'CUIT invalido',
						 	),
											       	 		
		             ),

					

					 

					 'EmpresaRazonSocial'=> array(
			 			'rule' => 'notEmpty',
			 			'message' => 'Falta completar'
			 		 ),


			 		 'EmpresaActividad'=> array(
					 	'rule' => 'notEmpty',
					 	'message' => 'Falta completar'
					  ),
					
					 'EmpresaDireccion'=> array(
					 	'rule' => 'notEmpty',
					 	'message' => 'Falta completar'
					  ),
					 
					 'ContactoNombre'=> array(
					 	'rule' => 'notEmpty',
					 	'message' => 'Falta completar'
					  ),

					 'ContactoTelefono'=> array(
					 	'rule' => 'notEmpty',
					 	'message' => 'Falta completar'
					  ),

					 'ContactoCorreo'=> array(
					 	'rule' => 'notEmpty',
					 	'message' => 'Falta completar'
					  ),

					 

					 'EmpresaTelefono'=> array(
					 	'rule' => 'notEmpty',
					 	'message' => 'Falta completar'
					  ),

					  'ConvenioFecha'=> array(
					  	'rule'=>'date',
					  	'message'=> 'la fecha debe ser de formato AAAA-MM-DD',
					  	),

					 );



}
