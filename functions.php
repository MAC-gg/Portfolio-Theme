<?php

    function load_uni_scripts() {

        /* LOAD FONTS */
        wp_enqueue_style('font-Roboto', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900');
        wp_enqueue_style('font-Rubik', '//fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900');
        /* FONT AWESOME LOADED WITH PLUGIN */

        /* LOAD MAIN CSS */
        wp_enqueue_style('css-mac-main', get_stylesheet_uri());
        wp_enqueue_style('css-bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css');
        wp_enqueue_style('css-slick-slider', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

        /* LOAD BOOTSTRAP JS */
        wp_enqueue_script('js-bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js');

        /* LOAD jQuery */
        // wp_enqueue_script('js-jQuery-migrate', '//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js', NULL, '3.3.2', TRUE);
        // wp_enqueue_script('js-jQuery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', NULL, '3.6.0', TRUE);
        wp_enqueue_script('js-jQuery-load1', '//code.jquery.com/jquery-1.11.0.min.js', NULL, '1.11.0', TRUE);
        wp_enqueue_script('js-jQuery-load2', '//code.jquery.com/jquery-migrate-1.2.1.min.js', NULL, '1.2.1', TRUE);

        /* LOAD SLICK */
        wp_enqueue_script('js-slick-slider', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', NULL, '1.8.1', TRUE);

        /* MAC CUSTOM SCRIPTS */
        wp_enqueue_script('js-mac-custom-scripts', get_theme_file_uri('/js/mac-custom-scripts.js'), NULL, '1.0', TRUE);
    }
    add_action('wp_enqueue_scripts', 'load_uni_scripts');

?>