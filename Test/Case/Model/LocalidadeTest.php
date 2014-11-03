<?php
App::uses('Localidade', 'Model');

/**
 * Localidade Test Case
 *
 */
class LocalidadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.localidade',
		'app.departamento',
		'app.provincia',
		'app.id_empresa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Localidade = ClassRegistry::init('Localidade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Localidade);

		parent::tearDown();
	}

}
