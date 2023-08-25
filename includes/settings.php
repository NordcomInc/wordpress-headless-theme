<?php

function nordcom_theme_settings_init($wp_customize) {
    $wp_customize->remove_section('title_tagline');
    $wp_customize->remove_section('colors');
    $wp_customize->remove_section('header_image');
    $wp_customize->remove_section('background_image');
    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section('custom_css');
}

add_action('customize_register', 'nordcom_theme_settings_init');

function nordcom_theme_settings_headless_init($wp_customize) {
    $wp_customize->add_section(
        'headless',
        array(
            'title' => 'Headless',
            'priority' => 100,
        )
    );

    $wp_customize->add_setting('headless_redirect_uri', array(
        'default' => '',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control('headless_redirect_uri', array(
        'label' => 'Target URI',
        'section' => 'headless',
        'type' => 'url'
    ));
}

add_action('customize_register', 'nordcom_theme_settings_headless_init');
