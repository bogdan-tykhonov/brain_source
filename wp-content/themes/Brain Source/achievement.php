<?php
/*
Template Name: Достижения
*/
?>
<?php get_template_part( 'inc/partials/header' ); ?>

    <main class="achivement">
        <div class="container">
            <section class="breadcrumbs">
                <ul class="flex flex-align">
                    <li class="flex flex-align">
                    <a href="<?php echo get_home_url() ?>">Головна  <span>-</span>  </a>
                    </li>
                    <li>
                    <h4> <?php the_title();?></h4>
                    </li>
                </ul>
            </section>
            <section class="achievement-block">
            <?php get_template_part( 'inc/achievment_list' ); ?>
            </section>
        </div>
    </main>

<?php get_template_part( 'inc/partials/footer' ); ?>