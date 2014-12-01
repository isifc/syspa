<?php
App::uses('Estadocuenta', 'Model');

/**
 * Estadocuenta Test Case
 *
 */
class EstadocuentaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estadocuenta',
		'app.empresa',
		'app.localidade',
		'app.departamento',
		'app.provincia',
		'app.id_empresa',
		'app.anexo',
		'app.conveniosparticulare',
		'app.oferta',
		'app.ofertascarrera',
		'app.carrera',
		'app.alumno',
		'app.alumnosmateria',
		'app.materia',
		'app.requisitosmateria',
		'app.postulacione',
		'app.requisitoscompetencias',
		'app.competencia',
		'app.area',
		'app.actividade',
		'app.tarea',
		'app.tutore',
		'app.firmante'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Estadocuenta = ClassRegistry::init('Estadocuenta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Estadocuenta);

		parent::tearDown();
	}

}
