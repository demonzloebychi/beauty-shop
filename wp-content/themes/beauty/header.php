<!DOCTYPE html>
<!-- <html lang="en"> -->
<html <?php language_attributes(); ?>>
<head>
    <!-- <meta charset="UTF-8"> -->
    <meta charset="<?php bloginfo('charset'); ?>">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

<!--
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloock&family=Lora:wght@400;500&display=swap" rel="stylesheet"> 
-->


    <title>Beauty</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header-main">
                    <a href="#about" class="header__logo">
                        K
                    </a>
                    <?php the_custom_logo(); ?>
                  

                    <nav>
                        <ul class="header-main__menu">
                            <li class="header-main__item"><a href="#about">Обо мне</a></li>
                            <li class="header-main__item"><a href="#portfolio">Портфолио</a></li>
                            <li class="header-main__item"><a href="#price">Цены</a></li>
                            <li class="header-main__item"><a href="#contacts">Контакты</a></li>
                            <li class="header-main__item"><a href="#sign">Запись</a></li>
                        </ul>
                    </nav>

                    



                    <div class="header-main__burger">
                        <span></span>
                    </div>
                </div>
            </div>
        </header>