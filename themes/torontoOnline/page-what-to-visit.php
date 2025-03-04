<?php 
/*
* Template Name: What to Visit
*/
get_header(); ?>

<?php if(has_post_thumbnail() ) { ?>
    <div class="featured">
        <?php the_post_thumbnail('featured'); ?>
        <h2><?php the_title(); ?></h2>
    </div>
    
<?php }else { ?>
        <h2 class="noimage"><?php the_title(); ?></h2>

<?php }?>

<div id="primary" class="primary no-sidebar post-<?php the_ID(); ?>">
    <?php $args = array(
        'posts_per_page' => 5,
        'cat' => 5,
        'order' => 'DESC',
        'orderby' => 'date' 
    ); ?>
    <?php $visit = new WP_Query($args); ?>

    <ul class="blog-visit">
    <?php while($visit->have_posts() ): $visit->the_post(); ?>
    <li>
        <div class="featured">
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium-blog'); ?>            
            </a>
            <div class="category">
                <?php the_category(', '); ?>
            </div>
        </div>
        

        <div class="content">
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
        </div>

        <div class="post-information">
            <div class="author">
                By: <span><?php the_author(); ?><span>
            </div>
            <div class="date">
                <?php echo the_time('F j, Y'); ?>
            </div>
        </div>
    </li>
    <?php endwhile; wp_reset_postdata(); ?>    
    </ul>

</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>