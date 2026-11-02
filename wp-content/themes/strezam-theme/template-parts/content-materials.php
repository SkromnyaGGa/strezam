<?php
$photo = strezam_image( 'banner_photo', 'main-photo.png' );
$files = array(
	array( 'Коротка інформація для лікаря', 'Ключові дані про механізм дії та клінічні докази — дві сторінки для лікаря' ),
	array( 'Презентація про механізм дії', 'Ключові дані про механізм дії та клінічні докази — дванадцять сторінок для лікаря' ),
	array( 'Клінічні дослідження', 'Ключові дані про механізм дії та клінічні докази — вісім сторінок для лікаря' ),
);
?>
<section id="materials" class="section materials-section">
	<div class="container">
		<p class="eyebrow"><span>матеріали</span></p>
		<h2><?php echo esc_html( strezam_field( 'materials_title', 'Матеріали для Вашої практики' ) ); ?></h2>
		<div class="file-grid">
			<?php foreach ( $files as $file ) : ?>
				<article class="file-card">
					<span class="file-icon" aria-hidden="true"></span>
					<h3><?php echo esc_html( $file[0] ); ?></h3>
					<p><?php echo esc_html( $file[1] ); ?></p>
					<a href="#materials">Завантажити .pdf <span aria-hidden="true">↓</span></a>
				</article>
			<?php endforeach; ?>
		</div>
		<div class="closing-banner" <?php echo $photo ? 'style="--banner-photo: url(' . esc_url( $photo ) . ');"' : ''; ?>>
			<div class="closing-copy">
				<h2><?php echo esc_html( strezam_field( 'banner_title', 'Стрезам — у фокусі на пацієнта' ) ); ?></h2>
				<p>Більше можливостей для контролю тривоги завдяки подвійному механізму дії</p>
				<a class="btn btn-primary" href="#materials">Завантажити інструкцію <span aria-hidden="true">↓</span></a>
				<p class="rx-note">Стрезам®. Відпускається за рецептом лікаря. Biocodex, Франція.</p>
			</div>
		</div>
	</div>
</section>
