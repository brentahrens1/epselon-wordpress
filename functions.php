<?php 
function epselon_files() {
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    if (strstr($_SERVER['SERVER_NAME'], 'localhost:10023')) {
        wp_enqueue_script('epselon_javascript', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    } else {
        wp_enqueue_script('epselon_vendors_js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), NULL, '1.0', true);
        wp_enqueue_script('epselon_javascript', get_theme_file_uri('/bundled-assets/scripts.3ecd80a4d4a646bfcadf.js'), NULL, '1.0', true);
        wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.3ecd80a4d4a646bfcadf.css'));
    }
}

add_action('wp_enqueue_scripts', 'epselon_files');