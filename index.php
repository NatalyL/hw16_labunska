<?php $config = include('config.php'); ?>
<?php $page = 'index'; ?>
<?php include('header.php'); ?>

<section id="news" class="news">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Новости</h2>
                <ul class="news-item clearfix">
                    <?php foreach ($config['news'] as $newsItem): ?>
                        <li>
                            <img src="<?php echo $newsItem['image_path']; ?>" alt="">

                            <h3><?php echo htmlspecialchars($newsItem['title']); ?></h3>
                            <a href="<?php echo $newsItem['details_url']; ?>" class="more">Подробнее</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="recom" class="recommended">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="title">Я рекомендую</h2>
                <ul class="products-menu clearfix">
                    <li class="active"><a href="catalog.php">Соли и грязи</a></li>
                    <li><a href="catalog.php">Кремы и лосьены</a></li>
                    <li><a href="catalog.php">Парфюмерия</a></li>
                    <li><a href="catalog.php">Витамины и бады</a></li>
                    <li><a href="catalog.php">Чай</a></li>
                </ul>
                <ul class="products clearfix">
                    <li>
                        <img src="images/product_item_big.jpg" alt="">

                        <h3>Шампунь ежедневного использования</h3>

                        <p>Доктор Нонна на телеканале домашний в программе
                            спросите повара Доктор Нонна на телеканале
                            домашний в программе спросите повара Доктор
                            Нонна на телеканале домашний в программе Доктор
                            Нонна на телеканале домашний в программе...</p>

                        <div class="buy clearfix">
                            <span>280 грн.</span>
                            <a href="#" class="btn-main">Купить</a>
                        </div>
                    </li>
                    <li>
                        <ul class="products-list clearfix">
                            <?php foreach ($config['productlist'] as $productItem): ?>
                                <li>
                                    <a href="<?php echo $productItem['url']; ?>">
                                        <img src="<?php echo $productItem['image_path']; ?>" alt="">
                                    </a>

                                    <h3><?php echo htmlspecialchars($productItem['title']); ?></h3>
                                    <span><?php echo htmlspecialchars($productItem['price']); ?></span>

                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
            </div>
        </div>
    </div>
</section>
<section class="video">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="title">Телеканал теледом</h2>

                <ul class="video-items clearfix">
                    <li>
                        <iframe width="100%" height="355" src="https://www.youtube.com/embed/W26DPlUmnVI"
                                frameborder="0"
                                allowfullscreen></iframe>
                    </li>
                    <li>
                        <ul class="video-items-small clearfix">
                            <li>
                                <iframe width="100%" height="175" src="https://www.youtube.com/embed/eU3aSj5wapg"
                                        frameborder="0" allowfullscreen></iframe>
                            </li>
                            <li>
                                <iframe width="100%" height="175" src="https://www.youtube.com/embed/X7BeZMXKDfw"
                                        frameborder="0" allowfullscreen></iframe>
                            </li>
                            <li>
                                <iframe width="100%" height="175" src="https://www.youtube.com/embed/X7BeZMXKDfw"
                                        frameborder="0" allowfullscreen></iframe>
                            </li>
                            <li>
                                <iframe width="100%" height="175" src="https://www.youtube.com/embed/X7BeZMXKDfw"
                                        frameborder="0" allowfullscreen></iframe>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row interesting-items">
            <div class="col-xs-12 col-sm-6">
                <h3>Новые видео</h3>
                <ul>
                    <li><a href="#">Шампунь ежедневного пользования (16:54)</a></li>
                    <li><a href="#">ПРЕМЬЕРА! Ева Бушмина - Религия (05:14)</a></li>
                    <li><a href="#">Анжелика Варум - Я Всегда С Тобой (Official Video)</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h3>Популярные</h3>
                <ul>
                    <li><a href="#">Шампунь ежедневного пользования (16:54)</a></li>
                    <li><a href="#">ПРЕМЬЕРА! Ева Бушмина - Религия (05:14)</a></li>
                    <li><a href="#">Анжелика Варум - Я Всегда С Тобой (Official Video)</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="people">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <img src="images/man_people.png" alt="">

                <h2 class="title">Цель мойе жизни - делать людей счастливыми</h2>

                <p>В бизнес компании Dr. Nona пришел на успех своей жены Ольги, которая доказала мне что даже находясь в
                    декретном
                    отпуске и гуляя с маленьким ребенком на улице за один месяц можно заработать в два раза больше чем
                    моя
                    зарплата
                    в милиции. Позже я на этот бизнес посмотрел серьезнее и увидел себя в нем. Это дело для серьезных и
                    амбициозных
                    людей, которые хотят изменить свою жизнь. 27 декабря 2007 года уволился из МВД и теперь сотрудничаю
                    ...</p>
                <a href="text.html" class="more">Узнать подоробнее</a>
                <ul class="social clearfix">
                    <li class="youtube"><a href="#"><span class="fa fa-youtube"></span></a></li>
                    <li class="vk"><a href="#"><span class="fa fa-vk"></span></a></li>
                    <li class="ok"><a href="#"><span class="fa fa-odnoklassniki"></span></a></li>
                    <li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li class="facebook"><a href="#"><span class="fa fa-twitter"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="business">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="title">Мои партнеры по бизнесу</h2>
                <ul class="partners">
                    <li>
                        <img src="images/partner_1.jpg" alt="">

                        <h3>Диорнева Татьяна</h3>

                        <div>Директор</div>
                        <div class="town">Мариуполь</div>
                        <ul class="social clearfix">
                            <li class="vk"><a href="#"><span class="fa fa-vk"></span></a></li>
                            <li class="ok"><a href="#"><span class="fa fa-odnoklassniki"></span></a></li>
                            <li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="facebook"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        </ul>
                    </li>
                    <li>
                        <img src="images/partner_2.jpg" alt="">

                        <h3>Проценко Мария</h3>

                        <div>Директор</div>
                        <div class="town">Донецк</div>
                        <ul class="social clearfix">
                            <li class="vk"><a href="#"><span class="fa fa-vk"></span></a></li>
                            <li class="ok"><a href="#"><span class="fa fa-odnoklassniki"></span></a></li>
                            <li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="facebook"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        </ul>
                    </li>
                    <li>
                        <img src="images/partner_2.jpg" alt="">

                        <h3>Проценко Мария</h3>

                        <div>Директор</div>
                        <div class="town">Донецк</div>
                        <ul class="social clearfix">
                            <li class="vk"><a href="#"><span class="fa fa-vk"></span></a></li>
                            <li class="ok"><a href="#"><span class="fa fa-odnoklassniki"></span></a></li>
                            <li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="facebook"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        </ul>
                    </li>
                    <li>
                        <img src="images/partner_2.jpg" alt="">

                        <h3>Проценко Мария</h3>

                        <div>Директор</div>
                        <div class="town">Донецк</div>
                        <ul class="social clearfix">
                            <li class="vk"><a href="#"><span class="fa fa-vk"></span></a></li>
                            <li class="ok"><a href="#"><span class="fa fa-odnoklassniki"></span></a></li>
                            <li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="facebook"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="invite" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="title">Добро пожаловать в команду</h2>

                <form action="#">
                    <ul class="clearfix">
                        <li>
                            <input type="text" name="name" placeholder="Ваше имя">
                        </li>
                        <li>
                            <input type="text" name="tel" placeholder="Телефон">
                        </li>
                        <li>
                            <input type="email" name="email" placeholder="E-mail адрес">
                        </li>
                        <li>
                            <input type="submit" value="Присоединяйся">
                        </li>
                    </ul>
                </form>
                <p><a href="text.php" class="more">Узнайте подробнее почему выгодня сотрудничать с нами и быть в нашей
                        команде</a></p>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
