<?php

$args = array(
    'post_type' => 'services',
    'post_status' => 'publish',
    'posts_per_page' => 18,  
    'paged' => $paged,
);

$services_query = new WP_Query( $args );
?>

<section class="services">  
        
    <div class="container center">
        <div>
            <?php if($title = get_sub_field('title')): ?> 
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>
        </div>
    </div>
    
    <?php if ( $services_query->have_posts() ) : ?>
        <div class="services__wrapper">
            <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                <div class="large-2 medium-12"> 
                    <div class="services__item">
                        <a href="<?php the_permalink(); ?>"> 
                            <div class="services__title">
                                <h5><?php the_title(); ?></h5>    
                            </div>
                            <?php the_post_thumbnail(); ?>
                            <div class="services__back"></div>
                        </a> 
                        
                    </div>  
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <?php endif; ?>
    

</section>