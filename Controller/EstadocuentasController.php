<?php
App::uses('AppController', 'Controller');
/**
 * Estadocuentas Controller
 *
 * @property Estadocuenta $Estadocuenta
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EstadocuentasController extends AppController {

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
		$this->Estadocuenta->recursive = 0;
		$this->set('estadocuentas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Estadocuenta->exists($id)) {
			throw new NotFoundException(__('Invalid estadocuenta'));
		}
		$options = array('conditions' => array('Estadocuenta.' . $this->Estadocuenta->primaryKey => $id));
		$this->set('estadocuenta', $this->Estadocuenta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($empresa_id) {
		$this->loadModel('Empresa');

		if ($this->request->is('post')) {
			$this->Estadocuenta->create();
			if ($this->Estadocuenta->save($this->request->data)) {
				$this->Session->setFlash(__('Se a registrado correctamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudieron registrar los cambios'));
			}
		}
		$this->set('empresa_id',$empresa_id); 
		 $options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $empresa_id));
		$this->set('empresa', $this->Empresa->find('first', $options));
		$empresas = $this->Estadocuenta->Empresa->find('list');
		$this->set(compact('empresas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Estadocuenta->exists($id)) {
			throw new NotFoundException(__('Invalid estadocuenta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Estadocuenta->save($this->request->data)) {
				$this->Session->setFlash(__('The estadocuenta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estadocuenta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Estadocuenta.' . $this->Estadocuenta->primaryKey => $id));
			$this->request->data = $this->Estadocuenta->find('first', $options);
		}
		$empresas = $this->Estadocuenta->Empresa->find('list');
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
		$this->Estadocuenta->id = $id;
		if (!$this->Estadocuenta->exists()) {
			throw new NotFoundException(__('Invalid estadocuenta'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Estadocuenta->delete()) {
			$this->Session->setFlash(__('The estadocuenta has been deleted.'));
		} else {
			$this->Session->setFlash(__('The estadocuenta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
