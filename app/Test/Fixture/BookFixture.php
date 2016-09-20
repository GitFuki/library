<?php
/**
 * Book Fixture
 */
class BookFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'author_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'publisher_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'published' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'field_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'bestseller' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'price' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'page' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'isbn' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'summary' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created_time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified_time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'author_id' => 1,
			'publisher_id' => 1,
			'published' => '2016-09-20 02:21:19',
			'field_id' => 1,
			'bestseller' => 1,
			'price' => '',
			'page' => 1,
			'isbn' => 1,
			'summary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created_time' => '2016-09-20 02:21:19',
			'modified_time' => '2016-09-20 02:21:19'
		),
	);

}
