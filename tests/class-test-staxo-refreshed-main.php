<?php
/**
 * Verifies basic CRUD operations of Simple Taxonomy Refreshed
 *
 * @author Neil W. James <neil@familyjames.com>
 * @package test-simple-taxonomy-refreshed
 */

/**
 * Main Simple Taxonomy 2 tests
 */
class Test_STaxo_Refreshed_Main extends WP_UnitTestCase {

	/**
	 * Setup Initial Testing Environment
	 *
	 * Called for every defined test
	 */
	public function setUp() {

		parent::setUp();

		wp_cache_flush();

	}

	/**
	 * Output message to log.
	 *
	 * @param string $text text to output.
	 */
	public function consoleLog( $text ) {
			// phpcs:ignore WordPress.WP.AlternativeFunctions.file_system_read_fwrite
			fwrite( STDERR, $text . "\n" );
	}

	/**
	 * Make sure plugin is activated.
	 */
	public function test_activated() {

		$this->consoleLog( 'Test_STaxo_Refreshed_Main - Start' );

		$this->assertTrue( class_exists( 'SimpleTaxonomyRefreshed_Client' ), 'SimpleTaxonomy_Client class not defined' );

	}


}
