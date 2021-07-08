<?php
/*
Template Name: Партнеры
*/
?>
<?php get_template_part( 'inc/partials/header' ); ?>

    <main class="partners">
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
            <section class="partners-block">
                <h2>Партнерство</h2>
                <div class="partners-block-list flex flex-between">
                <?php get_template_part( 'inc/partners_list' ); ?>
                    <!-- <article class="partners-item">
                        <img src="<?php echo get_template_directory_uri()?>/src/assets/img/partners1.jpeg" alt="partner">
                        <h3>Компанія <strong>Брейн</strong></h3>
                        <p>
                            Сорс Інтренешнл є членом Амеріканської Торгівельної Палати (ACC) 
                            в Україні починаючи з 23 грудня, 2004 року. <a href="#">http://www.chamber.ua</a>
                        </p>
                        <p>
                            Крім того, протягом тривалого часу компанія є сервіс-провайдером ACC, надаючи якісні послуги в питаннях підбору персоналу та кадрового документообігу.
                        </p>
                    </article>
                    <article class="partners-item">
                        <img src="<?php echo get_template_directory_uri()?>/src/assets/img/partners2.jpeg" alt="partner">
                        <h3>Компанія <strong>Брейн Сорс</strong></h3>
                        <p>
                            Інтернешнл є членом Украинської Рекрутингової Асоціації з 19 вересня 2003 року.
                        </p>
                    </article>
                    <article class="partners-item">
                        <img src="<?php echo get_template_directory_uri()?>/src/assets/img/partners1.jpeg" alt="partner">
                        <h3>Компанія <strong>Брейн</strong></h3>
                        <p>
                            Сорс Інтренешнл є членом Амеріканської Торгівельної Палати (ACC) 
                            в Україні починаючи з 23 грудня, 2004 року. <a href="#">http://www.chamber.ua</a>
                        </p>
                        <p>
                            Крім того, протягом тривалого часу компанія є сервіс-провайдером ACC, надаючи якісні послуги в питаннях підбору персоналу та кадрового документообігу.
                        </p>
                    </article>
                    <article class="partners-item">
                        <img src="<?php echo get_template_directory_uri()?>/src/assets/img/partners2.jpeg" alt="partner">
                        <h3>Компанія <strong>Брейн Сорс</strong></h3>
                        <p>
                            Інтернешнл є членом Украинської Рекрутингової Асоціації з 19 вересня 2003 року.
                        </p>
                    </article> -->
                </div>
            </section>
        </div>
    </main>

<?php get_template_part( 'inc/partials/footer' ); ?>/