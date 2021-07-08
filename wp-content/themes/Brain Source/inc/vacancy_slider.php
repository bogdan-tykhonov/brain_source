<?php
$args = array(
    'post_type' =>'vacancy',
    'post_status' => array( 'publish'),
    'posts_per_page' => '-1', 
    'orderby' => 'date'
);
$vacancy = new WP_Query($args);
if ( $vacancy->have_posts() ) : while ( $vacancy->have_posts() ) : $vacancy->the_post(); ?>
<article class="vacancy-article slide">
            <h3><?php the_title() ?></h3>
            <p><?php the_content() ?></p>
            <a href="<?php echo get_permalink()?>">Докладніше</a>
</article>
<?php endwhile;
endif; 
?>