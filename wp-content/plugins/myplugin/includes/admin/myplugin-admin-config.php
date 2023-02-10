<?php

if(!defined('ABSPATH')) {
    exit;
}

class MYPLUGIN_Admin {
    function __construct(){
        add_action('init', [$this, 'myplugin_cpt']);
        add_action('init', [$this, 'myplugin_cpt_lang']);
        add_action('admin_menu', [$this, "myplugin_admin_config_menu"]);
        
    }
   
    // créer un cpt
   function myplugin_cpt(){
        // todo argument du cpt
        // Ville

        $labels = array(
            'name' => __('town'),
            'singular_name' => __('Ville'),
            'add_new_item' =>  __('Ajouter une ville'),
            'edit_item' =>  __('Modifier une ville'),
            'menu_name' =>  __('town')
        );
    
        $args = array(
            'label' => __('town'),
            'labels' => $labels,
            'public' => true,
            'hierarchical' => false,
            'show_in_rest' => true,
            'has_archive' => true,
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-admin-customizer',
            'rewrite' => ['slug' =>'town']

        );

        // fonction d'appel
        register_post_type('town', $args);
        
    }

   // créer une taxonomy pour notre cpt
   function myplugin_cpt_lang(){
        // todo argument de taxo
        // langue parlé dans les villes

        $labels_lang = array(
            'name'              => _x( 'Lang', 'taxonomy general name' ),
            'singular_name'     => _x( 'Lang', 'taxonomy singular name' ),
            'search_items'      => __( 'Search Lang' ),
            'all_items'         => __( 'All lang' ),
            'edit_item'         => __( 'Edit Lang' ),
            'update_item'       => __( 'Update Lang' ),
            'add_new_item'      => __( 'Add New Lang' ),
            'new_item_name'     => __( 'New Lang Name' ),
            'menu_name'         => __( 'Lang' ),
        );
        $args_lang = array(
            'hierarchical'      => true, // make it hierarchical (like categories)
            'labels'            => $labels_lang,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => [ 'slug' => 'Lang' ],
        );
        
        // fonction d'appel
        register_taxonomy( 'Lang', 'town', $args_lang );

        
   }

   function myplugin_admin_config_menu(){
    add_menu_page(
        __("my plugin options"),
        __("my plugin options"),
        'manage_options',
        "myplugin_options_page",
        [$this, "myplugin_config"],
        'dashicons-carrot'
    );
   }

  
}

new MYPLUGIN_Admin();