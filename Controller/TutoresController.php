<?php
App::uses('AppController', 'Controller');
/**
 * Tutores Controller
 *
 * @property Tutore $Tutore
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TutoresController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session','Search.Prg');
	public $uses= array('Tutore');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tutore->recursive = 0;
		$this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Tutore->parseCriteria($this->Prg->parsedParams());
        $this->set('tutores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tutore->exists($id)) {
			throw new NotFoundException(__('Invalid tutore'));
		}
		$options = array('conditions' => array('Tutore.' . $this->Tutore->primaryKey => $id));
		$this->set('tutore', $this->Tutore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		if ($this->request->is('post')) {
			$this->Tutore->create();
			if ($this->Tutore->save($this->request->data)) {
				
				$this->Session->setFlash(__('Tutor ha sido registrado satisfactoriamente'));
				return $this->redirect(array('controller'=>'Tutores','action' => 'index'));
			} else {
				$this->Session->setFlash(__('Tutor no ha sido registrado satisfactoriamente'));
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
		if (!$this->Tutore->exists($id)) {
			throw new NotFoundException(__('Tutor Invalido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tutore->save($this->request->data)) {
				$this->Session->setFlash(__('Tutor ha sido registrado satisfactoriamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Tutor no ha sido registrado satisfactoriamente'));
			}
		} else {
			$options = array('conditions' => array('Tutore.' . $this->Tutore->primaryKey => $id));
			$this->request->data = $this->Tutore->find('first', $options);
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
		$this->Tutore->id = $id;
		if (!$this->Tutore->exists()) {
			throw new NotFoundException(__('Invalid tutore'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tutore->delete()) {
			$this->Session->setFlash(__('The tutore has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tutore could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
