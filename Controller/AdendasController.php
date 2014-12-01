<?php
App::uses('AppController', 'Controller');
/**
 * Adendas Controller
 *
 * @property Adenda $Adenda
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AdendasController extends AppController {

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
		$this->Adenda->recursive = 0;
		$this->set('adendas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Adenda->exists($id)) {
			throw new NotFoundException(__('Invalid adenda'));
		}
		$options = array('conditions' => array('Adenda.' . $this->Adenda->primaryKey => $id));
		$this->set('adenda', $this->Adenda->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Adenda->create();
			if ($this->Adenda->save($this->request->data)) {
				$this->Session->setFlash(__('The adenda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The adenda could not be saved. Please, try again.'));
			}
		}
		$convenioparticulares = $this->Adenda->Convenioparticulare->find('list');
		$this->set(compact('convenioparticulares'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Adenda->exists($id)) {
			throw new NotFoundException(__('Invalid adenda'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Adenda->save($this->request->data)) {
				$this->Session->setFlash(__('The adenda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The adenda could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Adenda.' . $this->Adenda->primaryKey => $id));
			$this->request->data = $this->Adenda->find('first', $options);
		}
		$convenioparticulares = $this->Adenda->Convenioparticulare->find('list');
		$this->set(compact('convenioparticulares'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Adenda->id = $id;
		if (!$this->Adenda->exists()) {
			throw new NotFoundException(__('Invalid adenda'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Adenda->delete()) {
			$this->Session->setFlash(__('The adenda has been deleted.'));
		} else {
			$this->Session->setFlash(__('The adenda could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
