<footer>
    <div class="container flex flex-between">
        <div x-data="dropDown()" x-on:click.away="closeDropdown" :class="{opened: mobOpen}" class="footer-services mob-dropdown">
            <h2 x-on:click="toggleDropdown">Наші послуги</h2>
            <template  x-if="mobOpen">
                <div x-show.transition.origin.top="mobOpen" class="footer-services-wrap flex">
                <?php 
        $args = array(
            'post_type' =>'services',
            'post_status' => array( 'publish'),
            'posts_per_page' => '-1', 
        );
        $services = new WP_Query($args);
        $post_count = ceil(($services->post_count)/2);
        ?>
                    <div class="column flex flex-column flex-justify">
                    <?php
                    $args = array(
                        'post_type' =>'services',
                        'post_status' => array( 'publish'),
                        'posts_per_page' => $post_count, 
                        'order'=> 'ASC', 
                        'orderby'=> 'date'
                    );
                    $services = new WP_Query($args);

                    if ( $services->have_posts() ) : while ( $services->have_posts() ) : $services->the_post(); ?>
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a> 
                    <?php endwhile;
                    endif;
                        ?>
                    </div>
                    <div class="column flex flex-column flex-justify">
                    <?php
                    $args = array(
                        'post_type' =>'services',
                        'post_status' => array( 'publish'),
                        'offset'=>$post_count,
                        'order'=> 'ASC', 
                        'orderby'=> 'date'
                    );
                    $services = new WP_Query($args);

                    if ( $services->have_posts() ) : while ( $services->have_posts() ) : $services->the_post(); ?>
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a> 
                    <?php endwhile;
                    endif;
                        ?>
                    </div>
                </div>
            </template>
        </div>
        <div x-data="dropDown()" x-on:click.away="closeDropdown" :class="{opened: mobOpen}" class="footer-about flex flex-column mob-dropdown">
            <h2 x-on:click="toggleDropdown">Про компанію</h2>
            <template x-if="mobOpen">
                <div class="flex flex-column" x-show.transition.origin.top="mobOpen">
                <?php
                    $args = array(
                        'post_type' =>'page',
                        'post_status' => array( 'publish'),
                        'post_parent' => 10
                    );
                    $services = new WP_Query($args);

                    if ( $services->have_posts() ) : while ( $services->have_posts() ) : $services->the_post(); ?>
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a> 
                    <?php endwhile;
                    endif;
                        ?>
                    <a href="/brain_source/#talant-test"> Посилання на тест для визначення таланту</a>
                </div>
            </template>
        </div>
        <div x-data="dropDown()" x-on:click.away="closeDropdown" :class="{opened: mobOpen}" class="footer-reputation flex flex-column mob-dropdown">
            <h2 x-on:click="toggleDropdown" >Наша репутація</h2>
            <template x-if="mobOpen">
                <div class="flex flex-column" x-show.transition.origin.top="mobOpen">
                <?php
                    $args = array(
                        'post_type' =>'page',
                        'post_status' => array( 'publish'),
                        'post_parent' => 24
                    );
                    $services = new WP_Query($args);

                    if ( $services->have_posts() ) : while ( $services->have_posts() ) : $services->the_post(); ?>
                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a> 
                    <?php endwhile;
                    endif;
                        ?>
                </div>
            </template>
        </div>
        <div class="footer-contacts flex flex-column">
            <h2>Контакти</h2>
            <div class="footer-contacts-column">
                <a class="contact-tel" href="tel:<?php echo get_field('номер_телефона_', 10) ?>"><?php echo get_field('номер_телефона_', 10) ?></a>
                 <a class="contact-mail" href="mailto:info@brain-source.com"><?php echo get_field('почта_', 10) ?></a>
            </div>
            <div class="social-links flex flex-align ">
                <?php 
                if(get_field('телеграм', 10) ){
                  ?>
                  <a href="<?php echo get_field('телеграм', 10) ?>"><img src="<?php echo get_template_directory_uri()?>/src/assets/img/telegram.svg" alt="telegram"></a>
                  <?php
                };
                if(get_field('фейсбук', 10) ){
                  ?>
                   <a href="<?php echo get_field('фейсбук', 10) ?>"><img src="<?php echo get_template_directory_uri()?>/src/assets/img/facebook.svg" alt="facebook"></a>
                  <?php
                };
                if(get_field('_linked_in', 10)){
                  ?>
                  <a href="<?php echo get_field('_linked_in', 10) ?>"><img src="<?php echo get_template_directory_uri()?>/src/assets/img/linked_in.svg" alt="linked_in"></a>
                  <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="copyright">
        <h4>Copyright © 2018</h4>
    </div>
</footer>
<?php wp_footer() ?>
</body>
</html>