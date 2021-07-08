<?php
/*
Template Name: Вакансии
*/
?>

<?php get_template_part( 'inc/partials/header' ); ?>
    <main class="vacancy">
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
            <section class="vacancy-block">
                <h2>Вакансії</h2>
                <div class="vacancy-block-list flex flex-between">
                <?php require( 'inc/vacancy_article.php' ); ?>
                </div>
            </section>
            <section class="pagination">

            <?php wp_pagenavi( array( 'query' => $vacancy ) );?>

            </section>
        </div>
    </main>

<?php get_template_part( 'inc/partials/footer' ); ?>