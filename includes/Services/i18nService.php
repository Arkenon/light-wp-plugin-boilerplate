<?php
/**
 * i18n service class for plugin
 * @package PluginName
 * @subpackage Services
 * @since 1.0.0
 */

namespace PluginName\Services;

use PluginName\Common\Constants;

defined( 'ABSPATH' ) || exit;

class i18nService {
	public function __construct() {
		// Load plugin text domain for translation
		load_plugin_textdomain(
			Constants::NAME,
			false,
			PLUGIN_NAME_PATH . 'languages/'
		);
	}
}
