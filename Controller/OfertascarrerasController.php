<?php
App::uses('AppController', 'Controller');
/**
 * Ofertascarreras Controller
 *
 * @property Ofertascarrera $Ofertascarrera
 * @property PaginatorComponent $Paginator
 */
class OfertascarrerasController extends AppController {
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
		$this->Ofertascarrera->recursive = 0;
		$this->set('ofertascarreras', $this->Paginator->paginate());
	}
        
        public function detallecarreras($OfertaId) {
            $carreras = $this->Ofertascarrera->find('all',
                    array(
                        'fields' => array(
                            'id',
                            'carrera_id',
                            'Carrera.carrera'
                        ),
                        'conditions' => array('oferta_id = '=> $OfertaId)
                    )
                );
            $oferta = $this->Ofertascarrera->Oferta->find('list',array('fields' => 'Oferta.OfertaDescripcion'));
            $this->set('carreras',$carreras);
            $this->set('OfertaId',$OfertaId);
            $this->set('oferta',$oferta);
        }


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ofertascarrera->exists($id)) {
			throw new NotFoundException(__('Invalid ofertascarrera'));
		}
		$options = array('conditions' => array('Ofertascarrera.' . $this->Ofertascarrera->primaryKey => $id));
		$this->set('ofertascarrera', $this->Ofertascarrera->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->Ofertascarrera->create();
            if ($this->Ofertascarrera->save($this->request->data)) {
                $this->Session->setFlash(__('La carrera ha sido agregada a la oferta.'));
                return $this->redirect(array('controller' => 'ofertas','action' => 'view'));
            } else {
                $this->Session->setFlash(__('The ofertascarrera could not be saved. Please, try again.'));
            }
        }
        $ofertas = $this->Ofertascarrera->Oferta->find('list');
        $carreras = $this->Ofertascarrera->Carrera->find('list');
        $this->set(compact('ofertas', 'carreras'));
    }
    
    public function addcarrera($OfertaId){
        
        if ($this->request->is('post')) {
            $this->Ofertascarrera->create();
            if ($this->Ofertascarrera->Save($this->request->data)) {
                $this->Session->setFlash(__('La carrrera ha sido agregada a la oferta'));
                return $this->redirect(array('action' => 'detallecarreras',$OfertaId));
            } else {
                $this->Session->SetFlash(__('La carrera no pudo ser guardada, intente de nuevo'));
            }           
        }
        $ofertas = $this->Ofertascarrera->Oferta->find('list');
        $carreras = $this->Ofertascarrera->Carrera->find('list');
        $this->set(compact('ofertas', 'carreras'));
        $this->set('OfertaId',$OfertaId);
 
    }
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Ofertascarrera->exists($id)) {
			throw new NotFoundException(__('Invalid ofertascarrera'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ofertascarrera->save($this->request->data)) {
				$this->Session->setFlash(__('The ofertascarrera has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ofertascarrera could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ofertascarrera.' . $this->Ofertascarrera->primaryKey => $id));
			$this->request->data = $this->Ofertascarrera->find('first', $options);
		}
		$ofertas = $this->Ofertascarrera->Ofertum->find('list');
		$carreras = $this->Ofertascarrera->Carrera->find('list');
		$this->set(compact('ofertas', 'carreras'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Ofertascarrera->id = $id;
		if (!$this->Ofertascarrera->exists()) {
			throw new NotFoundException(__('Invalid ofertascarrera'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ofertascarrera->delete()) {
			$this->Session->setFlash(__('The ofertascarrera has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ofertascarrera could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'detallecarreras'));
	}
        
        public function borrarcarrera($id = null,$OfertaId = null) {
            $this->Ofertascarrera->id = $id;
            if (!$this->Ofertascarrera->exists()) {
                throw new NotFoundException(__('Oferta carrera no válida'));
            }
            $this->request->allowMethod('post','delete');
            if ($this->Ofertascarrera->delete()) {
                $this->Session->SetFlash(__('Se eliminó la carrera de la oferta'));
            } else {
                $this->Session->setFlash(__('La carrera no pudo ser eliminada de la oferta, intenta de nuevo'));
            }
            return $this->redirect(array('action' => 'detallecarreras',$OfertaId));
        }
}
