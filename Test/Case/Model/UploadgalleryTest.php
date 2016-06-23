<?php
App::uses('Uploadgallery', 'Model');

/**
 * Uploadgallery Test Case
 *
 */
class UploadgalleryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.uploadgallery',
		'app.gallery',
		'app.city',
		'app.country',
		'app.genre',
		'app.uploadgenre',
		'app.galleries_genre'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Uploadgallery = ClassRegistry::init('Uploadgallery');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Uploadgallery);

		parent::tearDown();
	}

}
