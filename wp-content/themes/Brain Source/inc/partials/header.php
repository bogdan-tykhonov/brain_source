<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="dist/assets/css/main.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
    <title>Brain Source</title>
    <?php wp_head() ?>
</head>
<body>
<header >
    <div class="container">
        <div class="header-logo flex flex-between flex-align">
            <a href="<?php echo get_home_url() ?>">
            <img src="<?php echo get_field('логотип', 10)['url']; ?>" alt="<?php echo get_field('логотип', 10)['alt']; ?>">
            </a>
            <button  class="header-mob-toggle">
                <img src="<?php echo get_template_directory_uri()?>/src/assets/img/Menu.svg" alt="menu">
            </button>
        </div>
    </div>
    <nav class="header-nav">
    <?php get_template_part('inc/header-menu'); ?>
            <div class="header-addition-list">
                <a href="tel:<?php echo get_field('номер_телефона_', 10); ?>"><?php  echo get_field('номер_телефона_', 10); ?></a>
                <li>
                    <div class="header-navlink-wrap"
                    x-data="dropDown()" 
                     x-on:mouseover="toggleDropdown" 
                     x-on:mouseout="closeDropdown" 
                    >
                        <button>Укр</button>
                        <div class="header-navlink-dropdown"
                        x-show.transition.origin.top="open" x-cloak="closedNav">
                            <ul>
                                <li><a href="#">Eng</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </div>
    </nav>
    <div class="mob-menu">
        <div class="container">
            <div class="header-logo flex flex-between flex-align">
                <a href="<?php echo get_home_url() ?>">
                <img src="<?php echo get_template_directory_uri()?>/src/assets/img/logo.png" alt="Логотип">
                </a>
                <button x-on:click="closeDropdown" class="mob-close">
                    <img src="<?php echo get_template_directory_uri()?>/src/assets/img/close.svg" alt="close">
                </button>
            </div>
        </div>
            <ul>
                <li class="dropdown-mob">
                    <button>Про компанію</button>
                </li>
                <li class="dropdown-mob">
                    <button>Наші послуги</button>
                </li>
                <li x-data="dropDown()" x-on:click="toggleDropdown" :class="{opened: open}" class="dropdown-mob">
                    <button>Наша репутація</button>
                    <template x-if="open">
                        <ul x-show.transition="open">
                            <li>
                                <a href="#">Відгуки клієнтів</a>
                            </li>
                            <li class="active">
                                <a href="#" >Досягнення</a>
                            </li>
                            <li>
                                <a href="#" >Публікації та новини</a>
                            </li>
                            <li>
                                <a href="#" >Партнерство</a>
                            </li>
                        </ul>
                    </template>
                </li>
                <li>
                    <a href="#">Наші бренди</a>
                </li>
                <li>
                    <a href="#">Контакти</a>
                </li>
            </ul>
            <a class="number" href="tel:++ 38 (044) 390 50 10">+ 38 (044) 390 50 10</a>
            <ul class="mob-lang">
                <li x-data="dropDown()" x-on:click="toggleDropdown" :class="{opened: open}" class="dropdown-mob">
                    <button>Укр</button>
                    <template x-if="open">
                        <ul x-show.transition="open">
                            <li>
                                <a href="#">Eng</a>
                            </li>
                        </ul>
                    </template>
                </li>
            </ul>
    </div>
</header>