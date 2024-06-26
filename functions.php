<?php
function enqueue_custom_styles_and_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2');
    
    // Estilos personalizados (CSS principal del tema)
    wp_enqueue_style('custom-style', get_stylesheet_uri(), array('bootstrap'), '1.0');
    
    // jQuery (WordPress ya lo incluye por defecto)
    wp_enqueue_script('jquery');

    // Bootstrap JS
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), '4.5.2', true);
    
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');

