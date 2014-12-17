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
		$this->set('conveniosparticulare', $this->Conveniosparticulare->find('first', $options));

		$convenio=$this->Conveniosparticulare->find('first', $options);
		$conveniosparticulare_id=$convenio['Conveniosparticulare']['id'];
		if (is_null($convenio['Conveniosparticulare']['FechaFirmaConvenio'])){
			$fechaFirmaConvenio="0000-00-00";
		}else{
			$fechaFirmaConvenio=$convenio['Conveniosparticulare']['FechaFirmaConvenio'];
		}
		if (is_null($convenio['Conveniosparticulare']['NombreART'])){
			$nombreArtAnterior="";
		}else{
			$nombreArtAnterior=$convenio['Conveniosparticulare']['NombreART'];
		}
		if (is_null($convenio['Conveniosparticulare']['NombreObraSocial'])){
			$nombreObraSocialAnterior="";
		}else{
			$nombreObraSocialAnterior=$convenio['Conveniosparticulare']['NombreObraSocial'];
		}
		if (is_null($convenio['Conveniosparticulare']['ImporteArt'])){
			$importeARTAnterior=0;
		}else{
			$importeARTAnterior=$convenio['Conveniosparticulare']['ImporteArt'];
		}
		if (is_null($convenio['Conveniosparticulare']['ImporteObraSocial'])){
			$importeObraSocialAnterior=0;
		}else{
			$importeObraSocialAnterior=$convenio['Conveniosparticulare']['ImporteObraSocial'];
		}
		if (is_null($convenio['Conveniosparticulare']['ImporteAsignacionEstimulo'])){
			$$importeAsignacionEstimuloAnterior=0;
		}else{
			$importeAsignacionEstimuloAnterior=$convenio['Conveniosparticulare']['ImporteAsignacionEstimulo'];
		}
		
		
/*
		if (is_null($convenio['Conveniosparticulare']['tutore_id'])){
			$tutorIdAnterior=1;
		}else{
			$tutorIdAnterior=$convenio['Conveniosparticulare']['tutore_id'];
		}
		*/
		if (is_null($convenio['Conveniosparticulare']['PagaAsignacionEstumulo'])){
			$pagaAsignacionEstimuloAnterior=0;
		}else{
			$pagaAsignacionEstimuloAnterior=$convenio['Conveniosparticulare']['PagaAsignacionEstumulo'];
		}
		if (is_null($convenio['Conveniosparticulare']['FechaAltaObraSocial'])){
			$fechaAltaObraSocialAnterior="0000-00-00";
		}else{
			$fechaAltaObraSocialAnterior=$convenio['Conveniosparticulare']['FechaAltaObraSocial'];
		}
		
		
		if ($this->request->is(array('post', 'put'))) {

			
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
													//$fechaAltaARTAnterior,
													$importeARTAnterior
													
													));
					
				
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
