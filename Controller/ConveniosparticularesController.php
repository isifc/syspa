<?php
App::uses('AppController', 'Controller');
/**
 * Conveniosparticulares Controller
 *
 * @property Conveniosparticulare $Conveniosparticulare
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ConveniosparticularesController extends AppController {

/**
 * Components
 *
 * @var array	*/

 
	public $components = array('Paginator', 'Session','Search.Prg');
	public $helpers = array('Acortar') ;
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Conveniosparticulare->recursive = 0;
		$this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Conveniosparticulare->parseCriteria($this->Prg->parsedParams());
		$this->set('conveniosparticulares', $this->Paginator->paginate());
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Conveniosparticulare->exists($id)) {
			throw new NotFoundException(__('Convenio particular invalido'));
		}
		$options = array('conditions' => array('Conveniosparticulare.' . $this->Conveniosparticulare->primaryKey => $id));
		$this->set('conveniosparticulare', $this->Conveniosparticulare->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->loadModel('Tutore');
	
		if ($this->request->is('post')) {
			$this->Conveniosparticulare->create();
			//if ($this->request->data['Conveniosparticulare']['tutore_id']== 1){
				//	$this->request->data['Conveniosparticulare']['tutore_id']= NULL;
		//	}
			$fechaConvenio=$this->request->data['Conveniosparticulare']['FechaFirmaConvenio'];
				$this->request->data['Conveniosparticulare']['FechaFirmaConvenio']=date("Y-m-d",strtotime($fechaConvenio));

				$fechaObraS=$this->request->data['Conveniosparticulare']['FechaAltaObraSocial'];
				$this->request->data['Conveniosparticulare']['FechaAltaObraSocial']=date("Y-m-d",strtotime($fechaObraS));

				$fechaInicio=$this->request->data['Conveniosparticulare']['FechaInicio'];
				$this->request->data['Conveniosparticulare']['FechaInicio']=date("Y-m-d",strtotime($fechaInicio));

				$fechaFin=$this->request->data['Conveniosparticulare']['FechaFin'];
				$this->request->data['Conveniosparticulare']['FechaFin']=date("Y-m-d",strtotime($fechaFin));

			if ($this->Conveniosparticulare->save($this->request->data)) {

				$this->Session->setFlash(__('Se guardaron los cambios satisfactoriamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudieron realizar los cambios satisfactoriamente'));
			}
		}
		$ofertas = $this->Conveniosparticulare->Oferta->find('list', array('fields' => array('OfertaDescripcion')));
		//$empresas = $this->Conveniosparticulare->Empresa->find('list');
		$empresas = $this->Conveniosparticulare->Empresa->find('list', array('fields' => array('EmpresaRazonSocial')));
		//$alumnos = $this->Conveniosparticulare->Alumno->find('list',array('fields' => array('Apellido')));
		$carreras = $this->Conveniosparticulare->Carrera->find('list',array('fields' => array('carrera')));
		$tutores = $this->Conveniosparticulare->Tutore->find('list',array('fields' => array('ApellidoNombre')));
			
		$alumnos = $this->Conveniosparticulare->Alumno->find('list', array('fields' => array('id','name')));

		$this->set(compact('ofertas', 'empresas', 'alumnos', 'carreras', 'tutores'));


	
	


	
	
	}
	

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->loadModel('Alumno');
		if (!$this->Conveniosparticulare->exists($id)) {
			throw new NotFoundException(__('Convenio particular invalido'));
		}
		
		$options = array('conditions' => array('Conveniosparticulare.' . $this->Conveniosparticulare->primaryKey => $id));
		$convenio=$this->Conveniosparticulare->find('first', $options);
		$conveniosparticulare_id=$convenio['Conveniosparticulare']['id'];
		$fechaFirmaConvenio=$convenio['Conveniosparticulare']['FechaFirmaConvenio'];
		//$adendaDescripcion=$convenio['Conveniosparticulare']['AdendaDescripcion'];
		$nombreArtAnterior=$convenio['Conveniosparticulare']['NombreART'];
		$nombreObraSocialAnterior=$convenio['Conveniosparticulare']['NombreObraSocial'];
		$importeObraSocialAnterior=$convenio['Conveniosparticulare']['ImporteArt'];
		$importeAsignacionEstimuloAnterior=$convenio['Conveniosparticulare']['ImporteAsignacionEstimulo'];
		
		$tutorIdAnterior=$convenio['Conveniosparticulare']['tutore_id'];
		$fechaAltaObraSocialAnterior=$convenio['Conveniosparticulare']['FechaAltaObraSocial'];
		$pagaAsignacionEstimuloAnterior=$convenio['Conveniosparticulare']['PagaAsignacionEstumulo'];
		//$fechaAltaARTAnterior=$convenio['Conveniosparticulare']['FechaAltaObraSocial'];
		$importeARTAnterior=$convenio['Conveniosparticulare']['ImporteArt'];
		$this->set('conveniosparticulare', $this->Conveniosparticulare->find('first', $options));

		if ($this->request->is(array('post', 'put'))) {

			$fechaConvenio=$this->request->data['Conveniosparticulare']['FechaFirmaConvenio'];
				$this->request->data['Conveniosparticulare']['FechaFirmaConvenio']=date("Y-m-d",strtotime($fechaConvenio));

				$fechaObraS=$this->request->data['Conveniosparticulare']['FechaAltaObraSocial'];
				$this->request->data['Conveniosparticulare']['FechaAltaObraSocial']=date("Y-m-d",strtotime($fechaObraS));

				$fechaInicio=$this->request->data['Conveniosparticulare']['FechaInicio'];
				$this->request->data['Conveniosparticulare']['FechaInicio']=date("Y-m-d",strtotime($fechaInicio));

				$fechaFin=$this->request->data['Conveniosparticulare']['FechaFin'];
				$this->request->data['Conveniosparticulare']['FechaFin']=date("Y-m-d",strtotime($fechaFin));


			if ($this->Conveniosparticulare->save($this->request->data)) {
				$this->Session->setFlash(__('Convenio guardado satisfactoriamente.'));
						return $this->redirect(array('controller' => 'adendas','action' => 'add',
													$conveniosparticulare_id,
													$fechaFirmaConvenio,
													//$adendaDescripcion,
													$nombreArtAnterior,
													$nombreObraSocialAnterior,
													$importeObraSocialAnterior,
													$importeAsignacionEstimuloAnterior,
													
													$fechaAltaObraSocialAnterior,
													$pagaAsignacionEstimuloAnterior,
													$fechaAltaARTAnterior,
													$importeARTAnterior,
													$tutorIdAnterior));
					
				
				//return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Convenio no guardado'));
			}
		} else {
			$options = array('conditions' => array('Conveniosparticulare.' . $this->Conveniosparticulare->primaryKey => $id));
			$this->request->data = $this->Conveniosparticulare->find('first', $options);
		}
		$ofertas = $this->Conveniosparticulare->Oferta->find('list');
		//$empresas = $this->Conveniosparticulare->Empresa->find('list');
		$empresas = $this->Conveniosparticulare->Empresa->find('list', array('fields' => array('EmpresaRazonSocial')));
		$alumnos = $this->Conveniosparticulare->Alumno->find('list', array('fields' => array('id','name')));
		//$carreras = $this->Conveniosparticulare->Carrera->find('list');
		//$alumnos = $this->Conveniosparticulare->Alumno->find('list', array('fields' => array('NroLegajo')));
		$carreras = $this->Conveniosparticulare->Carrera->find('list',array('fields' => array('carrera')));
			$tutores = $this->Conveniosparticulare->Tutore->find('list',array('fields' => array('ApellidoNombre')));
		$this->set(compact('ofertas', 'empresas', 'alumnos', 'carreras', 'tutores'));


		$fechaFirma=date("d-m-Y",strtotime($this->request->data['Conveniosparticulare']['FechaFirmaConvenio']));
		$this->set('fechaFirma',$fechaFirma);

		$fechaAltaOS=date("d-m-Y",strtotime($this->request->data['Conveniosparticulare']['FechaAltaObraSocial']));
		$this->set('fechaAltaOS',$fechaAltaOS);

		$fechaIni=date("d-m-Y",strtotime($this->request->data['Conveniosparticulare']['FechaInicio']));
		$this->set('fechaIni',$fechaIni);

		$fechaFin=date("d-m-Y",strtotime($this->request->data['Conveniosparticulare']['FechaFin']));
		 $this->set('fechaFin',$fechaFin);
      	

	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Conveniosparticulare->id = $id;
		if (!$this->Conveniosparticulare->exists()) {
			throw new NotFoundException(__('Invalid conveniosparticulare'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Conveniosparticulare->delete()) {
			$this->Session->setFlash(__('El convenio particular ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('El convenio particular no fue eliminado'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function suspenderConvenio($id = null){

		if (!$this->Conveniosparticulare->exists($id)) {
			throw new NotFoundException(__('Convenio invalido'));
		}
		//esto es para ver algunos datos de la empresa a suspender
		$options = array('conditions' => array('Conveniosparticulare.' . $this->Conveniosparticulare->primaryKey => $id));
		$this->set('conveniosparticulare', $this->Conveniosparticulare->find('first', $options));
		//aca suspendo
		if ($this->request->is(array('post', 'put'))) {
			if(!empty($this->request->data['Conveniosparticulare']['FechaCancelacion'])) {
				$fecha4=$this->request->data['Conveniosparticulare']['FechaCancelacion'];
				$this->request->data['Conveniosparticulare']['FechaCancelacion']=date("Y-m-d",strtotime($fecha4));
			}
			if ($this->Conveniosparticulare->save($this->request->data)) {
				if (!empty($this->request->data['Conveniosparticulare']['FechaCancelacion'])) {
					$this->Session->setFlash(__('Se suspendio el convenio Satisfactoriamente.'));
				return $this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash(__('No se suspendio el convenio satisfactoriamente. Debe cargar fecha de cancelacion'));				}
				
			} else {
				$this->Session->setFlash(__('No se pudo suspender el convenio.'));
			}
		} else {
			$options = array('conditions' => array('Conveniosparticulare.' . $this->Conveniosparticulare->primaryKey => $id));
			$this->request->data = $this->Conveniosparticulare->find('first', $options);
		}



		/*$fechaBaja=date("d-m-Y",strtotime($this->request->data['Conveniosparticulare']['FechaCancelacion']));
		 $this->set('fechaBaja',$fechaBaja);*/

	}

	public function experiencia($id = null){

	if (!$this->Conveniosparticulare->exists($id)) {
			throw new NotFoundException(__('Convenio invalido'));
		}
		//esto es para ver algunos datos de la empresa a suspender
		$options = array('conditions' => array('Conveniosparticulare.' . $this->Conveniosparticulare->primaryKey => $id));
		$this->set('conveniosparticulare', $this->Conveniosparticulare->find('first', $options));
		//aca suspendo
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Conveniosparticulare->save($this->request->data)) {
				$this->Session->setFlash(__('Se registro experiencia satisfactoriamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar experiencia.'));
			}
		} else {
			$options = array('conditions' => array('Conveniosparticulare.' . $this->Conveniosparticulare->primaryKey => $id));
			$this->request->data = $this->Conveniosparticulare->find('first', $options);
		}

	}
}
