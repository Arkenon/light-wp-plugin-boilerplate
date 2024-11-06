<?php
/**
 * Activation service class for the plugin
 * @package PluginName
 * @subpackage Services
 * @since 1.0.0
 */

namespace PluginName\Services;

defined('ABSPATH') || exit;

class DeactivationService
{
	public function deactivate(): void
	{
		//Define custom deactivation hook
		do_action('plugin_name_deactivation');
	}
}
