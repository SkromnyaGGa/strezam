<?php
get_header();
?>

<main id="primary" class="site-main">
	<?php
	get_template_part( 'template-parts/content', 'hero' );
	get_template_part( 'template-parts/content', 'mechanism' );
	get_template_part( 'template-parts/content', 'practice' );
	get_template_part( 'template-parts/content', 'indications' );
	get_template_part( 'template-parts/content', 'evidence' );
	get_template_part( 'template-parts/content', 'product' );
	get_template_part( 'template-parts/content', 'expert' );
	get_template_part( 'template-parts/content', 'materials' );
	?>
</main>

<?php
get_footer();
