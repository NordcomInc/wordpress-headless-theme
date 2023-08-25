<?php
require get_template_directory() . '/includes/settings.php';

if (!function_exists('nordcom_wp_setup')) {
    function nordcom_wp_setup() {
        // https://codex.wordpress.org/Function_Reference/add_theme_support
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        // https://codex.wordpress.org/Post_Formats
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat',
        ));
    }
}

add_action('after_setup_theme', 'nordcom_wp_setup');
