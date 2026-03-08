<?php
function astra_child_styles() {
    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_uri(),
        array('astra-theme-css')
    );
}

add_action('wp_enqueue_scripts', 'astra_child_styles');