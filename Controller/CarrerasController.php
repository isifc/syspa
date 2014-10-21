<?php
App::uses('AppController', 'Controller');
/**
 * Carreras Controller
 *
 * @property Carrera $Carrera
 * @property PaginatorComponent $Paginator
 */
class CarrerasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Carrera->recursive = 0;
		$this->set('carreras', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Carrera->exists($id)) {
			throw new NotFoundException(__('Invalid carrera'));
		}
		$options = array('conditions' => array('Carrera.' . $this->Carrera->primaryKey => $id));
		$this->set('carrera', $this->Carrera->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Carrera->create();
			if ($this->Carrera->save($this->request->data)) {
				$this->Session->setFlash(__('The carrera has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carrera could not be saved. Please, try again.'));
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
		if (!$this->Carrera->exists($id)) {
			throw new NotFoundException(__('Invalid carrera'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Carrera->save($this->request->data)) {
				$this->Session->setFlash(__('The carrera has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carrera could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Carrera.' . $this->Carrera->primaryKey => $id));
			$this->request->data = $this->Carrera->find('first', $options);
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
		$this->Carrera->id = $id;
		if (!$this->Carrera->exists()) {
			throw new NotFoundException(__('Invalid carrera'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Carrera->delete()) {
			$this->Session->setFlash(__('The carrera has been deleted.'));
		} else {
			$this->Session->setFlash(__('The carrera could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
