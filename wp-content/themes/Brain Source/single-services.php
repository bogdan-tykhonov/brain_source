<?php
/*
Template Name: Услуги
Template Post Type: post, page, services
*/
?>
<?php get_template_part( 'inc/partials/header' ); ?>

    <main class="services">
        <div class="container">
            <section class="breadcrumbs">
                <ul class="flex flex-align">
                    <li class="flex flex-align">
                        <a href="<?php echo get_home_url() ?>">Головна  <span>-</span>  </a>
                    </li>
                    <li class="flex flex-align">
                    <a href="<?php echo get_permalink(16) ?>"><?php echo get_post(16)->post_title?>  <span>-</span>  </a>
                    </li>
                    <li>
                        <h4> <?php the_title();?></h4>
                    </li>
                </ul>
            </section>
            <section class="services-block">
                <h2><?php the_title();?></h2>
                <div class="services-block-info">
                    <?php the_content() ?>
                    <!-- <?php
                    // if(get_the_content()){
                    //     the_content();
                    // }
                    ?>
                    <?php 
                     if(get_field('для_клієнтів')){
                    ?>
                    <div class="services-for-clients service-wrap flex flex-between flex-align">
                        <div class="clients-info">
                        <h2 >Для клієнтів</h2>
                           <?php echo get_field('для_клієнтів');?>
                        </div>
                        <img src="<?php echo get_field('для_клієнтів_зображення')['url'] ?>" alt="<?php echo get_field('для_клієнтів_зображення')['alt'] ?>">
                        <h2 class="services-mob-heading">Для клієнтів</h2>
                    </div>
                    <?php
                    };
                    ?>
                    <?php if(get_field('для_кандидатів')){
                        ?>
                         <div class="services-for-candidates service-wrap flex flex-align flex-between">
                        <h2 class="services-mob-heading">Для кандидатів</h2>
                        <img src="<?php echo get_field('для_кандидатів_зображення')['url'] ?>" alt="<?php echo get_field('для_кандидатів_зображення')['alt'] ?>">
                        <div class="candidates-info">
                            <h2>Для кандидатів</h2>
                          <?php echo get_field('для_кандидатів')?>
                        </div>
                    </div>
                        <?php
                    };
                    ?> -->
                </div>
            </section>
        </div>
    </main>

<?php get_template_part( 'inc/partials/footer' ); ?>