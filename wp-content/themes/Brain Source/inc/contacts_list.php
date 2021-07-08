<?php
$location = $_GET['location'];
if(!$location) $location = 'україна';
$args = array(
    'post_type' =>'contacts',
    'post_status' => array( 'publish'),
    'posts_per_page' => '-1', 
    'contacts_taxonomy' => $location
);
$contacts = new WP_Query($args);
if ( $contacts->have_posts() ) : while ( $contacts->have_posts() ) : $contacts->the_post(); ?>
            <div class="address-list-item">
                        <h3><?php the_title() ?></h3>
                        <?php 
                        if(get_field('расположение_')){
                           ?>
                            <div class="address"><?php echo get_field('расположение_') ?></div>
                           <?php
                        };
                        if(get_field('телфакс:')){
                            ?>
                            <div class="fax-phone">
                            <div class="fax-wrap">
                                <p>Тел./факс:</p>
                                <h4><a href="tel:<?php echo get_field('телфакс:') ?>"> <?php echo get_field('телфакс:') ?> </a></h4>
                            </div>
                         </div>
                            <?php
                        };
                        if(get_field('телефон')){
                            ?>
                            <div class="number">
                                <a href="tel:+<?php echo get_field('телефон') ?>"> <?php echo get_field('телефон') ?></a>
                             </div>
                            <?php
                        };
                        if(get_field('почта')){
                            ?>
                            <div class="mail">
                                <a href="mailto:<?php echo get_field('почта') ?>"><?php echo get_field('почта') ?></a>
                            </div>
                            <?php
                        }
                        ?>   
                        
                </div>
<?php endwhile;
 endif; 
?>
