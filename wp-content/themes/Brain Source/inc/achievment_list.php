<?php
$args = array(
    'post_type' =>'achievments',
    'post_status' => array( 'publish'),
    'posts_per_page' => '-1', 
);
$achievments = new WP_Query($args);
if ( $achievments->have_posts() ) : while ( $achievments->have_posts() ) : $achievments->the_post(); ?>
            <div class="achievement-item flex flex-align">
                    <div class="achievement-year flex flex-align">
                        <div class="circle"></div>
                        <h4><?php echo get_field('год_') ?></h4>
                    </div>
                   <div class="achievement-img-row">
                    <div class="achievment-img-wrap <?php if(get_the_ID()  == 244) echo 'no-wrap' ?>">
                        <img src="<?php echo get_field('изображение')['url'] ?>" alt="<?php echo get_field('изображение')['alt'] ?>">
                   </div>
                   <h3 class="achievement-mob-heading"><?php the_title() ?></h3>
                   </div>
                    <div class="achievement-info">
                        <h3><?php the_title() ?></h3>
                        <?php the_content(); ?>
                    </div>
                </div>
<?php endwhile;
 endif; 
?>