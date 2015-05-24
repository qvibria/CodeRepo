<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <?php wp_meta(); ?>
        <title><?php echo get_bloginfo("site_name"); ?></title>
        <?php wp_head(); ?>

    </head>
    <body>
        <!--[if lt IE 7]>
       <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
   <![endif]-->

        <div class="page">
            <section id="top">
                <div class="container-wd">
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

                            <p class="mail"><?php echo get_option("site_email"); ?> </p>
                        </div>
                        <div class="slogan">
                        </div>
                        <div class="pull-right">
                            <p class="phone"><?php echo get_option("site_phone"); ?> </p>
                            <a href="#" class="btn btn-pink pull-right"  data-toggle="modal" data-target="#order-call">Заказать звонок</a>
                        </div>
                        <div class="modal fade about" id="order-call" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog small">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="section-header">
                                            <h2 class="text-center t-acL" id="modal_info">Заказать звонок</h2>
                                            <form role="form" id="callback-form">
                                                <div class="form-group">
                                                    <input type="text" required="true" class="form-control" id="name" name="name" placeholder="Введите имя*"/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="tel" required="true" class="form-control" name="phone" id="phone" placeholder="Введите телефон*"/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="date" required="true" onkeydown="return false" name="date" class="form-control" id="call-time" placeholder="Время звонка*"/>
                                                </div>
                                                <input type="hidden" name="service_name" id="service-name"/>
                                                <button type="submit" id="callback-button" class="btn btn-pink-border center-block">Заказать</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script type="text/javascript">
                var form_id = "#callback-form";
                jQuery(form_id).on("submit", function (e) {
                    e.preventDefault();
                    var data = jQuery(this).serialize();
                    jQuery.ajax({
                        url: "<?php echo get_bloginfo("template_url") . "/email_ajax.php"; ?>",
                        data: data,
                        method: "POST",
                        dataType: 'json',
                        success: function (data) {
                            if (data.status == "success") {
                                $("#modal_info").fadeOut(function () {
                                    $(this).addClass("success-msg");
                                    $(this).text("Письмо отправлено").fadeIn();
                                });
                            }
                            if (data.status == "not_valid") {
                                $("#modal_info").fadeOut(function () {
                                    $(this).addClass("error-msg");
                                    $(this).text("Ошибка. Проверьте введенные данные.").fadeIn();
                                });
                            }
                            if (data.status == "email_not_sended") {
                                $("#modal_info").fadeOut(function () {
                                    $(this).addClass("error-msg");
                                    $(this).text("Ошибка связи. Попробуйте позже.").fadeIn();
                                });
                            }
                        },
                        error: function (data) {
                            $("#modal_info").fadeOut(function () {
                                $(this).addClass("error-msg");
                                $(this).text("Ошибка связи. Обратитесь в техподдержку.").fadeIn();

                            });
                        }

                    }
                    );
                });

            </script>

            <nav id="topNav" class="navbar navbar-default" role="navigation">
                <div class="container-wd">
                    <?php if(is_front_page()) { ?>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav pull-left">
                            <li class=""><a href="" data-toggle="modal" data-target="#about-section">О нас</a></li>
                            <li class=""><a href="#price">Цены и услуги</a></li>
                            <li class=""><a href="#our-portfolio">Портфолио</a></li>
                            <li class=""><a href="#reviews">Отзывы</a></li>
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li class=""><a href="#music">Музыка</a></li>
                            <li class=""><a href="<?php echo get_bloginfo('url') . '/blog'; ?>">Блог</a></li>
                            <li class=""><a href="#contact">Контакты</a></li>
                            <li class="text-center individ"><a href="#coordinator">Свадебный<br/><span class="addition">распорядитель<span></a></li>
                                            </ul>
                                            </div>
                    <?php } ?>
                                            <div class="logo">
                                                <a href="<?php echo get_bloginfo('url'); ?>">
                                                    <img src="<?php echo get_img_href('logo.png'); ?>" class="img-responsive" alt="Логотип" /> 
                                                </a>
                                            </div>
                                            </div>
                                            </nav>
