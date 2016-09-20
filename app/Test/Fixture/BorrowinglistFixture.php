<?php
/**
 * Borrowinglist Fixture
 */
class BorrowinglistFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'book_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'borrowed_time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'return_time' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'book_id' => 1,
			'user_id' => 1,
			'borrowed_time' => '2016-09-20 02:23:04',
			'return_time' => '2016-09-20 02:23:04',
			'created_time' => '2016-09-20 02:23:04',
			'modified_time' => '2016-09-20 02:23:04'
		),
	);

}
