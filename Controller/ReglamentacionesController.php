<?php
App::uses('AppController', 'Controller');
/**
 * Reglamentaciones Controller
 *
 * @property Reglamentacione $Reglamentacione
 * @property PaginatorComponent $Paginator
 */
class ReglamentacionesController extends AppController {

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
		$this->Reglamentacione->recursive = 0;
		$this->set('reglamentaciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reglamentacione->exists($id)) {
			throw new NotFoundException(__('Invalid reglamentacione'));
		}
		$options = array('conditions' => array('Reglamentacione.' . $this->Reglamentacione->primaryKey => $id));
		$this->set('reglamentacione', $this->Reglamentacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reglamentacione->create();
			if ($this->Reglamentacione->save($this->request->data)) {
				$this->Session->setFlash(__('The reglamentacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reglamentacione could not be saved. Please, try again.'));
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
		if (!$this->Reglamentacione->exists($id)) {
			throw new NotFoundException(__('Invalid reglamentacione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reglamentacione->save($this->request->data)) {
				$this->Session->setFlash(__('The reglamentacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reglamentacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reglamentacione.' . $this->Reglamentacione->primaryKey => $id));
			$this->request->data = $this->Reglamentacione->find('first', $options);
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
		$this->Reglamentacione->id = $id;
		if (!$this->Reglamentacione->exists()) {
			throw new NotFoundException(__('Invalid reglamentacione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Reglamentacione->delete()) {
			$this->Session->setFlash(__('The reglamentacione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reglamentacione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
