<?php 
    $pred_post = get_previous_post();
    $next_post = get_next_post();
    $has_prev_post = get_previous_post_link();
    $has_next_post = get_next_post_link();
    if($has_prev_post){
    ?>
    <a href="<?php echo get_permalink( $pred_post ) ?>" class="prev-news">
                    <img src="<?php echo get_template_directory_uri()?>/src/assets/img/pag-arrow-long.svg" alt="previous">
                    Попередня новина
        </a>
    <?php
    };
    if($has_next_post){
        ?>
         <a href="<?php echo get_permalink( $next_post ) ?>" class="next-news">
                Наступна новина
                <img src="<?php echo get_template_directory_uri()?>/src/assets/img/pag-arrow-long.svg" alt="next">
        </a>
        <?php
    }
    ?>