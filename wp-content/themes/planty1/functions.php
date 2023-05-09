<?php
add_action('wp_enqueue_scripts','theme_enqueue_styles' );
function theme_enqueue_styles()
{
    wp_enqueue_style('wpm-riverbank-style',get_template_directory_uri() . '/style.css');
}