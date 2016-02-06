<?php $config = include('config.php'); ?>
<?php $page = 'product'; ?>
<?php include('header.php'); ?>

<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Шампунь ежедневного пользования</h1>
                <div class="info clearfix">
                    <img src="images/product.jpg" alt="">
                    <dl>
                        <dt>Раздел:</dt>
                        <dd>Косметология</dd>
                        <dt>Объем / Вес:</dt>
                        <dd>250 мл</dd>
                        <dt>Кол-во очков:</dt>
                        <dd>14
                            <div class="rating">
                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                            </div>
                        </dd>
                        <dt>Отзывов:</dt>
                        <dd>15</dd>
                    </dl>
                    <div class="price">
                        <span>280 грн.</span>
                        <span>344 грн.</span>
                    </div>
                    <p><b>Хотите купить дешевле?</b> Позвоните представителю интернет-магазина.</p>
                    <a href="#" class="btn-main">Купить</a>
                </div>
                <ul class="list clearfix">
                    <?php foreach ($config['ingredients'] as $ingredientsItem): ?>
                        <li>
                            <h3><?php echo htmlspecialchars($ingredientsItem['title']); ?></h3>
                            <p><?php echo htmlspecialchars($ingredientsItem['info']); ?></p>
                            <a href="<?php echo $ingredientsItem['url']; ?>" class="more">Развернуть</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="view">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Вам также может понравиться</h2>
                <ul class="products-list clearfix">
                    <?php foreach ($config['view'] as $viewItem): ?>
                        <li>
                            <a href="<?php echo $viewItem['url']; ?>">
                                <img src="<?php echo $viewItem['image_path']; ?>" alt="">
                            </a>
                            <h3><?php echo htmlspecialchars($viewItem['title']); ?></h3>
                            <span><?php echo htmlspecialchars($viewItem['price']); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>