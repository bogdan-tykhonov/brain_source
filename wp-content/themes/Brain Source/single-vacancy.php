<?php
/*
Template Name: Вакансия
Template Post Type: post, page, vacancy
*/
?>

<?php get_template_part( 'inc/partials/header' ); ?>

    <main class="vacancy-single">
        <div class="container">
            <section class="breadcrumbs">
                <ul class="flex flex-align">
                    <li class="flex flex-align">
                    <a href="<?php echo get_home_url() ?>">Головна  <span>-</span>  </a>
                    </li>
                    <li class="flex flex-align">
                    <a href="<?php echo get_permalink(18) ?>"><?php echo get_post(18)->post_title?>  <span>-</span>  </a>
                    </li>
                    <li>
                    <h4> <?php the_title();?></h4>
                    </li>
                </ul>
            </section>
            <section class="vacancy-info">
                <h2><?php the_title();?></h2>
                <?php
                $code = get_field('код_вакансії_');
                if($code){
                    ?>
                <div class="vacancy-code">
                <?php echo get_field('код_вакансії_');?>
                </div>
                    <?php
                }
                ?>
                <div class="requirements">
                    <h4>
                        Вимоги:
                    </h4>
                    <p>
                        <?php the_content() ?>
                    </p>
                </div>
                <?php 
                $candidate_info = get_field('ви_наш_ідеальний_кандидат_якщо_маєте:');
                if($candidate_info){
                    ?>
                <h3>Ви наш ідеальний кандидат, якщо маєте:</h3>
                <?php echo $candidate_info?>
                    <?php
                }
                ?>
                <?php
                    $tasks = get_field('ви_зможете_реалізувати_себе_в_наступних_задачах:');
                    if($tasks){
                        ?>
                    <h3>Ви зможете реалізувати себе в наступних задачах:</h3>
                    <?php echo $tasks ?>
                        <?php
                    }
                ?>
                
                <?php
                    $advantages = get_field('переваги:');
                    if($advantages){
                        ?>
                    <h3>Переваги:</h3>
                    <?php echo $advantages ?>
                        <?php
                    }
                ?>
            

                <div class="additional-info">
                    <h3>Якщо все вище перечислене Вам близько - то з нетерпінням чекатимемо Вашого резюме!</h3>
                    <p>Будь ласка, надсилайте ваші резюме за адресою: <a href="mailto:<?php echo get_field('адрес') ?>"><?php echo get_field('адрес') ?></a></p>
                </div>
             </section>
        </div>
    </main>
   
<?php get_template_part( 'inc/partials/footer' ); ?>