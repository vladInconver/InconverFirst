<?php
/*
  * Template name: Home
  * */
get_header();

$custom_query = new WP_Query( array( 'post_type' => 'services','posts_per_page'=>'1' ) );

if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
    <div class="h2" ><?php the_title(); ?></div>
    <div class="contact-content">
        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>
        <div class="tech-no">


    <?php //global $query_string; query_posts($query_string.'&posts_per_page=3');

    if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
    elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
    else { $paged = 1; }


    $custom_query = new WP_Query(array('post_type'=>'post','posts_per_page'=>'3','paged'=>$paged));


   ?>
    <?php if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
        <!-- Item -->
                <?php ale_part('home-blog' );?>
    <?php endwhile;  endif;  ?>

<div class="pagination"><?php ale_page_links_custom($custom_query); ?></div>
</div>

<?php get_footer();

