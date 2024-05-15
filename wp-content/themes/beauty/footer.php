
<footer class="footer">
            <div class="container">
                <ul class="footer__menu">
                    <li class="footer__item"><a href="#about">Обо мне</a></li>
                    <li class="footer__item"><a href="#portfolio">Портфолио</a></li>
                    <li class="footer__item"><a href="#price">Цены</a></li>
                    <li class="footer__item"><a href="#contacts">Контакты</a></li>
                    <li class="footer__item"><a href="#sign">Запись</a></li>
                </ul>

				<div class="">
					<a href="tel:<?php the_field('phone'); ?>" class="phone text"><?php the_field('phone'); ?></a>
					<!-- <a href="tel:+79375558090" class="phone text">+79375558090</a> -->
					<a href="<?php the_field('instagram'); ?>">
						<img src="/assets/images/svg/insta.svg" alt="">
					</a>
					<a href="<?php the_field('telegram'); ?>">
						<img src="/assets/images/svg/telega.svg" alt="">
					</a>
				</div>
				

            </div>
        </footer>
    </div>
</body>

<?php wp_footer(); ?>
<!-- <script src="/scripts/script.js"></script>
<script src="/scripts/post.js"></script>
<script src="/scripts/theme.js"></script> -->

</html>