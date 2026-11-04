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
	<div class="container header-bar">
		<div class="site-logo">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url( strezam_image( 'site_logo', 'logo.png' ) ); ?>" alt="Стрезам">
				</a>
			<?php endif; ?>
		</div>
		<button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-navigation">
			<span class="nav-toggle-box" aria-hidden="true"></span>
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
