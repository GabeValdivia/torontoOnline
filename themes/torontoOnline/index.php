<?php get_header(); ?>

<div id="primary" class="primary">
    <?php while(have_posts() ): the_post(); ?>
        <h1><?php the_title(); ?></h1>

        <?php the_content(); ?>

        <h2>From index.php!</h2>

<?php endwhile; ?>

</div>

<?php get_footer(); ?>