<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'animate','owl-carousel' ) );
    }
// endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION
function add_staff_options( $wp_customize ) {
    global $preschool_and_kindergarten_options_posts;
    $wp_customize->add_setting(
        'preschool_and_kindergarten_staff_post_four',
        array(
            'default' => '',
            'sanitize_callback' => 'preschool_and_kindergarten_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'preschool_and_kindergarten_staff_post_four',
        array(
            'label' => __( 'Select Post Four', 'preschool-and-kindergarten' ),
            'section' => 'preschool_and_kindergarten_staff_settings',
            'type' => 'select',
            'choices' => $preschool_and_kindergarten_options_posts,
        )
    );
    $wp_customize->add_setting(
        'preschool_and_kindergarten_staff_post_five',
        array(
            'default' => '',
            'sanitize_callback' => 'preschool_and_kindergarten_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'preschool_and_kindergarten_staff_post_five',
        array(
            'label' => __( 'Select Post Five', 'preschool-and-kindergarten' ),
            'section' => 'preschool_and_kindergarten_staff_settings',
            'type' => 'select',
            'choices' => $preschool_and_kindergarten_options_posts,
        )
    );
    $wp_customize->add_setting(
        'preschool_and_kindergarten_staff_post_six',
        array(
            'default' => '',
            'sanitize_callback' => 'preschool_and_kindergarten_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'preschool_and_kindergarten_staff_post_six',
        array(
            'label' => __( 'Select Post Six', 'preschool-and-kindergarten' ),
            'section' => 'preschool_and_kindergarten_staff_settings',
            'type' => 'select',
            'choices' => $preschool_and_kindergarten_options_posts,
        )
    );
    $wp_customize->add_setting(
        'preschool_and_kindergarten_staff_post_seven',
        array(
            'default' => '',
            'sanitize_callback' => 'preschool_and_kindergarten_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'preschool_and_kindergarten_staff_post_seven',
        array(
            'label' => __( 'Select Post Seven', 'preschool-and-kindergarten' ),
            'section' => 'preschool_and_kindergarten_staff_settings',
            'type' => 'select',
            'choices' => $preschool_and_kindergarten_options_posts,
        )
    );
    $wp_customize->add_setting(
        'preschool_and_kindergarten_staff_post_eight',
        array(
            'default' => '',
            'sanitize_callback' => 'preschool_and_kindergarten_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'preschool_and_kindergarten_staff_post_eight',
        array(
            'label' => __( 'Select Post Eight', 'preschool-and-kindergarten' ),
            'section' => 'preschool_and_kindergarten_staff_settings',
            'type' => 'select',
            'choices' => $preschool_and_kindergarten_options_posts,
        )
    );
}
add_action( 'customize_register', 'add_staff_options' );
