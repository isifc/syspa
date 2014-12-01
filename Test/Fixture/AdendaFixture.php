<?php
/**
 * AdendaFixture
 *
 */
class AdendaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'convenioparticulare_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'FechaFirmaConvenioAnterior' => array('type' => 'date', 'null' => false, 'default' => null),
		'AdendaDescripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'AdendaArchivoAdjunto' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'NombreArtAnterior' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'NombreObraSocialAnterior' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ImporteObraSocialAnterior' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false),
		'ImporteAsignacionEstimuloAnterior' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false),
		'TutorIdAnterior' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'FechaAltaObraSocialAnterior' => array('type' => 'date', 'null' => false, 'default' => null),
		'PagaAsignacionEstimuloAnterior' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'FechaAltaARTAnterior' => array('type' => 'date', 'null' => false, 'default' => null),
		'ImporteARTAnterior' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'Ref1759' => array('column' => 'convenioparticulare_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'convenioparticulare_id' => 1,
			'FechaFirmaConvenioAnterior' => '2014-12-01',
			'AdendaDescripcion' => 'Lorem ipsum dolor sit amet',
			'AdendaArchivoAdjunto' => 'Lorem ipsum dolor sit amet',
			'NombreArtAnterior' => 'Lorem ipsum dolor sit amet',
			'NombreObraSocialAnterior' => 'Lorem ipsum dolor sit amet',
			'ImporteObraSocialAnterior' => '',
			'ImporteAsignacionEstimuloAnterior' => '',
			'TutorIdAnterior' => 1,
			'FechaAltaObraSocialAnterior' => '2014-12-01',
			'PagaAsignacionEstimuloAnterior' => 1,
			'FechaAltaARTAnterior' => '2014-12-01',
			'ImporteARTAnterior' => ''
		),
	);

}
