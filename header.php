<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo Kirki::get_option('strive3_theme_kirki_fields', 'strive3_favicon') ?>">
    <title><?php bloginfo('name'); ?> - <?php single_post_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-4 col-6 my-auto">
                <a href="<?php echo home_url(); ?>"><img class="strive3-top-logo" src="<?php echo Kirki::get_option('strive3_theme_kirki_fields', 'strive3_top_logo') ?>" alt="logo" /></a>
                </div>
                <div class="col-md-8 col-6 my-auto">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'menu_class' => 'top-menu'
                        )
                    ); ?>
                    <div class="s3-mobile-trigger">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>