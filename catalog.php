<?php $config = include('config.php'); ?>
<?php $page = 'catalog'; ?>
<?php include('header.php'); ?>
<section class="catalog">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <h1>Каталог</h1>
                <nav class="navbar navbar-default menu-side" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#collapse2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="collapse2">
                        <ul class="nav navbar-nav">
                            <?php foreach ($config['menuside'] as $menusideItem): ?>
                            <li data-toggle="collapse" data-target="#toggleSample">
                                <a href="<?php echo $menusideItem['url'];?>"><?php echo htmlspecialchars($menusideItem['title']);?></a>
                                <div id="toggleSample" class="collapse in">
                                    <?php if (!empty($menusideItem['submenuside'])):?>
                                    <ul class="sub-menu-side">
                                        <?php foreach ($menusideItem['submenuside'] as $submenusideItem): ?>
                                        <li>
                                            <a href="<?php echo $submenusideItem['url'];?>"><?php echo htmlspecialchars($submenusideItem['title']);?></a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-xs-12 col-sm-8">
                <ul class="products-menu clearfix">
                    <li class="active"><a href="#">Новинки</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#">Я рекомендую</a></li>
                </ul>
                <ul class="products-list clearfix">
                    <?php foreach ($config['product'] as $productItem): ?>
                        <li>
                            <a href="<?php echo $productItem['url']; ?>">
                                <img src="<?php echo $productItem['image_path']; ?>" alt="">
                            </a>
                            <h3><?php echo htmlspecialchars($productItem['title']); ?></h3>
                            <div class="buy clearfix">
                                <span><?php echo htmlspecialchars($productItem['price']); ?></span>
                                <a href="<?php echo $productItem['buy_url']; ?>" class="btn-main">Купить</a>
                            </div>
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
                <h2>Вы смотрели</h2>
                <ul class="products-list clearfix">
                    <?php foreach ($config['like'] as $likeItem): ?>
                        <li>
                            <a href="<?php echo $likeItem['url']; ?>">
                                <img src="<?php echo $likeItem['image_path']; ?>" alt="">
                            </a>
                            <h3><?php echo htmlspecialchars($likeItem['title']); ?></h3>
                            <span><?php echo htmlspecialchars($likeItem['price']); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>