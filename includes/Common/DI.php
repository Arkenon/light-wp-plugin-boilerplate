<?php
/**
 * Dependency Injection Container Configurations
 * @package PluginName
 * @subpackage Common
 * @since 1.0.0
 */

namespace PluginName\Common;

defined( 'ABSPATH' ) || exit;

use DI\Container;
use DI\ContainerBuilder;
use Exception;

class DI {
	/**
	 * Dependency Injection Container
	 * @return Container
	 * @throws Exception
	 * @since 1.0.0
	 */
	public static function container(): Container {
		$containerBuilder = new ContainerBuilder();

		return $containerBuilder->build();
	}
}
