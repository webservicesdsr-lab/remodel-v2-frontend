<?php
/**
 * RemodelingWP Theme Functions
 */

/* ===================================================
   Auto-cargar shortcodes desde /pages/
   =================================================== */
function remodelingwp_load_shortcodes() {
    $shortcode_dir = get_template_directory() . '/pages/';
    if (is_dir($shortcode_dir)) {
        foreach (glob($shortcode_dir . '*.php') as $file) {
            require_once $file;
        }
        // Soporte para subcarpetas (ej: /pages/home/)
        foreach (glob($shortcode_dir . '*/') as $subdir) {
            foreach (glob($subdir . '*.php') as $file) {
                require_once $file;
            }
        }
    }
}
add_action('after_setup_theme', 'remodelingwp_load_shortcodes');

/* ===================================================
   Enqueue de estilos y scripts
   =================================================== */
function remodelingwp_enqueue_assets() {
    // CSS principal
    wp_enqueue_style(
        'remodelingwp-style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );

    // Font Awesome
    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css',
        array(),
        '6.6.0'
    );

    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Signika:wght@400;600&display=swap',
        array(),
        null
    );

    // JS principal
    wp_enqueue_script(
        'remodelingwp-script',
        get_template_directory_uri() . '/script.js',
        array(),
        filemtime(get_template_directory() . '/script.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'remodelingwp_enqueue_assets');
