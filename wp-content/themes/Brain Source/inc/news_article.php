<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' =>'post',
    'post_status' => array( 'publish'),
    'posts_per_page' => '6', 
    'paged' => $paged
);
$news = new WP_Query($args);

if ( $news->have_posts() ) : while ( $news->have_posts() ) : $news->the_post(); ?>
            <?php $image = get_field('изображение'); ?>
                <article class="news-article ">
                    <a href="<?php echo get_permalink()?>" class="flex flex-align">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        <div class="news-article-info">
                            <h4><?php echo get_the_date('d F Y') ?></h4>
                            <h3><?php the_title() ?></h3>
                            <p><?php the_excerpt('10') ?></p>
                        </div>
                    </a>
            </article>
<?php endwhile;
else : ?>
    <h1>На данный момент новин немає</h1>
<?php endif; 
    ?>