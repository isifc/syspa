<?php
App::uses('AppController', 'Controller');
/**
 * Anexos Controller
 *
 * @property Anexo $Anexo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AnexosController extends AppController {

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
		$this->Anexo->recursive = 0;
		$this->set('anexos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Anexo->exists($id)) {
			throw new NotFoundException(__('Invalid anexo'));
		}
		$options = array('conditions' => array('Anexo.' . $this->Anexo->primaryKey => $id));
		$this->set('anexo', $this->Anexo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($empresa_id,
		$empresaCUIT,
		$porcentajeGastoAnterior,
		$pagaSeguroTrabajoAnterior,
		$pagaObraSocialAnterior,
		$pagaAsignacionAnterior,
		$convenioFechaAnterior
		) {
		if ($this->request->is('post')) {
			$this->Anexo->create();
			// abort if cancel button was pressed  
            if (isset($this->request->data['cancel'])) {
                    $this->Session->setFlash(__('No se registro anexo.'));
                    //return $this->redirect( array( 'action' => 'index' ));
                    return $this->redirect(array('controller' => 'empresas','action' => 'index'));
                }
			if ($this->Anexo->save($this->request->data)) {
				

				$this->Session->setFlash(__('The anexo has been saved.'));
				//return $this->redirect(array('action' => 'index'));
				return $this->redirect(array('controller' => 'empresas','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The anexo could not be saved. Please, try again.'));
			}
		}else
		
		$empresas = $this->Anexo->Empresa->find('list');

        $this->set('empresa_id',$empresa_id); 
        $this->set('empresaCUIT',$empresaCUIT);
        $this->set('porcentajeGastoAnterior',$porcentajeGastoAnterior);
		$this->set('pagaSeguroTrabajoAnterior',$pagaSeguroTrabajoAnterior);
		$this->set('pagaObraSocialAnterior',$pagaObraSocialAnterior);
		$this->set('pagaAsignacionAnterior',$pagaAsignacionAnterior);
		$this->set('convenioFechaAnterior',$convenioFechaAnterior);
		
		
		

		//$this->Firmante->Empresa->recursive=0;
		//$empresas = $this->Firmante->Empresa->find('list');
		//$anexos = $this->Firmante->Anexo->find('list');
		
		$this->set(compact('empresas', 'anexos'));
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Anexo->exists($id)) {
			throw new NotFoundException(__('Invalid anexo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Anexo->save($this->request->data)) {
				$this->Session->setFlash(__('The anexo has been saved.'));
				//return $this->redirect(array('action' => 'index'));
				return $this->redirect(array('controller' => 'empresas','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The anexo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Anexo.' . $this->Anexo->primaryKey => $id));
			$this->request->data = $this->Anexo->find('first', $options);
		}
		$empresas = $this->Anexo->Empresa->find('list');
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
		$this->Anexo->id = $id;
		if (!$this->Anexo->exists()) {
			throw new NotFoundException(__('Invalid anexo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Anexo->delete()) {
			$this->Session->setFlash(__('The anexo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The anexo could not be deleted. Please, try again.'));
		}
		//return $this->redirect(array('action' => 'index'));
		return $this->redirect(array('controller' => 'empresas','action' => 'index'));
	}
}
