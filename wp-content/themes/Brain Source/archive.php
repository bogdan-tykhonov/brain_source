<?php
/*
Template Name: Новости
*/
?>
<?php get_template_part( 'inc/partials/header' ); ?>

    <main class="news">
       <div class="container">
        <section class="breadcrumbs">
            <ul class="flex flex-align">
                <li class="flex flex-align">
                    <a href="<?php echo get_home_url() ?>">Головна  <span>-</span>  </a>
                </li>
                <li>
                    <h4>Новини</h4>
                </li>
            </ul>
        </section>
        <section class="news-block">
            <h2><?php the_title() ?></h2>
            <div class="news-block-list flex flex-align">

            <?php require( 'inc/news_article.php' ); ?>

            </div>
        </section>
        <section class="pagination">

        <?php wp_pagenavi( array( 'query' => $news ) );?>

        </section>
       </div>
    </main>

<?php get_template_part( 'inc/partials/footer' ); ?>