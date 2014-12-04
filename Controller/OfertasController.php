<?php
App::uses('AppController', 'Controller');
/**
 * Ofertas Controller
 *
 * @property Oferta $Oferta
 * @property PaginatorComponent $Paginator
 */
class OfertasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler','Search.Prg');
       public $helpers = array('Time','Acortar','Js'=>array('Jquery','Ajax'));
        public $uses= array('Oferta');
	var $paginate = array(
		'limit' => 10, 
		'page' => 1,
		'order'=>array('OfertaVigenciaDesde'));
        
/**
 * index method
 *
 * @return void
 */
	public function index() {
            $this->Oferta->recursive = 0;
            $this->Prg->commonProcess();
            $this->Paginator->settings['conditions'] = $this->Oferta->parseCriteria($this->Prg->parsedParams());	
            $this->set('ofertas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function view($id = null) {
        $this->Oferta->recursive = 0;
        if (!$this->Oferta->exists($id)) {
            throw new NotFoundException(__('Invalid oferta'));
        }
        $options = array('conditions' => array('Oferta.' . $this->Oferta->primaryKey => $id));
        $this->set('oferta', $this->Oferta->find('first', $options));
        $this->LoadModel('Ofertascarrera');
        $this->Ofertascarrera->recursive = 2;
        $carreras = $this->Ofertascarrera->find('all',array('conditions' => array('oferta_id = '=> $id)));
 /*               array(
                   'fields' => array(
                        'id',
                        'carrera_id',
                        'Carrera.carrera'
                    ),
                    'conditions' => array('oferta_id = '=> $id)
                )
            );  
 
  */
        $this->set('carreras',$carreras);

        $this->LoadModel('Requisitoscompetencia');
        $this->Requisitoscompetencia->recursive = 0;
        $requisitos = $this->Requisitoscompetencia->find('all',
            array(
                'fields' => array(
                    'id',
                    'competencia_id',
                    'Competencia.competencianombre'
                ),
                'conditions' => array('oferta_id =' => $id)
            )
        );
        $this->set('requisitos',$requisitos);
        
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->Oferta->create();
            
            $vigenciaDesde=$this->request->data['Oferta']['OfertaVigenciaDesde'];
            $this->request->data['Oferta']['OfertaVigenciaDesde']=date("Y-m-d",strtotime($vigenciaDesde));
            $vigenciaHasta=$this->request->data['Oferta']['OfertaVigenciaHasta'];
            $this->request->data['Oferta']['OfertaVigenciaHasta']=date("Y-m-d",strtotime($vigenciaHasta));

                if ($this->Oferta->save($this->request->data)) {
                    $this->Session->setFlash(__('La oferta ha sido guardada.'));
                    return $this->redirect(array('controller' => 'ofertas','action' => 'index'));
                } 
                else {
                    $this->Session->setFlash(__('The oferta could not be saved. Please, try again.'));
		}
	}
            $empresas = $this->Oferta->Empresa->find('list');
            $this->set(compact('empresas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function edit($id = null) {
        if (!$this->Oferta->exists($id)) {
            throw new NotFoundException(__('Invalid oferta'));
        }
            if ($this->request->is(array('post', 'put'))) {
 
                $vigenciaDesde=$this->request->data['Oferta']['OfertaVigenciaDesde'];
                $this->request->data['Oferta']['OfertaVigenciaDesde']=date("Y-m-d",strtotime($vigenciaDesde));
                $vigenciaHasta=$this->request->data['Oferta']['OfertaVigenciaHasta'];
                $this->request->data['Oferta']['OfertaVigenciaHasta']=date("Y-m-d",strtotime($vigenciaHasta));
                
                if ($this->Oferta->save($this->request->data)) {
                    
                    $this->Session->setFlash(__('La oferta ha sido guardada.'));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The oferta could not be saved. Please, try again.'));
                }
            } else {
			$options = array('conditions' => array('Oferta.' . $this->Oferta->primaryKey => $id));
			$this->request->data = $this->Oferta->find('first', $options);
		}
		$empresas = $this->Oferta->Empresa->find('list');
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
		$this->Oferta->id = $id;
		if (!$this->Oferta->exists()) {
			throw new NotFoundException(__('Oferta Inválida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Oferta->delete()) {
			$this->Session->setFlash(__('La oferta ha sido eliminada.'));
		} else {
			$this->Session->setFlash(__('La oferta no pudo ser eliminada. Por favor, intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
