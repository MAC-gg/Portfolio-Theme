<DOCTYPE html>
<html <?php language_attributes(); // language setting ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); // based on language setting ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); // WordPress added classes ?> style="background-image: url(<?php echo get_theme_file_uri('/img/main-background-wood-grain.jpg'); ?>);">