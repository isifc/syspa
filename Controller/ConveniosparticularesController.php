<?php
App::uses('AppController', 'Controller');
/**
 * Conveniosparticulares Controller
 *
 * @property Conveniosparticulare $Conveniosparticulare
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ConveniosparticularesController extends AppController {

/**
 * Components
 *
 * @var array	*/

 
	public $components = array('Paginator', 'Session','Search.Prg');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Conveniosparticulare->recursive = 0;
		$this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Conveniosparticulare->parseCriteria($this->Prg->parsedParams());
		$this->set('conveniosparticulares', $this->Paginator->paginate());
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Conveniosparticulare->exists($id)) {
			throw new NotFoundException(__('Invalid conveniosparticulare'));
		}
		$options = array('conditions' => array('Conveniosparticulare.' . $this->Conveniosparticulare->primaryKey => $id));
		$this->set('conveniosparticulare', $this->Conveniosparticulare->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		//$this->loadModel('Alumno');
	
		if ($this->request->is('post')) {
			$this->Conveniosparticulare->create();
			if ($this->request->data['Conveniosparticulare']['tutore_id']== 1){
					$this->request->data['Conveniosparticulare']['tutore_id']= NULL;
			}
			if ($this->Conveniosparticulare->save($this->request->data)) {

				$this->Session->setFlash(__('The conveniosparticulare has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conveniosparticulare could not be saved. Please, try again.'));
			}
		}
		$ofertas = $this->Conveniosparticulare->Oferta->find('list', array('fields' => array('OfertaDescripcion')));
		//$empresas = $this->Conveniosparticulare->Empresa->find('list');
		$empresas = $this->Conveniosparticulare->Empresa->find('list', array('fields' => array('EmpresaRazonSocial')));
		//$alumnos = $this->Conveniosparticulare->Alumno->find('list',array('fields' => array('Apellido')));
		$carreras = $this->Conveniosparticulare->Carrera->find('list',array('fields' => array('carrera')));
		$tutores = $this->Conveniosparticulare->Tutore->find('list',array('fields' => array('ApellidoNombre')));
			
		$alumnos = $this->Conveniosparticulare->Alumno->find('list', array('fields' => array('id','name')));

		$this->set(compact('ofertas', 'empresas', 'alumnos', 'carreras', 'tutores'));
	


	
	
	}
	

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->loadModel('Alumno');
		if (!$this->Conveniosparticulare->exists($id)) {
			throw new NotFoundException(__('Convenio particular invalido'));
		}
		
		$options = array('conditions' => array('Conveniosparticulare.' . $this->Conveniosparticulare->primaryKey => $id));
		$this->set('conveniosparticulare', $this->Conveniosparticulare->find('first', $options));
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Conveniosparticulare->save($this->request->data)) {
				$this->Session->setFlash(__('Convenio guardado satisfactoriamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Convenio no guardado'));
			}
		} else {
			$options = array('conditions' => array('Conveniosparticulare.' . $this->Conveniosparticulare->primaryKey => $id));
			$this->request->data = $this->Conveniosparticulare->find('first', $options);
		}
		$ofertas = $this->Conveniosparticulare->Oferta->find('list');
		//$empresas = $this->Conveniosparticulare->Empresa->find('list');
		$empresas = $this->Conveniosparticulare->Empresa->find('list', array('fields' => array('EmpresaRazonSocial')));
		$alumnos = $this->Conveniosparticulare->Alumno->find('all');
		//$carreras = $this->Conveniosparticulare->Carrera->find('list');
		//$alumnos = $this->Conveniosparticulare->Alumno->find('list', array('fields' => array('NroLegajo')));
		$carreras = $this->Conveniosparticulare->Carrera->find('list',array('fields' => array('carrera')));
		$tutores = $this->Conveniosparticulare->Tutore->find('list');
		$this->set(compact('ofertas', 'empresas', 'alumnos', 'carreras', 'tutores'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Conveniosparticulare->id = $id;
		if (!$this->Conveniosparticulare->exists()) {
			throw new NotFoundException(__('Invalid conveniosparticulare'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Conveniosparticulare->delete()) {
			$this->Session->setFlash(__('The conveniosparticulare has been deleted.'));
		} else {
			$this->Session->setFlash(__('The conveniosparticulare could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function suspenderConvenio($id = null){

		if (!$this->Conveniosparticulare->exists($id)) {
			throw new NotFoundException(__('Convenio invalido'));
		}
		//esto es para ver algunos datos de la empresa a suspender
		$options = array('conditions' => array('Conveniosparticulare.' . $this->Conveniosparticulare->primaryKey => $id));
		$this->set('conveniosparticulare', $this->Conveniosparticulare->find('first', $options));
		//aca suspendo
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Conveniosparticulare->save($this->request->data)) {
				$this->Session->setFlash(__('Se suspendio el convenio Satisfactoriamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo suspender el convenio.'));
			}
		} else {
			$options = array('conditions' => array('Conveniosparticulare.' . $this->Conveniosparticulare->primaryKey => $id));
			$this->request->data = $this->Conveniosparticulare->find('first', $options);
		}

	}
}
