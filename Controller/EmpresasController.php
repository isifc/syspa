<?php
App::uses('AppController', 'Controller');
/**
 * Empresas Controller
 *
 * @property Empresa $Empresa
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EmpresasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session','RequestHandler','Search.Prg');
	public $helpers = array('Js'=>array('Jquery','Ajax'));
	public $uses= array('Empresa','Provincia','Departamento');	

	var $paginate = array(
		'limit' => 20, 
		'page' => 1,
		'order'=>array('Empresa.id ASC'));
/**
 * index method
 *
 * @return void
 */
	/*public function index() {
		$this->Empresa->recursive = 0;
		$conditions = "Empresa.id = 1 ";
		$this->paginate = array('limit' => 20, 'page' => 1,'conditions' => $conditions);
		$this->set('empresas', $this->Paginator->paginate());
		
	}//esta es la de mia*/

	public function index() {
		$this->Empresa->recursive = 0;
		$this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Empresa->parseCriteria($this->Prg->parsedParams());	
        $this->set('empresas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Empresa invalida'));
		}
		$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
		$this->set('empresa', $this->Empresa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		//$this->load('localidade');
		if ($this->request->is('post')) {
			$this->Empresa->create();
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('Empresa registrada satisfactoriamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Lo siento, no se pudo registrar la empresa'));
			}
		}
	}

	function update_select()
	{
		if (!empty($this->data['Departamento']['provincia_id']))
		{
			$provincia_id = $this->data['Departamento']['provincia_id'];
			$departamentos = $this->Departamento->find('all', array('fields'=>array('id','nombre'),'order'=>'nombre ASC','conditions'=>array('provincia_id'=>$provincia_id)));
		}
		else
		{
			$localidades = $this->Departamento->find('all', array('fields'=>array('id','nombre'),'order'=>'nombre ASC'));
		}
		$this->set('options', Set::combine($departamentos, "{n}.Departamento.id","{n}.Departamento.nombre"));
		$this->render('/elements/update_select', 'ajax');
	}
	public function add2() {
		if ($this->request->is('post')) {
			$this->Empresa->create();
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('Empresa registrada satisfactoriamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Lo siento, no se pudo registrar la empresa'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Empresa invalida'));
		}

		if ($this->request->is(array('post', 'put'))) {
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('Se guardaron los cambios satisfactoriamente'));
				//$this->Anexos->add($CUIT,$convenioFecha,$PorcentajeGasto,$PagaObraSocial,$PagaseguroTrabajo,$PagaAsignacionEstimulo);
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudieron realizar los cambios'));
			}
		} else {
			$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
			$this->request->data = $this->Empresa->find('first', $options);
		}
	}


	public function editar($id = null) {
		$this->loadModel('Anexo');
		$this->loadModel('Firmante');
		
		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Empresa Invalida'));
		}
		//esto es para ver algunos datos de la empresa a suspender
		$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
		$this->set('empresa', $this->Empresa->find('first', $options));
		//aca suspendo
		if ($this->request->is(array('post', 'put'))) {

			if ($this->Empresa->save($this->request->data['Empresa'])) {
				
				//$this->Anexo->save($this->request->data['Anexo']);	
				$this->Session->setFlash(__('Se edito la empresa Sastifactoriamente.'));
				return $this->redirect(array('controller' => 'anexos','action' => 'add',
					$this->request->data['Anexo']['empresa_id'],
					$this->request->data['Anexo']['EmpresaCUIT'],
					$this->request->data['Anexo']['PorcentajeGastoAnterior'],
					$this->request->data['Anexo']['PagaSeguroTrabajoAnterior'],
					$this->request->data['Anexo']['PagaObraSocialAnterior'],
					//$this->request->data['Anexo']['PagaAsignacionAnterior'],
					//$this->request->data['Anexo']['ConvenioFechaAnterior']
					
					));
			} else {
				$this->Session->setFlash(__('No se a podido editar la empresa.'));
			}
		} else {
			$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
			$this->request->data = $this->Empresa->find('first', $options);
		}

		$empresas = $this->Firmante->Empresa->find('list');
		//$localidades = $this->Localidades->Empresa->find('list');
        $this->set('empresa_id',$id); 

		//$this->Firmante->Empresa->recursive=0;
		//$empresas = $this->Firmante->Empresa->find('list');
		//$anexos = $this->Anexo->Empresa->find('list');
		
		$this->set(compact('empresas'));
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Empresa->id = $id;
		if (!$this->Empresa->exists()) {
			throw new NotFoundException(__('Invalid empresa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Empresa->delete()) {
			$this->Session->setFlash(__('The empresa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The empresa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function suspenderConvenio($id = null){

		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Empresa Invalida'));
		}
		//esto es para ver algunos datos de la empresa a suspender
		$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
		$this->set('empresa', $this->Empresa->find('first', $options));
		//aca suspendo
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('Se suspendio el convenio Satisfactoriamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo suspender el convenio.'));
			}
		} else {
			$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
			$this->request->data = $this->Empresa->find('first', $options);
		}

	}


	function search(){

 

    }


	    public function pdf($id = null){
	    	if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Empresa invalida'));
			}
			$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
			$this->set('empresa', $this->Empresa->find('first', $options));
	     	$this->layout = 'pdf';
		}


		

		public function download_pdf() {
	 
	    $this->viewClass = 'Media';
	 
	    $params = array(
	 
	        'id' => 'test.pdf',
	        'name' => 'your_test' ,
	        'download' => true,
	        'extension' => 'pdf',
	        'path' => APP . 'files/pdf' . DS
	    );
	 
	    $this->set($params);
 
}
    
}
