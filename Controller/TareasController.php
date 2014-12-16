<?php
App::uses('AppController', 'Controller');
/**
 * Tareas Controller
 *
 * @property Tarea $Tarea
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TareasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session','Search.Prg');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tarea->recursive = 0;
		$this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Tarea->parseCriteria($this->Prg->parsedParams());
		$this->set('tareas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tarea->exists($id)) {
			throw new NotFoundException(__('Invalid tarea'));
		}
		$options = array('conditions' => array('Tarea.' . $this->Tarea->primaryKey => $id));
		$this->set('tarea', $this->Tarea->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($conveniosparticulare_id) {
		if ($this->request->is('post')) {
			$this->Tarea->create();
			if ($this->Tarea->save($this->request->data)) {
				$this->Session->setFlash(__('The tarea has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tarea could not be saved. Please, try again.'));
			}
		}
		$actividades = $this->Tarea->Actividade->find('list');
		$this->set('conveniosparticulare_id',$conveniosparticulare_id);
		$conveniosparticulares = $this->Tarea->Conveniosparticulare->find('list');
		$this->set(compact('actividades', 'conveniosparticulares'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tarea->exists($id)) {
			throw new NotFoundException(__('Invalid tarea'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tarea->save($this->request->data)) {
				$this->Session->setFlash(__('The tarea has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tarea could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tarea.' . $this->Tarea->primaryKey => $id));
			$this->request->data = $this->Tarea->find('first', $options);
		}
		$actividades = $this->Tarea->Actividade->find('list');
		$conveniosparticulares = $this->Tarea->Conveniosparticulare->find('list');
		$this->set(compact('actividades', 'conveniosparticulares'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tarea->id = $id;
		if (!$this->Tarea->exists()) {
			throw new NotFoundException(__('Invalid tarea'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tarea->delete()) {
			$this->Session->setFlash(__('The tarea has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tarea could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
