<?php
Kirki::add_section('general_settings', array(
    'title' => esc_attr__('General settings', 'sydney2021'),
    'priority' => 1,
    'capability' => 'edit_theme_options',
));

Kirki::add_field('sydney2021', array(
    'type' => 'radio-buttonset',
    'settings' => 'type-logo',
    'label' => esc_html__('Select type of logo', 'sydney2021'),
    'section' => 'general_settings',
    'default' => 'text',
    'choices' => array(
        'text' => esc_html__('Text', 'sydney2021'),
        'image' => esc_html__('Image', 'sydney2021'),
    ),
));

Kirki::add_field('sydney2021', array(
    'type' => 'image',
    'settings' => 'logo-img',
    'label' => esc_html__('Image logo', 'sydney2021'),
    'section' => 'general_settings',
    'active_callback' => array(
        array(
            'setting' => 'type-logo',
            'operator' => '==',
            'value' => 'image',
        ),
    ),
));

Kirki::add_field('sydney2021', array(
    'type' => 'text',
    'settings' => 'text-logo',
    'label' => esc_html__('Insert your logo', 'sydney2021'),
    'section' => 'general_settings',
    'default' => 'Sydney 2021',
    'sanitize_callback' => 'wp_kses_post',
    'active_callback' => array(
        array(
            'setting' => 'type-logo',
            'operator' => '==',
            'value' => 'text',
        ),
    ),
));

Kirki::add_field('sydney2021', array(
    'type' => 'slider',
    'settings' => 'height-logo',
    'label' => esc_html__('Logo Height (px)', 'sydney2021'),
    'section' => 'general_settings',
    'default' => 70,
    'choices' => array(
        'min' => '0',
        'max' => '400',
        'step' => '1',
    ),
    'active_callback' => array(
        array(
            'setting' => 'type-logo',
            'operator' => '==',
            'value' => 'image',
        ),
    ),
));

Kirki::add_field('sydney2021', array(
    'type' => 'typography',
    'settings' => 'typography-logo',
    'label' => esc_attr__('Typography for logo', 'sydney2021'),
    'description' => esc_attr__('Select the main typography options for your logo.', 'sydney2021'),
    'help' => esc_attr__('The typography options you set here apply to your logo.', 'sydney2021'),
    'section' => 'general_settings',
    'default' => array(
        'font-family' => 'Montserrat',
        'variant' => '600',
        'font-size' => '20px',
        'line-height' => '32px',
        'letter-spacing' => '0',
        'color' => '',
        'text-transform' => 'none',
        'text-align' => 'left',
    ),
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => '.logo-site',
        ),
    ),
    'active_callback' => array(
        array(
            'setting' => 'type-logo',
            'operator' => '==',
            'value' => 'text',
        ),
    ),
));