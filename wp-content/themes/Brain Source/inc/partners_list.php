<?php 
$args = array(
    'post_type' =>'partners',
    'post_status' => array( 'publish'),
    'posts_per_page' => '-1', 
);
$partners = new WP_Query($args);

if ( $partners->have_posts() ) : while ( $partners->have_posts() ) : $partners->the_post(); ?>
           <article class="partners-item">
                        <img src="<?php echo get_field('изображение')['url'] ?>" alt="<?php echo get_field('изображение')['alt'] ?>">
                        <?php the_content(); ?>
                        <!-- <h3>Компанія <strong>Брейн</strong></h3>
                        <p>
                            Сорс Інтренешнл є членом Амеріканської Торгівельної Палати (ACC) 
                            в Україні починаючи з 23 грудня, 2004 року. <a href="#">http://www.chamber.ua</a>
                        </p>
                        <p>
                            Крім того, протягом тривалого часу компанія є сервіс-провайдером ACC, надаючи якісні послуги в питаннях підбору персоналу та кадрового документообігу.
                        </p> -->
             </article>
<?php endwhile;
endif;
    ?>