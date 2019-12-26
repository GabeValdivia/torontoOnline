<?php get_header(); ?>

    <!-- BxSlider Section -->
    <?php get_template_part('template-parts/bxslider' ) ?>

    <!-- What to visit Section -->
    <div class="what-to-visit">
        <?php dynamic_sidebar('front-page'); ?>
    </div>

    <div class="bottom-front-page">
        <!-- About Us Section -->
        <?php get_template_part( 'template-parts/about-us' ); ?>
        <!-- Blog Tips Recent Posts -->
        <?php get_template_part( 'template-parts/blog-tips' ); ?>
    </div>

<?php get_footer(); ?>