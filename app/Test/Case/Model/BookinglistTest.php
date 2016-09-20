<?php
App::uses('Bookinglist', 'Model');

/**
 * Bookinglist Test Case
 */
class BookinglistTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bookinglist',
		'app.book',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bookinglist = ClassRegistry::init('Bookinglist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bookinglist);

		parent::tearDown();
	}

}
