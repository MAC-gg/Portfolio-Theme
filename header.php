<DOCTYPE html>
<html <?php language_attributes(); // language setting ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); // based on language setting ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); // WordPress added classes ?> style="background-image: url(<?php echo get_theme_file_uri('/img/main-background-wood-grain.jpg'); ?>);">
        <header>
            <div class="container">
                <h1 class="center" style="color:white;text-align:center;text-shadow:2px 2px 3px #333;">Hello there!</h1>
            </div>
        </header>