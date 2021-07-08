<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' =>'Vacancy',
    'post_status' => array( 'publish'),
    'posts_per_page' => '8', 
    'paged' => $paged
);
$vacancy = new WP_Query($args);

if ( $vacancy->have_posts() ) : while ( $vacancy->have_posts() ) : $vacancy->the_post(); ?>
            <article class="vacancy-article ">
                        <h3><?php the_title() ?></h3>
                        <p><?php the_content() ?></p>
                        <a href="<?php echo get_permalink()?>">Докладніше</a>
            </article>
<?php endwhile;
else : ?>
    <h1>На данный момент вакансій немає</h1>
<?php endif; 
    ?>