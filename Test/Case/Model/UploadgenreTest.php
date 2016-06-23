<?php
App::uses('Uploadgenre', 'Model');

/**
 * Uploadgenre Test Case
 *
 */
class UploadgenreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.uploadgenre',
		'app.genre',
		'app.gallery',
		'app.city',
		'app.country',
		'app.uploadgallery',
		'app.galleries_genre'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Uploadgenre = ClassRegistry::init('Uploadgenre');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Uploadgenre);

		parent::tearDown();
	}

}
