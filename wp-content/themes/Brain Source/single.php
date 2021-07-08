<?php
/*
Template Name: Новость
*/
?>
<?php get_template_part( 'inc/partials/header' ); 
the_post();
?>

    <main class="single-news">
    <div class="container">
        <section class="breadcrumbs">
            <ul class="flex flex-align">
                <li class="flex flex-align">
                    <a href="<?php echo get_home_url() ?>">Головна  <span>-</span>  </a>
                </li>
                <li class="flex flex-align">
                        <a href="<?php echo get_permalink(12) ?>"><?php echo get_post(12)->post_title?>  <span>-</span>  </a>
                </li>
                <li>
                    <h4> <?php the_title();?></h4>
                </li>
            </ul>
        </section>
        <article class="single-news-block">
            <h2>
               <?php the_title() ?>
            </h2>
            <div class="single-news-block-info">
                <div class="preview flex flex-align">
                    <img src="<?php echo get_template_directory_uri()?>/src/assets/img/news-single1.jpeg" alt="news">
                    <div >
                        <p> <?php echo get_field('превью_новости') ?></p>
                    </div>
                </div>
                <div class="below-info">
                    <?php the_content() ?>
                </div>
            </div>
        </article>
        <section class="pagination-single flex flex-between">
        <?php get_template_part( 'inc/single_pagination' ); ?>
        </section>
        <!-- <section class="pagination pag-mob">
            <ul class="flex flex-align">
                <li>
                    <a href="#" class="prev-page">
                        <img src="<?php echo get_template_directory_uri()?>/src/assets/img/pag-arrow.svg" alt="previous">
                    </a>
                </li>
                <li class="active">
                    <a href="#" >1</a>
                </li>
                <li>
                    <a href="#" >2</a>
                </li>
                <li>
                    <a href="#" >3</a>
                </li>
                <li>
                    <a href="#" class="next-page">
                        <img src="<?php echo get_template_directory_uri()?>/src/assets/img/pag-arrow.svg" alt="next">
                    </a>
                </li>
            </ul>
        </section> -->
    </div>
    </main>

<?php get_template_part( 'inc/partials/footer' ); ?>