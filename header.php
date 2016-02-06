<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>hw16_labunska</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,400italic,100,300&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>
</head>
<body>
<header class="h-page">
    <div class="header-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="search">
                        <form action="#">
                            <input type="search" placeholder="Поиск" name="search">
                        </form>
                    </div>
                    <div class="basket">
                        <img src="images/basket.png" alt="Basket">
                    </div>
                    <div class="menu">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="collapse">
                                <ul class="nav navbar-nav">
                                    <?php foreach ($config['menu'] as $menuItem): ?>
                                    <li>
                                        <a href="<?php echo $menuItem['url'];?>"><?php echo htmlspecialchars($menuItem['title']);?></a>
                                        <?php if (!empty($menuItem['submenu'])):?>
                                            <ul class="sub-menu clearfix">
                                                <?php foreach ($menuItem['submenu'] as $submenuItem): ?>
                                                <li><a href="<?php echo $submenuItem['url'];?>"><?php echo htmlspecialchars($submenuItem['title']);?></a>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if ($page == 'index'): ?>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->

                        <div class="carousel-inner" role="listbox">

                            <div class="item active">
                                <img src="images/header_man2.png" alt="">

                                <div class="carousel-text">
                                    <h1>Купить продукцию сейчас</h1>
                                    <a href="text.html" class="btn-main">Узнать больше</a>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/header_man2.png" alt="">

                                <div class="carousel-text">
                                    <h2>Узнать больше информации</h2>
                                    <a href="text.html" class="btn-main">Узнать больше</a>
                                </div>
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <img src="images/arrow-l.png" alt="" class="arrow-l">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <img src="images/arrow-r.png" alt="" class="arrow-r">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</header>