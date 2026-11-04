<?php
$photo   = strezam_image( 'hero_photo', 'main-photo.png' );
$product = strezam_image( 'hero_product', 'hero-second.png' );
?>
<section class="hero-section">
	<?php if ( $photo ) : ?>
		<div class="hero-background" style="background-image: url('<?php echo esc_url( $photo ); ?>');"></div>
	<?php endif; ?>
	<div class="container hero-layout">
		<div class="hero-content">
			<h1 class="hero-title">
				<span class="purple-text"><?php echo esc_html( strezam_field( 'hero_title', 'Тривога має більше ніж один механізм дії' ) ); ?></span>
				<span class="orange-text"><?php echo esc_html( strezam_field( 'hero_accent', 'Стрезам діє подвійно' ) ); ?></span>
			</h1>
			<p class="hero-description">
				<?php echo esc_html( strezam_field( 'hero_text', 'Рівномірна, контрольована дія на тривогу: без седації, без звикання, без когнітивних порушень' ) ); ?>
			</p>
			<div class="hero-buttons">
				<a href="#mechanism" class="btn btn-primary">Дізнатися більше <span aria-hidden="true">↓</span></a>
				<a href="#materials" class="btn btn-outline">Інструкція</a>
			</div>
		</div>
		<?php if ( $product ) : ?>
			<div class="hero-product-img">
				<img src="<?php echo esc_url( $product ); ?>" alt="Упаковка Стрезам, 60 капсул по 50 мг">
			</div>
		<?php endif; ?>
	</div>
</section>
