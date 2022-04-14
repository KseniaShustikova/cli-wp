<?php
if (!class_exists('Kirki')) {
    return;
}
Kirki::add_config('sydney2021', array(
    'capability' => 'edit_theme_options',
    'option_type' => 'theme_mod',
));

/**
 * General Settings
 */
require get_template_directory() . '/inc/customizer/sections/general.php';

//KIRKI CONFIGURATION

//General configuration for Kirki
Kirki::add_config('theme_config_id', [
    'capability' => 'edit_theme_options',
    'option_type' => 'theme_mod',
]);

add_filter('kirki_telemetry', '__return_false');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */

function sydney2021_customize_preview_js()
{
    wp_enqueue_script('sydney2021-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'sydney2021_customize_preview_js');