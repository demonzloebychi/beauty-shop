 <?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

        <div class="about container" id="about">
            <h2 class="title">
                Обо мне
            </h2>
            <div class="about__block">
                <ul class="about__list">
                    <!-- <li class="about__item">В профессии более трёх лет</li>
                    <li class="about__item">Различные техники макияжа</li>
                    <li class="about__item">Выезд к вам</li>
                    <li class="about__item">Понимание клиента</li>
                    <li class="about__item">Высокая скорость выполнения</li> -->
                    <?php the_field('about-me'); ?> 
                </ul>
                <div class="about__image">
                    <img src="<?php the_field('main-image'); ?>" alt="">
                </div>
                
            </div>
        </div>

        <div class="portfolio" id="portfolio">
            <div class="container">
                <h2 class="title">
                    Портфолио
                </h2>
                <div class="portfolio__cards">

                <?php
                    global $post;

                    $myposts = get_posts([ 
                        'numberposts' => -1,
                        'category' => 2,
                    ]);

                    if( $myposts ){
                        foreach( $myposts as $post ){
                            setup_postdata( $post );

                ?>

                            <div class="portfolio__card">

                                <div class="portfolio__image">
                                    <?php the_post_thumbnail(
                                        array(420, 340),
                                        array(
                                            'class' => 'portfolio-img'
                                        )
                                     
                                    ); ?>
                                </div>

                                <h3 class="s-title">
                                    <?php the_title(); ?>
                                </h3>
                                <button class="btn">
                                    Смотреть еще
                                </button>
                            </div>


                <?php 
                        }
                    }

                    wp_reset_postdata();
                ?>


  

                    

        
                </div>
            </div>
        </div>

        <div class="price" id="price">

        </div>

        <div class="contacts" id="contacts">

        </div>

        <div class="sign" id="sign">
            <div class="container">
                <div class="sign__block">
                    <h2 class="title">
                        Запись на макияж
                    </h2>
                    <form action="post.php" method="post" class="form" id="form">
                        <!-- <input class="input" type="name" name="name" placeholder="Ваше имя">
                        <input class="input" name="phone" type="number" placeholder="Ваш номер телефона">
                        <button class="btn submit"  type="button">Отправить</button> -->
                        <?php echo do_shortcode('[contact-form-7 id="b7bc035" title="Контактная форма"]') ?>
                    </form>
                </div>
            </div>
        </div>

<?php get_footer(); ?>

