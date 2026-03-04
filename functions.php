<?php
/**
 * H2 Supply Theme functions
 *
 * @package H2_Supply
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue scripts and styles
 */
add_action( 'wp_enqueue_scripts', 'h2supply_enqueue_assets' );
function h2supply_enqueue_assets() {
    // Theme stylesheet
    wp_enqueue_style(
        'h2supply-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
    
    // Google Fonts - Inter
    wp_enqueue_style(
        'h2supply-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );
}

/**
 * Register custom post type for Projects
 */
add_action( 'init', 'h2supply_register_post_types' );
function h2supply_register_post_types() {
    register_post_type( 'prosjekt', array(
        'labels' => array(
            'name'                  => __( 'Prosjekter', 'h2supply' ),
            'singular_name'         => __( 'Prosjekt', 'h2supply' ),
            'add_new'              => __( 'Legg til nytt', 'h2supply' ),
            'add_new_item'         => __( 'Legg til nytt prosjekt', 'h2supply' ),
            'edit_item'            => __( 'Rediger prosjekt', 'h2supply' ),
            'new_item'             => __( 'Nytt prosjekt', 'h2supply' ),
            'view_item'            => __( 'Vis prosjekt', 'h2supply' ),
            'search_items'         => __( 'Søk i prosjekter', 'h2supply' ),
            'not_found'            => __( 'Ingen prosjekter funnet', 'h2supply' ),
            'not_found_in_trash'   => __( 'Ingen prosjekter funnet i papirkurven', 'h2supply' ),
            'parent_item_colon'    => __( 'Forelder:', 'h2supply' ),
            'all_items'            => __( 'Alle prosjekter', 'h2supply' ),
        ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'              => true,
        'show_in_menu'         => true,
        'query_var'            => true,
        'rewrite'              => array( 'slug' => 'prosjekter' ),
        'capability_type'      => 'post',
        'has_archive'          => true,
        'hierarchical'         => false,
        'menu_position'        => 5,
        'menu_icon'            => 'dashicons-hammer',
        'supports'             => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'show_in_rest'         => true,
    ));
}

/**
 * Register block patterns categories
 */
add_action( 'init', 'h2supply_register_pattern_categories' );
function h2supply_register_pattern_categories() {
    register_block_pattern_category(
        'h2supply-hero',
        array( 'label' => __( 'Hero Sections', 'h2supply' ) )
    );
    
    register_block_pattern_category(
        'h2supply-features',
        array( 'label' => __( 'Feature Sections', 'h2supply' ) )
    );
    
    register_block_pattern_category(
        'h2supply-content',
        array( 'label' => __( 'Content Sections', 'h2supply' ) )
    );
    
    register_block_pattern_category(
        'h2supply-cta',
        array( 'label' => __( 'Call to Action', 'h2supply' ) )
    );
    
    register_block_pattern_category(
        'h2supply-footer',
        array( 'label' => __( 'Footer Sections', 'h2supply' ) )
    );
}

/**
 * Add ACF fields if ACF is active
 */
add_action( 'acf/include_fields', 'h2supply_register_acf_fields' );
function h2supply_register_acf_fields() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }
    
    // Project details field group
    acf_add_local_field_group( array(
        'key'    => 'group_prosjekt_details',
        'title'  => __( 'Prosjektdetaljer', 'h2supply' ),
        'fields' => array(
            array(
                'key'   => 'field_prosjekt_kunde',
                'label' => __( 'Kunde', 'h2supply' ),
                'name'  => 'kunde',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_prosjekt_lokasjon',
                'label' => __( 'Lokasjon', 'h2supply' ),
                'name'  => 'lokasjon',
                'type'  => 'text',
            ),
            array(
                'key'   => 'field_prosjekt_aar',
                'label' => __( 'År', 'h2supply' ),
                'name'  => 'aar',
                'type'  => 'number',
                'min'   => 2000,
                'max'   => 2030,
            ),
            array(
                'key'   => 'field_prosjekt_kapasitet',
                'label' => __( 'H2 Kapasitet', 'h2supply' ),
                'name'  => 'kapasitet',
                'type'  => 'text',
                'placeholder' => __( 'f.eks. 100 Nm³/t', 'h2supply' ),
            ),
            array(
                'key'   => 'field_prosjekt_galleri',
                'label' => __( 'Bildegalleri', 'h2supply' ),
                'name'  => 'galleri',
                'type'  => 'gallery',
                'return_format' => 'array',
                'preview_size'  => 'medium',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'prosjekt',
                ),
            ),
        ),
        'position' => 'normal',
        'style'    => 'default',
    ));
}

/**
 * Add theme support
 */
add_action( 'after_setup_theme', 'h2supply_theme_support' );
function h2supply_theme_support() {
    // Add support for featured images
    add_theme_support( 'post-thumbnails' );
    
    // Add support for responsive embeds
    add_theme_support( 'responsive-embeds' );
    
    // Add support for editor styles
    add_theme_support( 'editor-styles' );
    
    // Add support for wide alignment
    add_theme_support( 'align-wide' );
    
    // Add support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Add support for custom header
    add_theme_support( 'custom-header', array(
        'default-image' => '',
        'width'         => 1920,
        'height'        => 600,
        'flex-width'    => true,
        'flex-height'   => true,
    ));
}
