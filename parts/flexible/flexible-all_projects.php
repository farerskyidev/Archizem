<?php
/*
 * Block Name: Projects Block
 * Slug:
 * Description:
 * Keywords:
 * Dependency:
 * Align: false
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
$args = array(
    'post_type' => 'projects',
    'post_status' => 'publish',
    'posts_per_page' => 18,  
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // Use the current page number
    'taxonomy'     => 'category',
);


$projects_query = new WP_Query( $args );

?>

    
    <div class="all-projects">  
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
        <div class="container center">
            
            <?php if($title = get_sub_field('title')): ?> 
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>
            <?php if($text = get_sub_field('text')): ?>
                <h5><?php echo $text; ?></h5>
            <?php endif; ?>
            
        </div>
        <?php
        $terms = get_terms( 'category' );
            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
            echo '<ul id="filters-all">';
            echo '<button class="filter-button" data-filter="*">Всі</button>';
            foreach ( $terms as $term ) {
            echo '<button data-filter=".' . $term->slug . '" >' . $term->name . '</button>';
            }
            echo '</ul>';
        }
        ?> 
        <?php if ( $projects_query->have_posts() ) : ?> 
            <div class="all-projects-wrapper">    
                <?php while ( $projects_query->have_posts() ) : $projects_query->the_post(); ?>
                <?php $terms_2 = get_the_terms( get_the_ID() , 'category' );  ?>  
                    <div class="large-2 medium-4 small-12 <?php echo $terms_2[0]->slug; ?>" data-category="<?php echo $terms_2[0]->slug; ?>">  
                        <div class="all-projects__item">
                            <a href="<?php the_permalink(); ?>"> 
                                <div class="all-projects__title">
                                    <h6><?php the_title(); ?></h6>
                                </div>
                                <?php the_post_thumbnail(); ?>
                                
                            </a>
                        </div>  
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
            </div>



            <?php
        // Pagination
        $total_pages = $projects_query->max_num_pages;
        if ($total_pages > 1) {
            $current_page = max(1, get_query_var('paged'));
            echo '<div class="pagination">';
            echo paginate_links(array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => 'page/%#%',
                'current' => $current_page,
                'total' => $total_pages,
                'prev_text' => __('<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.26416 1.19995L1.9002 7.56391L8.26416 13.9279" stroke="#2C2C36" stroke-width="2"/>
                </svg>
                '),
                'next_text' => __('<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_0_515)">
                <path d="M6.73584 15.8L13.0998 9.43609L6.73584 3.07213" stroke="#2C2C36" stroke-width="2"/>
                </g>
                <defs>
                <clipPath id="clip0_0_515">
                <rect width="18" height="18" fill="white" transform="translate(18.5 18.5) rotate(-180)"/>
                </clipPath>
                </defs>
                </svg>'),
            ));
            echo '</div>';
        }
        ?>
        <?php endif; ?>

    </div> 
    
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script> 