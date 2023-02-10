<?php
/**
 * 
 */
/*
Plugin Name: My Plugin
Description: my plugin
Author: Léa
Version: 1.0.0
Text Domain: myplugin
Domain Path: /languages

*/

class MYPLUGIN
    {
 
        /**
         * __construct
         *
         * A dummy constructor to ensure XFILES is only setup once.
         *
         * @date    21/07/22
         * @since   1.0.0
         *
         * @param   void
         * @return  void
         */
        function __construct()
        {
            // Do nothing.
        }
 
        /**
         * initialize
         *
         * Sets up the ACF plugin.
         *
         * @date    21/07/22
         * @since   1.0.0
         *
         * @param   void
         * @return  void
         */
        function initialize()
        {
            //i18n
            load_plugin_textdomain('myplugin', false, dirname(plugin_basename(__FILE__)) . '/languages/');
 
            function myplugin_enqueue_assets() {
 
            }
            add_action('wp_enqueue_scripts', 'myplugin_enqueue_assets');
 
            include_once('includes/admin/myplugin-admin-config.php');
 
            // Include admin.
            if (is_admin()) {
                
            }            
        }
    }
 
    function myplugin()
    {
        global $myplugin;
 
        // Instantiate only once.
        if (!isset($myplugin)) {
            $myplugin = new MYPLUGIN();
            $myplugin->initialize();
        }
        return $myplugin;
    }
 
    // Instantiate.
    myplugin();