<?php
App::uses('Borrowinglist', 'Model');

/**
 * Borrowinglist Test Case
 */
class BorrowinglistTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.borrowinglist',
		'app.book',
		'app.author',
		'app.publisher',
		'app.field',
		'app.bookinglist',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Borrowinglist = ClassRegistry::init('Borrowinglist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Borrowinglist);

		parent::tearDown();
	}

}
