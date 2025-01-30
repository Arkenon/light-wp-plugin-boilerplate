<?php
/**
 * Base class for Presentation layer
 * Contains all controllers
 * @since 1.0.0
 * @package PluginName
 * @subpackage Presentation
 */

namespace PluginName\Presentation;

defined( 'ABSPATH' ) || exit;

use Exception;
use PluginName\Common\DI;
use PluginName\Presentation\Admin\Controllers\AdminController;
use PluginName\Presentation\Client\Controllers\ClientController;

final class ControllerInit {

	/**
	 * List of controllers to be initialized
	 * @var array
	 * @since 1.0.0
	 */
	private array $controllers = [
		AdminController::class,
		ClientController::class
	];

	/**
	 * Initialize the program
	 * @throws Exception
	 * @since 1.0.0
	 */
	public function __construct() {
		// Initialize controllers
		$this->initControllers();
	}

	/**
	 * Initialize controllers
	 * @throws Exception
	 * @since 1.0.0
	 */
	public function initControllers() {
		foreach ( $this->controllers as $controller ) {
			DI::container()->get( $controller );
		}
	}
}
