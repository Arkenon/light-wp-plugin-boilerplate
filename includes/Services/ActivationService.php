<?php
/**
 * Deactivation service class for the plugin
 * @package PluginName
 * @subpackage Services
 * @since 1.0.0
 */

namespace PluginName\Services;

defined('ABSPATH') || exit;

class ActivationService
{
	public function activate(): void
	{
		//Define custom activation hook
		do_action('plugin_name_activation');
	}
}
