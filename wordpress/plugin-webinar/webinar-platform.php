
<?php
/**
 * Plugin Name: Webinar Platform Integration
 * Description: WordPress integration for the AWS serverless webinar platform.
 * Version: 0.1.0
 * Requires PHP: 8.0
 * Text Domain: webinar-platform
 */

// Stop execution if this PHP file is accessed outside WordPress.
if (!defined('ABSPATH')) {
    // Terminate execution without exposing plugin internals.
    exit;
}

// Define the plugin version for future compatibility checks.
define('WEBINAR_PLATFORM_VERSION', '0.1.0');

// Define the absolute path to this plugin's directory.
define('WEBINAR_PLATFORM_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Define the public URL pointing to this plugin's directory.
define('WEBINAR_PLATFORM_PLUGIN_URL', plugin_dir_url(__FILE__));

// Register a callback that runs after WordPress has loaded its plugins.
add_action('plugins_loaded', 'webinar_platform_initialize');

/**
 * Initialize the webinar integration plugin.
 *
 * This function is intentionally minimal during project scaffolding.
 * Later branches will register the integration's public functionality.
 *
 * @return void
 */
function webinar_platform_initialize(): void
{
    // No application functionality is initialized during scaffolding.
}
