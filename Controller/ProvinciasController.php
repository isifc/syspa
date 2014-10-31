<?php
App::uses('AppController', 'Controller');
/**
 * Provincias Controller
 *
 * @property Provincia $Provincia
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProvinciasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Provincia->recursive = 0;
		$this->set('provincias', $this->Paginator->paginate());
	}

	public function list_departamentos() {
    		$this->set('nombre', $this->Departamento->find('list'));
  	}

	  public function get_models_ajax() {
	   		Configure::write('debug', 0);
	   		if($this->RequestHandler->isAjax()) {
	    			 $this->set('Departamento', $this->Car->CarModel->find('list',
	                            array('conditions' =>
	                                        array('Departamento.provincia_id' => $this->params['url']['carId']),
	                                  'recursive' => -1)));
	   }
	 }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Provincia->exists($id)) {
			throw new NotFoundException(__('Invalid provincia'));
		}
		$options = array('conditions' => array('Provincia.' . $this->Provincia->primaryKey => $id));
		$this->set('provincia', $this->Provincia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Provincia->create();
			if ($this->Provincia->save($this->request->data)) {
				$this->Session->setFlash(__('The provincia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The provincia could not be saved. Please, try again.'));
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
		if (!$this->Provincia->exists($id)) {
			throw new NotFoundException(__('Invalid provincia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Provincia->save($this->request->data)) {
				$this->Session->setFlash(__('The provincia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The provincia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Provincia.' . $this->Provincia->primaryKey => $id));
			$this->request->data = $this->Provincia->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Provincia->id = $id;
		if (!$this->Provincia->exists()) {
			throw new NotFoundException(__('Invalid provincia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Provincia->delete()) {
			$this->Session->setFlash(__('The provincia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The provincia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
