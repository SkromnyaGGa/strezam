<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="masthead" class="site-header">
    <div class="container">
        <div class="site-logo">
            <?php 
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                $upload_dir = wp_get_upload_dir();
                $logo_url = $upload_dir['baseurl'] . '/' . date('Y/m') . '/Logo-svg-2.png';
                echo '<a href="' . esc_url( home_url( '/' ) ) . '"><img src="' . esc_url( $logo_url ) . '" alt="Strezam"></a>';
            }
            ?>
        </div>
        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-menu',
            ) );
            ?>
        </nav>
    </div>
</header>