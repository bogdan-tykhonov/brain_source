<?php
/*
Template Name: Про компанию
*/
?>

<?php get_template_part( 'inc/partials/header' );?>

    <section class="main-slider">
        <?php get_template_part( 'inc/main_slider' ); ?>
        </div> 
    </section>
    <section class="about">
        <div class="square"></div>
        <div class="container">
            <div class="about-info about-info_mob flex flex-column flex-align">
                <p> Наша головна перевага в тому, що ми працюємо швидше наших конкурентів в області пошуку керівників</p>
                <button>Докладніше</button>
            </div>
            <div class="about-video">
                <div class="about-label">
                    <img src="<?php echo get_template_directory_uri()?>/src/assets/img/Video.svg" alt="video">
                    Дивитися віео про компанію
                </div>
                <iframe 
                
                src="<?php the_post();  echo get_field('ссылка_на_видео_') ?>">
                </iframe>
            </div>
            <div class="about-info">
                <h2>Про Компанію</h2>
                <p>Брейн Сорс Інтернешнл - найбільша мережа в країнах нової Європи (Східна Європа та СНД), що спеціалізується на підборі керівників вищої та середньої ланки (Executive Search) і надає широкий спектр HR-послуг мультинаціональним компаніям на ринках, що розвиваються.</p>
                <p> Наша головна перевага в тому, що ми працюємо швидше наших конкурентів в області пошуку керівників</p>
                <button>Докладніше</button>
            </div>
           
        </div>
    </section>
    <section class="mission">
        <div class="container">
            <h2>Наша місія та цінності</h2>
            <div class="mission-info">
                <div class="container flex flex-between flex-align">
                    <div class="mission-description flex flex-align">
                        <img src="<?php echo get_template_directory_uri()?>/src/assets/img/mission1.svg" alt="mission">
                        <p>Сприяти поширенню цивілізованих стандартів і підходів на ринках праці тих країн, де знаходяться наші офіси.</p>
                    </div>
                    <div class="mission-garanty-wrap flex flex-between">
                        <div class="mission-garanty">
                            <h4>відповідальність</h4>
                            <h4>повага</h4>
                        </div>
                        <div class="mission-garanty">
                            <h4>професійне досконалість</h4>
                            <h4>прагнення до досягнень</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="selection">
        <div class="container">
            <div class="transparent-block"></div>
            <img src="<?php echo get_template_directory_uri()?>/src/assets/img/businessman.png" alt="businessman">
            <div class="selection-info">
                <h2>Підбір керівників і персоналу</h2>
                <p>Ми здійснюємо підбір керівників вищої та середньої ланки управління для роботи в міжнародних і провідних українських компаніях. 
                Для консультантів компанії характерна галузева спеціалізація:
                </p>
                <div class="selection-garanty-row flex flex-align">
                    <div class="selection-garanty">
                        <h4>ринок B2C</h4>
                        <h4>ринок B2B</h4>
                    </div>
                    <div class="selection-garanty">
                        <h4>ринок Послуг</h4>
                        <h4>BSI Network</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-links">
        <div class="container flex  flex-between">
            <div class="content-links-vacancy-wrap">
              <div class="content-links-heading flex flex-between flex-align">
                <h2>Вакансії</h2>
                <a href="<?php echo get_permalink(18) ?>">Всі вакансії</a>
              </div>
              <div class="content-vacancy-list flex flex-between">
                  <?php 
                    $args = array(
                        'post_type' =>'vacancy',
                        'post_status' => array( 'publish'),
                        'posts_per_page' => '2', 
                        'orderby' => 'date'
                    );
                    $vacancy = new WP_Query($args);
                    if ( $vacancy->have_posts() ) : while ( $vacancy->have_posts() ) : $vacancy->the_post(); ?>
                    <article class="vacancy-article ">
                                <h3><?php the_title() ?></h3>
                                <p><?php the_content() ?></p>
                                <a href="<?php echo get_permalink()?>">Докладніше</a>
                    </article>
                <?php endwhile;
                    endif; ?>
              </div>
              <div class="vacancy-slider cst-slider">
                <div class="slider-btns">
                   <div class="vacancy-slider-prev slider-btn slider-btn-prev" >
                        <button disabled>
                            <img src="<?php echo get_template_directory_uri()?>/src/assets/img/arrow.svg" alt="arrow">
                        </button>
                    </div>
                    <div class="vacancy-slider-next slider-btn slider-btn-next" >
                       <button>
                       <img src="<?php echo get_template_directory_uri()?>/src/assets/img/arrow.svg" alt="arrow">
                       </button>
                    </div>
                </div>
                  <div class="slider-wrapper">
                      <div class="slider_slides">
                          <?php get_template_part('inc/vacancy_slider'); ?>
                      </div>
                  </div>
              </div>
              <div class="all-vacancy_mob content-links-heading">
                <a href="<?php echo get_permalink(18) ?>">Всі вакансії</a>
              </div>
            </div>
            <div class="content-links-news-wrap">
                <div class="content-links-heading flex flex-between flex-align">
                    <h2>Новини</h2>
                    <a href="<?php echo get_permalink(12) ?>">Всі новини</a>
                </div>
                <?php 
                    $args = array(
                        'post_type' =>'post',
                        'post_status' => array( 'publish'),
                        'posts_per_page' => '1', 
                        'orderby' => 'date'
                    );
                    $news = new WP_Query($args);
                    if ( $news->have_posts() ) : while ( $news->have_posts() ) : $news->the_post(); ?>
            <?php $image = get_field('изображение'); ?>
                <article class="news-article single">
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
            endif; ?>
                <div class="news-slider cst-slider">
                    <div class="slider-btns">
                        <div class="news-slider-prev slider-btn slider-btn-prev" >
                            <button disabled>
                                <img src="<?php echo get_template_directory_uri()?>/src/assets/img/arrow.svg" alt="arrow">
                            </button>
                        </div>
                        <div class="news-slider-next slider-btn slider-btn-next" >
                           <button>
                           <img src="<?php echo get_template_directory_uri()?>/src/assets/img/arrow.svg" alt="arrow">
                           </button>
                        </div>
                    </div>
                    <div class="slider-wrapper">
                        <div class="slider_slides">
                        <?php get_template_part('inc/news_slider'); ?>
                        </div>
                    </div>
                </div>
                <div class="all-news_mob content-links-heading">
                    <a href="<?php echo get_permalink(12) ?>">Всі новини</a>
                </div>
            </div>
        </div>
    </section>
    <section class="get-test" id="talant-test">
        <div class="container flex flex-align flex-justify">
            <div class="get-test-info">
                <h2>Пройди тест на свої таланти</h2>
                <p>Ми здійснюємо підбір керівників вищої</p>
            </div>
            <a href="<?php the_post(); echo get_field('ссылка_на_тест') ?>">
                <button class="main-btn">
                    Пройти тест
                </button>
            </a>
        </div>
    </section>

 <?php get_template_part( 'inc/partials/footer' ); ?>