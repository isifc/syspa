<?php
App::uses('AppController', 'Controller');
/**
 * Requisitosmaterias Controller
 *
 * @property Requisitosmateria $Requisitosmateria
 * @property PaginatorComponent $Paginator
 */
class RequisitosmateriasController extends AppController {

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
		$this->Requisitosmateria->recursive = 0;
		$this->set('requisitosmaterias', $this->Paginator->paginate());
	}
        
        public function detallematerias($OfertaId,$OfertasCarrerasId) {
             $materias = $this->Requisitosmateria->find('all',
                    array(
                        'fields' => array(
                            'id',
                            'ofertascarreras_id',
                            'RequisitoMateriaCondicion',
                            'materia.materia'
                        ),
                        'conditions' => array('ofertascarreras_id = '=> $OfertasCarrerasId)
                    )
                );
            $this->LoadModel('Oferta');
            $this->Oferta->recursive = 0;
            $oferta = $this->Oferta->find('first',array(
                'fields' => array(
                    'Oferta.OfertaDescripcion',
                    'Oferta.OfertaVigenciaDesde',
                    'Empresa.EmpresaRazonSocial'
                    ),
                'conditions' => array('Oferta.id =' => $OfertaId)
                )
            );
            $this->set('OfertaId',$OfertaId);
            $this->set('oferta',$oferta);
            $this->set('materias',$materias);
            $this->set('OfertasCarrerasId',$OfertasCarrerasId);
        }
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Requisitosmateria->exists($id)) {
			throw new NotFoundException(__('Invalid requisitosmateria'));
		}
		$options = array('conditions' => array('Requisitosmateria.' . $this->Requisitosmateria->primaryKey => $id));
		$this->set('requisitosmateria', $this->Requisitosmateria->find('first', $options));
	}
        
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Requisitosmateria->create();
			if ($this->Requisitosmateria->save($this->request->data)) {
				$this->Session->setFlash(__('The requisitosmateria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requisitosmateria could not be saved. Please, try again.'));
			}
		}
		$ofertascarreras = $this->Requisitosmateria->Ofertascarreras->find('list');
		$materias = $this->Requisitosmateria->Materia->find('list');
		$this->set(compact('ofertascarreras', 'materias'));
	}

	public function addmateria($OfertaId,$OfertasCarrerasId) {
		if ($this->request->is('post')) {
			$this->Requisitosmateria->create();
			if ($this->Requisitosmateria->save($this->request->data)) {
				$this->Session->setFlash(__('La materia ha sido agregada.'));
				return $this->redirect(array('action' => 'detallematerias',$OfertaId,$OfertasCarrerasId));
			} else {
				$this->Session->setFlash(__('The requisitosmateria could not be saved. Please, try again.'));
			}
            }
            $this->set('OfertaId',$OfertaId);
            $this->set('OfertasCarrerasId',$OfertasCarrerasId);
            $ofertascarreras = $this->Requisitosmateria->Ofertascarrera->find('list');
            $materias = $this->Requisitosmateria->Materia->find('list');
            $this->set(compact('ofertascarreras', 'materias'));

        }

 /**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Requisitosmateria->exists($id)) {
			throw new NotFoundException(__('Invalid requisitosmateria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Requisitosmateria->save($this->request->data)) {
				$this->Session->setFlash(__('The requisitosmateria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requisitosmateria could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Requisitosmateria.' . $this->Requisitosmateria->primaryKey => $id));
			$this->request->data = $this->Requisitosmateria->find('first', $options);
		}
		$ofertascarreras = $this->Requisitosmateria->Ofertascarrera->find('list');
		$materias = $this->Requisitosmateria->Materium->find('list');
		$this->set(compact('ofertascarreras', 'materias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Requisitosmateria->id = $id;
		if (!$this->Requisitosmateria->exists()) {
			throw new NotFoundException(__('Invalid requisitosmateria'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Requisitosmateria->delete()) {
			$this->Session->setFlash(__('The requisitosmateria has been deleted.'));
		} else {
			$this->Session->setFlash(__('The requisitosmateria could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
	public function borrarmateria($OfertaId,$OfertasCarrerasId,$id = null) {
		$this->Requisitosmateria->id = $id;
		if (!$this->Requisitosmateria->exists()) {
			throw new NotFoundException(__('No existe la materia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Requisitosmateria->delete()) {
			$this->Session->setFlash(__('La materia ha sido eliminada.'));
		} else {
			$this->Session->setFlash(__('La materia no pudo ser eliminada. Por favor, intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'detallematerias',$OfertaId,$OfertasCarrerasId));
	}
        
}
