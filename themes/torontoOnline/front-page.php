<?php get_header(); ?>


<div class="bottom-front-page">
    <!-- About Us Section -->
    <div class="about-us">
        <?php $aboutUs = new WP_Query( 'page_id=12'); ?>
        <?php while($aboutUs->have_posts() ): $aboutUs->the_post(); ?>

                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                

                
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <!-- Blog Tips Recent Posts -->
    <div class="blog-tips">
        <h2>Tips for Travel to Toronto</h2>
        <?php $args = array(
            'cat' => 4,
            'posts_per_page' => 2,
            'order' => 'DESC',
            'orderby' => 'date'
        ); ?>
        <?php $travelTips = new WP_Query($args); ?>
        <?php while($travelTips->have_posts() ): $travelTips->the_post(); ?>

        <ul>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium-blog'); ?>
                </a>
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>

                <a class="read-more" href="<?php the_permalink(); ?>">Continue Reading</a>

            </li>
        </ul>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</div>

<?php get_footer(); ?>