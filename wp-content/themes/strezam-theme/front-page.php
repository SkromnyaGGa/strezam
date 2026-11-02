<?php
get_header();
?>

<main id="primary" class="site-main">
    <?php
    // Hero Section
    get_template_part( 'template-parts/content', 'hero' );

    // About Section
    get_template_part( 'template-parts/content', 'about' );

    // Services Section
    get_template_part( 'template-parts/content', 'services' );

    // Portfolio Section
    get_template_part( 'template-parts/content', 'portfolio' );

    // Testimonials Section
    get_template_part( 'template-parts/content', 'testimonials' );

    // Process Section
    get_template_part( 'template-parts/content', 'process' );

    // Team Section
    get_template_part( 'template-parts/content', 'team' );

    // Contact Section
    get_template_part( 'template-parts/content', 'contact' );
    ?>
</main>

<?php
get_footer();
