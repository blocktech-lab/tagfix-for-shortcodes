<?php
/*
Plugin Name: TagFix for Shortcodes
Plugin URI: https://blocktech.dev
Description: WP automatically inserts <p> and <br> tags, but disables this functionality within shortcodes.
Version: 0.5.2
Author: Blocktech Lab
*/

    defined( 'ABSPATH' ) || exit;
    $data = get_file_data( __FILE__, array( 'Version' ) );

    define( 'TAGFIX_VERSION', $data[0] );
    define( 'TAGFIX_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );
    define( 'TAGFIX_URI', trailingslashit( esc_url( plugin_dir_url( __FILE__ ) ) ) );
    define( 'TAGFIX_PLUGIN_FILE', __FILE__ );

    if( is_admin() ){
        require_once TAGFIX_DIR . 'admin.php';
    }else{
        require_once TAGFIX_DIR . 'front.php';
    }
