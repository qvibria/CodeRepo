<?php
/*
  Template name: Домашняя страница
 */

get_header();
?>
<div class="container-wd">
    <div class="video-main">
        <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>" class="img-responsive"/>
    </div>
</div>
<div class="modal fade about" id="about-section" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="section-header">
                    <h2 class="text-center">О нас</h2>
                </div>
                <p class="chief-paragraph individ"> 
                    Наша танцевальная практика помогает нам быть в курсе танцевальных веяний и направлений, что очень помогает учитывать вкусы и предпочтения в постановке свадебного танца. Стараемся быть в центре свадебных событий, участвуем в семинарах и выставках, церемониях награждения лучших свадебных пар и мастеров свадебного дела. Мы всегда в поисках новых идей и стремимся усовершенствовать мир свадебного танца.
                </p>
                <div class="row">
                    <div class="col-xs-6">
                        <h3>Андрей и Екатерина</h3>
                        <p>
                            Здравствуйте, нас зовут Андрей и Екатерина, мы руководители и ведущие хореографы студии. На сегодняшний день являемся действующими танцорами и с удовольствием принимаем участие в танцевальной жизни Санкт-Петербурга.
                        </p>
                        <p>
                            За годы совместной работы мы приняли участия в различных международных и всероссийских конкурсах и фестивалях по бальной и эстрадной хореографии, где неоднократно становились лауреатами и призерами. Принимали участие в совместных мероприятиях  и концертах со звездами Российской эстрады. Нам доверяют ежегодную постановку «Рождественского бала на Васильевском». 
                        </p>
                    </div>
                    <div class="col-xs-1"></div>
                    <div class="col-xs-5">
                        <div style="overflow: hidden; height: 340px;">
                            <img src="<?php echo get_img_href("_sLSg5CpLeg.jpg"); ?>" class="img-responsive" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container-wd">
        <div class="section-header">
            <h2 class="text-center">Свадебный танец в Спб</h2>
        </div>
        <div class="section-content">

            <p  class="chief-paragraph">
                Мы рады Вас приветствовать в студии свадебного танца «BAV Dance». На страницах сайта Вы сможете ознакомиться с нами и нашими творческими работами, узнать об услугах студии и найти много полезной информации. К Вашему внимаю вниманию, мы разработали ряд интересных и эксклюзивных предложений, а также дополнительных услуг, что, несомненно, придаст «изюминки» свадебному торжеству.
                По своему опыту мы знаем, что каждая пара обладает своим особым обаянием, и поэтому, в каждую постановку свадебного танца, мы вкладываем оригинальную идею, продуманную до мелочей.
                Наша студия возьмет все организационные хлопоты на себя, все для того, что бы Ваш первый свадебный танец был потрясающим!   
            </p>    

        </div>
    </div>
</section>
<section class="bg">
    <div class="container-wd">
        <div class="section-header">
            <h2 class="text-center">Почему мы?</h2>
        </div>
        <div class="section-content">
            <div class="media">
                <div class="box-fx">
                    <div class="img img-1"></div>
                    <p class="title">
                        Более 150<br/>постановок
                    </p>
                </div> 
                <div class="box-fx">
                    <div class="img img-2"></div>
                    <p class="title">
                        Видеосъемка<br/>каждого урока
                    </p>
                </div> 
                <div class="box-fx">
                    <div class="img img-3"></div>
                    <p class="title">
                        Залы<br/>по всему городу
                    </p>
                </div> 
                <div class="box-fx">
                    <div class="img img-4"></div>
                    <p class="title">
                        Редактирование<br/>музыки бесплатно
                    </p>
                </div> 
                <div class="box-fx">
                    <div class="img img-5"></div>
                    <p class="title">
                        1 из уроков<br/>с 2-мя хореографами
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="price">
    <div class="container-wd">
        <div class="section-header">
            <h2 class="text-center">Цены и услуги</h2>
        </div>
        <div class="section-content">
            <p class="chief-paragraph">Уважаемые гости сайта, в данном разделе Вы можете ознакомиться с основными и дополнительными видами услуг, узнать о стоимости и акциях, подобрать эксклюзивные предложения. 
                Для Вас мы ставим постановки от классического вальса до зажигательных миксов и танцев с сюрпризом. Мастер-классы и настоящие танцевальные «батлы» на свадьбе. А также осуществляем оригинальные розыгрыши в стиле «Предложения руки и сердца», «Бандитского Петербурга» и других не менее захватывающих розыгрышей(ссылка на сайт).</p>

            <h4 class="text-center">Обращаем внимание!</h4><p class="text-center"> Стоимость одного занятия <span class="text-no">1350</span> <span class="text-extra">1200</span>  = 1 урок(60 минут) + зал в любом районе города!</p>
            <?php
            $services_query = new WP_Query(
                    array(
                'post_type' => 'service',
                'posts_per_page' => -1,
                'orderby' => 'post_date',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'is_additional',
                        'value' => 'no',
                    )
                ), 'tax_query' => array(
                    array(
                        'taxonomy' => 'service_tax',
                        'field' => 'slug',
                        'terms' => 'standartnyie'
                    )
                ),s
                    // Other query properties
                    )
            );
            if ($services_query->have_posts()):
                ?>
                <div class="row section-content in">

                    <?php
                    while ($services_query->have_posts()):
                        $services_query->the_post();
                        ?>
                        <div class="col-xs-3">
                            <div class="block-price">
                                <div class="block-price-header">
                                    <?php the_title();
                                    ?>
                                    <p class="text-no"><?php echo get_post_meta(get_the_ID(), 'old_price', true); ?> р.</p>
                                    <p class="text-extra-p"><?php echo get_post_meta(get_the_ID(), 'new_price', true); ?> р.</p>
                                </div>
                                <div class="block-price-content">
                                    <?php echo the_content(); ?>

                                </div>
                                <div class="block-price-footer">
                                    <a class="btn btn-pink-border "  data-toggle="modal" data-target="#<?php echo "to-order-" . get_the_ID(); ?>">Заказать</a>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade about" id="<?php echo "to-order-" . get_the_ID(); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog small">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="section-header">
                                            <h2 class="text-center t-acL" id="<?php echo "modal-info-" . get_the_ID(); ?>">Заказать звонок</h2>
                                            <form role="form" id="<?php echo "callback-form-" . get_the_ID(); ?>">
                                                <div class="form-group">
                                                    <input type="text" required="true" class="form-control" id="name" name="name" placeholder="Введите имя*"/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="tel" required="true" class="form-control" name="phone" id="phone" placeholder="Введите телефон*"/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="date" required="true" onkeydown="return false" name="date" class="form-control" id="call-time" placeholder="Время звонка*"/>
                                                </div>
                                                <input type="hidden" name="service_name" value="<?php the_title(); ?>"/>
                                                <button type="submit" id="callback-button" class="btn btn-pink-border center-block">Заказать</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            var form_id = "<?php echo "#callback-form-" . get_the_ID(); ?>";
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
                                            $("#<?php echo "modal-info-" . get_the_ID(); ?>").fadeOut(function () {
                                                $(this).addClass("success-msg");
                                                $(this).text("Письмо отправлено").fadeIn();
                                            });
                                        }
                                        if (data.status == "not_valid") {
                                            $("#<?php echo "modal-info-" . get_the_ID(); ?>").fadeOut(function () {
                                                $(this).addClass("error-msg");
                                                $(this).text("Ошибка. Проверьте введенные данные.").fadeIn();
                                            });
                                        }
                                        if (data.status == "email_not_sended") {
                                            $("#<?php echo "modal-info-" . get_the_ID(); ?>").fadeOut(function () {
                                                $(this).addClass("error-msg");
                                                $(this).text("Ошибка связи. Попробуйте позже.").fadeIn();
                                            });
                                        }
                                    },
                                    error: function (data) {
                                        $("#<?php echo "modal-info-" . get_the_ID(); ?>").fadeOut(function () {
                                            $(this).addClass("error-msg");
                                            $(this).text("Ошибка связи. Обратитесь в техподдержку.").fadeIn();

                                        });
                                    }

                                }
                                );
                            });

                        </script>
                        <?php
                    endwhile;
                    ?>

                </div>
                <?php
            endif;
            ?>


        </div>
    </div>
</section>

<section id="additional-services">
    <div class="container-wd">
        <div class="section-header">
            <h2 class="text-center">Дополнительные услуги</h2>
        </div>
        <?php
        $additional_services_query = new WP_Query(
                array(
            'post_type' => 'service',
            'posts_per_page' => -1,
            'orderby' => 'post_date',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key' => 'is_additional',
                    'value' => 'yes',
                )
            ),
            'tax_query' => array(
                array(
                    'taxonomy' => 'service_tax',
                    'field' => 'slug',
                    'terms' => 'standartnyie'
                )
            ),
                )
        );

        if ($additional_services_query->have_posts()):
            ?>
            <div class="section-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 20%;"></th>
                            <th></th>
                            <th width="150"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($additional_services_query->have_posts()): $additional_services_query->the_post(); ?>
                            <tr>
                                <td><?php the_title() ?></td>
                                <td><?php the_content(); ?></td>
                                <td class="text-extra">
                                    от <?php echo get_post_meta(get_the_ID(), 'old_price', true); ?> рублей
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <?php
        endif;
        ?>
    </div>
</section>
<section class="bg our-prod" id="our-products-section">
    <div class="container-wd">
        <div class="section-header">
            <h2 class="text-center">Схема работы</h2>
        </div>
        <div class="section-content">
            <img src="<?php echo get_img_href("sheme-work.png"); ?>" height="454" width="988" alt="Схема работы" class="center-block" />
        </div>
    </div>
</section>
<section id="our-portfolio">
    <div class="container-wd">
        <div class="section-header">
            <h2 class="text-center">Портфолио</h2>
        </div>
        <?php
        $pf_videos = new WP_Query(
                array(
            'post_type' => 'pf_video',
            'posts_per_page' => -1,
            'orderby' => 'post_date',
            'order' => 'ASC',
                )
        );

        if ($pf_videos->have_posts()):
            ?>

            <div class="section-content">
                <?php while ($pf_videos->have_posts()): ?>
                    <div class="row">
                        <?php
                        for ($i = 0; $i < 3; $i++) {
                            $pf_videos->the_post();
                            ?>
                            <div class="col-xs-4">
                                <div class="block">   
                                    <div class="block-img">
                                        <?php
                                        $link = get_post_meta(get_the_ID(), 'video_link', true);
                                        $link = str_replace("watch?v=", "embed/", $link);
                                        ?>
                                        <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>"  alt="" class="img-responsive"/>
                                        <a class="circle" data-toggle="modal" data-target="#video-modal">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                        <form>
                                            <input type="hidden" class="link_video" value="<?php echo $link; ?>"

                                        </form>
                                    </div>   
                                    <p><?php the_content(); ?></p>                      
                                </div>
                            </div>
                        <?php } ?>

                    </div>

                <?php endwhile; ?>


            </div>
            <?php
        endif;
        ?>
    </div>
    <div class="modal fade about" id="video-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog " style="top:20px">

            <iframe id="video_iframe" src="#" width="100%" height="400">
            </iframe>

        </div>
    </div>
    <script type="text/javascript">
        jQuery("a.circle").click(function (e) {
            var parent = jQuery(this).parent();
            var link = parent.find(".link_video").val();

            console.log(link);
            jQuery("#video_iframe").attr("src", link);
        });
    </script>
</section>

<?php
$recalls = new WP_Query(
        array(
    'post_type' => 'recall',
    'posts_per_page' => -1,
    'orderby' => 'post_date',
    'order' => 'ASC',
        )
);

if ($recalls->have_posts()):
    ?>
    <section class="bg" id="reviews">
        <div class="container-wd">
            <div class="section-header">
                <h2 class="text-center">Отзывы</h2>
            </div>
            <div class="section-content">

                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $i = 0;
                        while ($recalls->have_posts()):$recalls->the_post();
                            ?>
                            <div class="item <?php echo ($i == 0) ? 'active' : ''; ?> ">
                                <div class="media">
                                    <div class="media-img">
                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array("class" => "img-responsive")); ?>
                                    </div>
                                    <div class="media-body">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_content(); ?></p>
                                    </div>  
                                </div>
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <?php
                            $i++;
                        endwhile;
                        ?>

                    </div>
                    <ol class="carousel-indicators">
                        <?php for ($k = 0; $k < $i; $k++) { ?>
                            <li data-target="#carousel" data-slide-to="<?php echo $k; ?>" class="<?php echo ($k == 0) ? 'active' : ''; ?>"></li>
                        <?php } ?>
                    </ol>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="fa fa-chevron-right"></span>
                    </a>
                </div>

                <div class="text-center m-t-30">
                    <a href="<?php echo get_option('vk_link'); ?>" class="btn btn-blue">Остальные отзывы в Вконтакте <i class="fa fa-angle-double-right"></i></a>
                </div>

            </div>
        </div>
    </section>
<?php endif; ?>
<section id="coordinator">
    <div class="container-wd">
        <div class="section-header">
            <h2 class="text-center">Услуги свадебного распорядителя</h2>
        </div>
        <div class="section-content">
            <div class="media">
                <div class="pull-left img">
                    <img src="<?php echo get_img_href("shutterstock_44142997.jpg"); ?>" alt="" class="img-responsive"/>
                </div>
                <div class="media-body">
                    <p class="chief-paragraph">Свадебный распорядитель, он же координатор является главным по организации Вашей свадьбы. Каждая деталь будет учтена: транспорт подъедет вовремя, банкетный зал будет готов к приезду, а программа вечера четко пройдет по плану. Вам останется только наслаждаться торжеством и не думать о заботах на протяжении всей свадьбы!</p>
                </div>
            </div>

            <?php
            $coordibator_services = new WP_Query(
                    array(
                'post_type' => 'service',
                'posts_per_page' => -1,
                'orderby' => 'post_date',
                'order' => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'service_tax',
                        'field' => 'slug',
                        'terms' => 'svadebnyiy-raspredelitel'
                    )
                ),
                    // Other query properties
                    )
            );
            if ($coordibator_services->have_posts()):
                ?>
                <div class="row section-content in">
                    <div class="col-xs-1">

                    </div>
                    <?php
                    while ($coordibator_services->have_posts()):
                        $coordibator_services->the_post();
                        ?>
                        <div class="col-xs-5">
                            <div class="block-price">
                                <div class="block-price-header">
                                    <?php the_title();
                                    ?>
                                      <p class="text-no"></p>
                                    <?php
                                    $is_free = get_post_meta(get_the_ID(), 'is_free', true);
                                    if ($is_free == "yes") {
                                        ?>
                                        <p class="text-extra-p">Бесплатно</p>
                                    <?php } else { ?>
                                        <?php
                                        $old_price = get_post_meta(get_the_ID(), 'old_price', true);
                                        if ($old_price != "") {
                                            ?>
                                            <p class="text-no"><?php echo $old_price; ?> р.</p>
                                            <?php
                                        }
                                        $new_price = get_post_meta(get_the_ID(), 'new_price', true);
                                        if ($new_price != "") {
                                            ?>
                                            <p class="text-extra-p"><?php echo $new_price; ?> р.</p>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                                <div class="block-price-content">
                                    <?php the_content(); ?>

                                </div>
                                <div class="block-price-footer">
                                    <a class="btn btn-pink-border" data-toggle="modal" data-target="#<?php echo "to-order-" . get_the_ID(); ?>">Заказать</a>
                                </div>
                            </div>
                        </div>
                      <div class="modal fade about" id="<?php echo "to-order-" . get_the_ID(); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog small">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="section-header">
                                            <h2 class="text-center t-acL" id="<?php echo "modal-info-" . get_the_ID(); ?>">Заказать звонок</h2>
                                            <form role="form" id="<?php echo "callback-form-" . get_the_ID(); ?>">
                                                <div class="form-group">
                                                    <input type="text" required="true" class="form-control" id="name" name="name" placeholder="Введите имя*"/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="tel" required="true" class="form-control" name="phone" id="phone" placeholder="Введите телефон*"/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="date" required="true" onkeydown="return false" name="date" class="form-control" id="call-time" placeholder="Время звонка*"/>
                                                </div>
                                                <input type="hidden" name="service_name" value="<?php the_title(); ?>"/>
                                                <button type="submit" id="callback-button" class="btn btn-pink-border center-block">Заказать</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            var form_id = "<?php echo "#callback-form-" . get_the_ID(); ?>";
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
                                            $("#<?php echo "modal-info-" . get_the_ID(); ?>").fadeOut(function () {
                                                $(this).addClass("success-msg");
                                                $(this).text("Письмо отправлено").fadeIn();
                                            });
                                        }
                                        if (data.status == "not_valid") {
                                            $("#<?php echo "modal-info-" . get_the_ID(); ?>").fadeOut(function () {
                                                $(this).addClass("error-msg");
                                                $(this).text("Ошибка. Проверьте введенные данные.").fadeIn();
                                            });
                                        }
                                        if (data.status == "email_not_sended") {
                                            $("#<?php echo "modal-info-" . get_the_ID(); ?>").fadeOut(function () {
                                                $(this).addClass("error-msg");
                                                $(this).text("Ошибка связи. Попробуйте позже.").fadeIn();
                                            });
                                        }
                                    },
                                    error: function (data) {
                                        $("#<?php echo "modal-info-" . get_the_ID(); ?>").fadeOut(function () {
                                            $(this).addClass("error-msg");
                                            $(this).text("Ошибка связи. Обратитесь в техподдержку.").fadeIn();

                                        });
                                    }

                                }
                                );
                            });

                        </script>
                        <?php
                    endwhile;
                    ?>
                    <div class="col-xs-1">

                    </div>
                </div>
                <?php
            else:
                echo "Ничего нет";
            endif;
            ?>
        </div>
    </div>
</section>
<div class="modal fade about" id="to-order-coordinator" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog small">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="section-header">
                    <h2 class="text-center t-acL">Заказать услугу свадебного распорядителя</h2>
                    <form role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Введите имя*"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="phone" placeholder="Введите телефон*"/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Комментарий" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-pink-border center-block">Заказать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="bg" id="music">
    <div class="container-wd">
        <div class="section-header">
            <h2 class="text-center">Музыка</h2>
        </div>
        <div class="section-content">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapseOne">
                                <div class="img">
                                    <img src="<?php echo get_img_href("vinyl-y-min.png"); ?>" class="center-block m-t-10" height="40" width="40" alt=""/>
                                </div>
                                <span>Латиноамериканская музыка</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapseTwo">
                                <div class="img">
                                    <img src="<?php echo get_img_href("vinyl-y-min.png"); ?>" class="center-block m-t-10" height="40" width="40" alt=""/>
                                </div>
                                <span>Зарубежная лирическая музыка</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapseThree">
                                <div class="img">
                                    <img src="<?php echo get_img_href("vinyl-y-min.png"); ?>" class="center-block m-t-10" height="40" width="40" alt=""/>
                                </div>
                                <span>Русская лирическая музыка</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse4">
                                <div class="img">
                                    <img src="<?php echo get_img_href("vinyl-y-min.png"); ?>" class="center-block m-t-10" height="40" width="40" alt=""/>
                                </div>
                                <span>Вальсы</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse5">
                                <div class="img">
                                    <img src="<?php echo get_img_href("vinyl-y-min.png"); ?>" class="center-block m-t-10" height="40" width="40" alt=""/>
                                </div>
                                <span>Танго</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse6">
                                <div class="img">
                                    <img src="<?php echo get_img_href("vinyl-y-min.png"); ?>" class="center-block m-t-10" height="40" width="40" alt=""/>
                                </div>
                                <span>Танец с папой</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse7">
                                <div class="img">
                                    <img src="<?php echo get_img_href("vinyl-y-min.png"); ?>" class="center-block m-t-10" height="40" width="40" alt=""/>
                                </div>
                                <span>Зажигательная музыка</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse8">
                                <div class="img">
                                    <img src="<?php echo get_img_href("vinyl-y-min.png"); ?>" class="center-block m-t-10" height="40" width="40" alt=""/>
                                </div>
                                <span>Музыка из фильмов</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse9">
                                <div class="img">
                                    <img src="<?php echo get_img_href("vinyl-y-min.png"); ?>" class="center-block m-t-10" height="40" width="40" alt=""/>
                                </div>
                                <span>Современная музыка</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse9" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Здесь карта, высота 580px-->
<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=zeK-ItdS0JbuWyGjqf5mhEgBA4rgQ5Yl&height=580"></script>
<!--  -->
<?php get_footer(); ?>