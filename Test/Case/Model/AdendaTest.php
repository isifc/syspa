<?php
App::uses('Adenda', 'Model');

/**
 * Adenda Test Case
 *
 */
class AdendaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.adenda',
		'app.convenioparticulare'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Adenda = ClassRegistry::init('Adenda');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Adenda);

		parent::tearDown();
	}

}
