<?php
$photo   = strezam_figma( 'hero-photo.png' );
$product = strezam_figma( 'hero-product.png' );
$shadow  = strezam_figma( 'hero-shadow.svg' );
?>
<section class="hero-section">
	<div class="hero-visual">
		<div class="hero-photo-frame">
			<img class="hero-bg" src="<?php echo esc_url( $photo ); ?>" alt="">
		</div>
		<img class="hero-shadow" src="<?php echo esc_url( $shadow ); ?>" alt="">
		<div class="hero-pack">
			<img src="<?php echo esc_url( $product ); ?>" alt="Упаковка Стрезам, 60 капсул по 50 мг">
		</div>
	</div>
	<div class="hero-scrim" aria-hidden="true"></div>
	<div class="hero-copy">
		<h1 class="hero-title">
			<span class="hero-title-main"><?php echo esc_html( strezam_field( 'hero_title', 'Тривога має більше ніж один механізм дії' ) ); ?></span>
			<span class="hero-title-accent"><?php echo esc_html( strezam_field( 'hero_accent', 'Стрезам діє подвійно' ) ); ?></span>
		</h1>
		<p class="hero-description">
			<?php echo esc_html( strezam_field( 'hero_text', 'Рівномірна, контрольована дія на тривогу: без седації, без звикання, без когнітивних порушень' ) ); ?>
		</p>
		<div class="hero-buttons">
			<a href="#mechanism" class="btn btn-primary">Дізнатися більше <img src="<?php echo esc_url( strezam_figma( 'icon-arrow.svg' ) ); ?>" alt="" width="18" height="18"></a>
			<a href="#materials" class="btn btn-outline">Інструкція</a>
		</div>
	</div>
</section>
