<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="masthead" class="site-header">
	<div class="container-wide header-bar">
		<div class="site-logo">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Стрезам">
					<img class="logo-word" src="<?php echo esc_url( strezam_figma( 'logo-word.png' ) ); ?>" alt="">
					<img class="logo-underline" src="<?php echo esc_url( strezam_figma( 'logo-underline.svg' ) ); ?>" alt="">
					<img class="logo-line" src="<?php echo esc_url( strezam_figma( 'logo-line.svg' ) ); ?>" alt="">
					<img class="logo-mark" src="<?php echo esc_url( strezam_figma( 'logo-mark-a.svg' ) ); ?>" alt="">
					<img class="logo-mark logo-mark--b" src="<?php echo esc_url( strezam_figma( 'logo-mark-b.svg' ) ); ?>" alt="">
				</a>
			<?php endif; ?>
		</div>
		<button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-navigation">
			<img class="nav-icon nav-icon--open" src="<?php echo esc_url( strezam_figma( 'icon-menu.svg' ) ); ?>" alt="" width="22" height="22">
			<img class="nav-icon nav-icon--close" src="<?php echo esc_url( strezam_figma( 'icon-menu-close.svg' ) ); ?>" alt="" width="22" height="22">
			<span class="screen-reader-text">Меню</span>
		</button>
		<nav id="site-navigation" class="main-navigation" aria-label="Головне меню">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'nav-menu',
					'fallback_cb'    => 'strezam_primary_menu_fallback',
				)
			);
			?>
		</nav>
	</div>
</header>
