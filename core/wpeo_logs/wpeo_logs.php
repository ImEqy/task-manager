<?php

namespace taskmanager\log;

if ( !defined( 'ABSPATH' ) ) exit;
/**
 * Bootstrap file for plugin. Do main includes and create new instance for plugin components
 *
 * @author Eoxia <dev@eoxia.com>
 * @version 1.1.0.0
 */

DEFINE( 'WPEO_TASK_LOGS_VERSION', '1.1.0.0' );
DEFINE( 'WPEO_TASK_LOGS_DIR', basename(dirname(__FILE__)));
DEFINE( 'WPEO_TASK_LOGS_PATH', dirname( __FILE__ ) );
DEFINE( 'WPEO_TASK_LOGS_URL', str_replace( str_replace( "\\", "/", ABSPATH), site_url() . '/', str_replace( "\\", "/", WPEO_TASK_LOGS_PATH ) ) );

/**	Load plugin translation	*/
load_plugin_textdomain( 'wpeolog-i18n', false, dirname( plugin_basename( __FILE__ ) ) . '/language/' );

/**	Define the templates directories */
DEFINE( 'WPEO_TASK_LOGS_TEMPLATES_MAIN_DIR', WPEO_TASK_LOGS_PATH . '/template/');

require_once( WPEO_TASK_LOGS_PATH . '/core/wpeo_util.01.php' );
require_once( WPEO_TASK_LOGS_PATH . '/core/wpeo_template.01.php' );
require_once( WPEO_TASK_LOGS_PATH . '/controller/log.controller.01.php' );

new wpeologs_ctr();

?>
