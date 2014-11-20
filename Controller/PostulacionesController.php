<?php
App::uses('AppController', 'Controller');
/**
 * Postulaciones Controller
 *
 * @property Postulacione $Postulacione
 * @property PaginatorComponent $Paginator
 */
class PostulacionesController extends AppController {

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
		$this->Postulacione->recursive = 0;
		$this->set('postulaciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Postulacione->exists($id)) {
			throw new NotFoundException(__('Invalid postulacione'));
		}
		$options = array('conditions' => array('Postulacione.' . $this->Postulacione->primaryKey => $id));
		$this->set('postulacione', $this->Postulacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Postulacione->create();
			if ($this->Postulacione->save($this->request->data)) {
				$this->Session->setFlash(__('The postulacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The postulacione could not be saved. Please, try again.'));
			}
		}
		$alumnos = $this->Postulacione->Alumno->find('list');
		$ofertas = $this->Postulacione->Oferta->find('list');
		$this->set(compact('alumnos', 'ofertas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Postulacione->exists($id)) {
			throw new NotFoundException(__('Invalid postulacione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Postulacione->save($this->request->data)) {
				$this->Session->setFlash(__('The postulacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The postulacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Postulacione.' . $this->Postulacione->primaryKey => $id));
			$this->request->data = $this->Postulacione->find('first', $options);
		}
		$alumnos = $this->Postulacione->Alumno->find('list');
		$ofertas = $this->Postulacione->Oferta->find('list');
		$this->set(compact('alumnos', 'ofertas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Postulacione->id = $id;
		if (!$this->Postulacione->exists()) {
			throw new NotFoundException(__('Invalid postulacione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Postulacione->delete()) {
			$this->Session->setFlash(__('The postulacione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The postulacione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
