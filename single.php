<?php
/**
 * Single post template
 */

get_header(); ?>


<div class="container">
    <div class="single-post">
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <?php the_post_thumbnail(); ?>
            <h2><?php the_title(); ?></h2>
            <div class="post-category"><?php the_category(' , '); ?></div>
            <h6><?php the_author(); ?></h6>
            <div class="post-main-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile;
    endif; ?>

    </div>
</div>

<?php
get_footer(); ?>
