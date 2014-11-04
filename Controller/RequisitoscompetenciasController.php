<?php
App::uses('AppController', 'Controller');
/**
 * Requisitoscompetencias Controller
 *
 * @property Requisitoscompetencia $Requisitoscompetencia
 * @property PaginatorComponent $Paginator
 */
class RequisitoscompetenciasController extends AppController {
    public $name = 'Requisitoscompetencias';
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
        $this->Requisitoscompetencia->recursive = 0;
        $this->set('requisitoscompetencias', $this->Paginator->paginate());
    }

            public function detallerequisitos($OfertaId){
            $requisitos = $this->Requisitoscompetencia->find('all',
                    array(
                        'fields' => array(
                            'id',
                            'competencia_id',
                            'Competencia.competencianombre'
                        ),
                        'conditions' => array('oferta_id =' => $OfertaId)
                    )
                );
            $this->set('requisitos',$requisitos);
            $this->set('OfertaId',$OfertaId);
        }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function view($id = null) {
        if (!$this->Requisitoscompetencia->exists($id)) {
            throw new NotFoundException(__('Invalid requisitoscompetencia'));
        }
            $options = array('conditions' => array('Requisitoscompetencia.' . $this->Requisitoscompetencia->primaryKey => $id));
            $this->set('requisitoscompetencia', $this->Requisitoscompetencia->find('first', $options));
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->Requisitoscompetencia->create();
                if ($this->Requisitoscompetencia->save($this->request->data)) {
                    $this->Session->setFlash(__('The requisitoscompetencia has been saved.'));
                    return $this->redirect(array('controller' => 'ofertas','action' => 'view',4));
                } else {
                    $this->Session->setFlash(__('The requisitoscompetencia could not be saved. Please, try again.'));
                }
        }
            $ofertas = $this->Requisitoscompetencia->Oferta->find('list');
            $competencias = $this->Requisitoscompetencia->Competencia->find('list');
            $this->set(compact('ofertas', 'competencias'));
    }

    public function addrequisitos($OfertaId){
        if ($this->request->is('post')) {
            $this->Requisitoscompetencia->create();
            if ($this->Requisitoscompetencia->save($this->request->data)) {
                $this->Session->setFlash(__('Se agregó el requisito a la oferta'));
                return $this->redirect(array('action' => 'detallerequisitos',$OfertaId));
            } else {
                $this->Session->setFlash(__('El requisito no ha podido ser agregado a la oferta, intente de nuevo'));
            }
        }
        $this->set('OfertaId',$OfertaId);
        $ofertas = $this->Requisitoscompetencia->Oferta->find('list');
        $competencias = $this->Requisitoscompetencia->Competencia->find('list');
        $this->set(compact('ofertas', 'competencias'));

    }
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function edit($id = null) {
        if (!$this->Requisitoscompetencia->exists($id)) {
            throw new NotFoundException(__('Invalid requisitoscompetencia'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Requisitoscompetencia->save($this->request->data)) {
                $this->Session->setFlash(__('The requisitoscompetencia has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The requisitoscompetencia could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Requisitoscompetencia.' . $this->Requisitoscompetencia->primaryKey => $id));
            $this->request->data = $this->Requisitoscompetencia->find('first', $options);
        }
            $ofertas = $this->Requisitoscompetencia->Oferta->find('list');
            $competencias = $this->Requisitoscompetencia->Competencia->find('list');
            $this->set(compact('ofertas', 'competencias'));
    }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Requisitoscompetencia->id = $id;
		if (!$this->Requisitoscompetencia->exists()) {
			throw new NotFoundException(__('Invalid requisitoscompetencia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Requisitoscompetencia->delete()) {
			$this->Session->setFlash(__('The requisitoscompetencia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The requisitoscompetencia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        public function borrarrequisito($id = null,$OfertaId = null) {
		$this->Requisitoscompetencia->id = $id;
		if (!$this->Requisitoscompetencia->exists()) {
			throw new NotFoundException(__('Requisito no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Requisitoscompetencia->delete()) {
			$this->Session->setFlash(__('El requisito ha sido eliminado de la oferta.'));
		} else {
			$this->Session->setFlash(__('No se pudo borrar el requisito. Por favor, reintente.'));
		}
		return $this->redirect(array('action' => 'detallerequisitos',$OfertaId));
	}

}
