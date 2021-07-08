<?php
$args = array(
    'post_type' =>'slider',
    'post_status' => array( 'publish'),
    'posts_per_page' => '-1', 
);
$slides = new WP_Query($args);
if ( $slides->have_posts() ) : while ( $slides->have_posts() ) : $slides->the_post(); ?>
            <?php $image = get_field('изображение'); ?>
            <div class="main-slider-slide" style="background-image: url('<?php echo $image['url'] ?>');">
            <div class="container">
                <div class="slider-wrap ">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
            </div>
<?php endwhile;
 endif; 
?>