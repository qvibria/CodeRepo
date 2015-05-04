<!DOCTYPE html>
<html lang="en">
    <head>
        <?php wp_meta(); ?>
        <title><?php echo get_bloginfo("name") . "|" . get_bloginfo("description"); ?></title>

        <link rel="stylesheet" href="css/sequencejs-theme.modern-slide-in.css">
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <?php wp_head(); ?>
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
          <![endif]-->

    </head>
    <body>
        <!--[if lt IE 7]>
       <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
   <![endif]-->

        <div class="page">
            <section id="top">
                <div class="container">
                    <div class="media">
                        <div class="pull-left">
                            <div style="overflow: hidden;">
                                <a class="block-social">
                                    <i class="fa fa-vk"></i>
                                </a>
                                <a class="block-social">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a class="block-social">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </div>

                            <p class="mail">info@bavdance.ru</p>
                        </div>
                        <div class="slogan">
                        </div>
                        <div class="pull-right">
                            <p class="phone">8 (812) 981-67-68</p>
                            <a href="#" class="btn btn-pink pull-right">Заказать звонок</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- navbar-fixed-top  -->
            <nav id="topNav" class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav pull-left">
                            <!-- <li class="active"><a href="#home-section">Home</a></li> -->
                            <li class=""><a href="#about-section" data-toggle="modal" data-target="#myModal">О нас</a></li>
                            <li class=""><a href="#price">Цены и услуги</a></li>
                            <li class=""><a href="#our-portfolio">Портфолио</a></li>
                            <li class=""><a href="#reviews">Отзывы</a></li>
                        </ul>
                        <div class="logo">
                            <a href="#">
                                <img src="images/logo.png" class="img-responsive" alt="Логотип" /> 
                            </a>
                        </div>
                        <ul class="nav navbar-nav pull-right">
                            <li class=""><a href="#music">Музыка</a></li>
                            <li class=""><a href="blog.html">Блог</a></li>
                            <li class=""><a href="#contact">Контакты</a></li>
                            <li class="text-center individ"><a href="#coordinator">Свадебный<br/>распорядитель</a></li>
                        </ul>
                    </div>
                </div>
            </nav>