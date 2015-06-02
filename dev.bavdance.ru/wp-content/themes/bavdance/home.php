<?php
/*
  Template name: Домашняя страница
 */

get_header();
?>
<div class="container-wd">
    <?php if (empty(get_option("main_video"))) { ?>
        <div class="video-main">

            <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>" class="img-responsive"/>
        </div>

    <?php } else { ?>
        <iframe id="main_video_iframe" src="<?php echo str_replace("watch?v=", "embed/", get_option('main_video')); ?>?autoplay=1&showinfo=0&controls=0" width="1000" height="666">
        </iframe>
    <?php } ?>
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
                ),
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
                                                    <input  type="time" class="form-control" type="text"></input>
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
                                    от <?php echo get_post_meta(get_the_ID(), 'new_price', true); ?> рублей
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
<section class="bg" id="our-products-section">
    <div class="container-wd">
        <div class="section-header">
            <h2 class="text-center">Схема работы</h2>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-4 block sheme-block">
                    <div class="sheme-content">
                        <span class="num circle">
                            <i>1</i>
                        </span>
                        <img src="<?php echo get_img_href('sheme-work-1.png'); ?>" alt="Схема работы" class="" />
                    </div>
                    <p>Вы оставляете заявку</p>
                </div>
                <div class="col-md-4 block sheme-block">
                    <div class="sheme-content">
                        <span class="num circle">
                            <i>2</i>
                        </span>
                        <img src="<?php echo get_img_href('sheme-work-2.png'); ?>" alt="Схема работы" class="" />
                    </div>
                    <p>Мы подбираем для Вас стиль танца,<br/>музыку и зал</p>
                </div>
                <div class="col-md-4 block sheme-block">
                    <div class="sheme-content">
                        <span class="num circle">
                            <i>3</i>
                        </span>
                        <img src="<?php echo get_img_href('sheme-work-3.png'); ?>" alt="Схема работы" class="" />
                    </div>
                    <p>Мы обучаем Вас танцу</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 block sheme-block">
                    <div class="sheme-content">
                        <span class="num circle">
                            <i>4</i>
                        </span>
                        <img src="<?php echo get_img_href('sheme-work-6.png'); ?>" alt="Схема работы" class="" />
                    </div>
                    <p>Мы предоставляем видеоматериалы<br/>с каждого урока</p>
                </div>
                <div class="col-md-4 block sheme-block">
                    <div class="sheme-content">
                        <span class="num circle">
                            <i>5</i>
                        </span>
                        <img src="<?php echo get_img_href('sheme-work-5.png'); ?>" alt="Схема работы" class="" />
                    </div>
                    <p>Мы проводим генеральную репетицию<br/>на свадебной площадке (по возможности)</p>
                </div>
                <div class="col-md-4 block sheme-block">
                    <div class="sheme-content">
                        <span class="num circle">
                            <i>6</i>
                        </span>
                        <img src="<?php echo get_img_href('sheme-work-4.png'); ?>" alt="Схема работы" class="" />
                    </div>
                    <p>Вы радуете гостей танцем</p>
                </div>
            </div>
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
                <?php
                $i = 1;
                while ($pf_videos->have_posts()): $pf_videos->the_post();
                    ?>
                    <?php if ($i == 1) { ?>
                        <div class="row">
                        <?php } ?>

                        <div class="col-xs-4">
                            <div class="block">   
                                <div class="block-img">
                                    <?php
                                    $link = get_post_meta(get_the_ID(), 'video_link', true);
                                    $link = str_replace("watch?v=", "embed/", $link);
                                    ?>
                                    <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>"  alt="" class="img-responsive"/>
                                    <a class="circle" data-toggle="modal"  data-backdrop="static" data-target="#video-modal-<?php echo get_the_ID(); ?>">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <input type="hidden" class="link_video" value="<?php echo $link; ?>"

                                           </form>
                                </div>   
                                <div class="portfolio-item-content"><?php the_content(); ?></div>                     
                            </div>
                            <div class="modal fade about" id="video-modal-<?php echo get_the_ID(); ?>" role="dialog" aria-hidden="true">
                                <div class="modal-dialog " style="top:20px">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <?php the_title(); ?>
                                            <button  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>

                                        <div class="modal-body" >
                                            <div id="video_iframe_<?php echo get_the_ID(); ?>"></div>
                                            <p class="description">
                                                <?php the_content(); ?>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                jQuery("a.circle").click(function (e) {
                                    var parent = jQuery(this).parent();
                                    var link = parent.find(".link_video").val();
                                    jQuery("#video_iframe_<?php echo get_the_ID(); ?>").html(" <iframe src='"+link+"' width='100%' height='400'></iframe>");
                                });
                                jQuery(".close").on("click", function () {
                                    jQuery("#video_iframe_<?php echo get_the_ID(); ?>").html("");
                                });
                            </script>
                        </div>

                        <?php if (($i % 3) == 0) { ?>
                        </div>
                        <div class="row">
                        <?php }$i++; ?>

                    <?php endwhile; ?>
                </div>


            </div>
            <?php
        endif;
        ?>
    </div>

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
                        <?php
                        for ($k = 0; $k < $i; $k++) {
                            ?>
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
            <h2 class="text-center">Услуги свадебного координатора</h2>
        </div>
        <div class="section-content">
            <div class="media">
                <div class="pull-left img">
                    <img src="<?php echo get_img_href("shutterstock_44142997.jpg"); ?>" alt="" class="img-responsive"/>
                </div>
                <div class="media-body">
                    <p class="chief-paragraph">Свадебный координатор является главным по организации Вашей свадьбы. Каждая деталь будет учтена: транспорт подъедет вовремя, банкетный зал будет готов к приезду, а программа вечера четко пройдет по плану. Вам останется только наслаждаться торжеством и не думать о заботах на протяжении всей свадьбы!</p>
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
                                                    <input  type="time" class="form-control" type="text"></input>

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

<section class="bg" id="music">
    <div class="container-wd">
        <div class="section-header">
            <h2 class="text-center">Музыка</h2>
        </div>
        <?php
        $albums = get_terms(array("albums"), array(
            'orderby' => 'count',
            'hide_empty' => 0
        ));
        ?>

        <div class="section-content">
            <div class="panel-group" id="accordion">
                <?php foreach ($albums as $album):
                    ?>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapseOne">
                                    <div class="img">
                                        <img src="<?php echo get_img_href("vinyl-y-min.png"); ?>" class="center-block m-t-10" height="40" width="40" alt=""/>
                                    </div>
                                    <span><?php echo $album->name; ?></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <?php
                            $args = array(
                                'post_type' => 'attachment',
                                'post_mime_type' => 'audio',
                                'numberposts' => -1,
                                'post_status' => "published",
                                'post_parent' => null, // any parent
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'albums',
                                        'field' => 'slug',
                                        'terms' => array($album->slug)
                                    )
                                ),
                            );

                            $music = new WP_Query($args);
                            ?>
                            <?php if ($music->have_posts()): ?>
                                <?php while ($music->have_posts()): $music->the_post(); ?>
                                    <div class="panel-body">
                                        <label style="display: block;"><?php the_title(); ?></label>
                                        <audio style="width:800px" controls>
                                            <source src="<?php echo wp_get_attachment_url(get_the_ID()); ?>" type="audio/mp3">
                                            Ваш браузер не поддерживает воспроизведение аудио
                                        </audio>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>
</section>

<?php
$partners = new WP_Query(
        array(
    'post_type' => 'partner',
    'posts_per_page' => -1,
    'orderby' => 'post_date',
    'order' => 'ASC',
        )
);

if ($partners->have_posts()):
    ?>
    <section class="bg" id="partners">
        <div class="container-wd">
            <div class="section-header">
                <h2 class="text-center">Партнеры</h2>
            </div>
            <div class="section-content">

                <div id="carousel-partners" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $i = 0;
                        while ($partners->have_posts()):$partners->the_post();
                            ?>
                            <div class="item <?php echo ($i == 0) ? 'active' : ''; ?> ">
                                <div class="media">
                                    <div class="media-img">
                                        <a href="<?php echo get_post_meta(get_the_ID(), 'p_link', true); ?>">
                                            <?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array("class" => "img-responsive")); ?>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4><?php the_title(); ?></h4>
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
                        <?php
                        for ($k = 0; $k < $i; $k++) {
                            ?>
                            <li data-target="#carousel-partners" data-slide-to="<?php echo $k; ?>" class="<?php echo ($k == 0) ? 'active' : ''; ?>"></li>
                        <?php } ?>
                    </ol>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="fa fa-chevron-right"></span>
                    </a>
                </div>



            </div>
        </div>
    </section>
<?php endif; ?>

<!-- Здесь карта, высота 580px-->
<div class="metro-overlay">
    <ul>
        <li class="mmp" id="len_prosp">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">проспект Стачек</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        Ленинский проспект</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>
        <li class="mmp" id="kupchino">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">Малая балканская площадь</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        Купчино</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
        <li class="mmp" id="msk">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">Московский проспект, Новоизмайловский проспект</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        Московская</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
        <li class="mmp" id="tech_inst">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">Улица подольская</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        Технологический институт</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
        <li class="mmp" id="narvsk">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">Улица Швецова</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Нарвская</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   


        <li class="mmp" id="prosvesh">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">Проспект Энгельса</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Просвещения</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   

        <li class="mmp" id="pioneer">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">Светлановский Проспект</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Пионерская</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
        <li class="mmp" id="grazd-prosp">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">Светлановский Проспект</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Гражданский проспект</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   

        <li class="mmp" id="old-vilage">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">Улица мебельная</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Cтарая деревня</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
        <li class="mmp" id="komendant">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">Богатырский проспект</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Комендантский проспект</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
        <li class="mmp" id="eliz">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">улица Ольги Берггольц </span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Елизаровская</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
        <li class="mmp" id="novocherk">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">Новочеркасский проспект</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Новочеркасская</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
        <li class="mmp" id="pushkin">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">Подъездной переулок</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Пушкинская</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
        <li class="mmp" id="lig">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">Лиговский проспект</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Лиговский проспект</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
        <li class="mmp" id="chkal">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">Чкаловский проспект</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Чкаловская</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
        <li class="mmp" id="vasil">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">8-ая линия</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Василеостровская</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
        <li class="mmp" id="chern">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href="">Литейный проспект</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Чернышевская</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
        <li class="mmp" id="sport">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href=""> улица Большая пушкарская</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Спортивная</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
        <li class="mmp" id="admir">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href=""> улица Большая морская</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Адмиралтейская</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
        <li class="mmp" id="sad">
            <span class="mmp_point"></span>
            <div class="metro_popup" style="">
                <span class="mpp_name" href=""> улица Ефимова</span>
                <div class="mpp_description">
                </div>
                <ul class="mpp_additional">
                    <li class="mpp_metro">
                        М. Садовая</li>
                    <li class="mpp_phone"><?php echo get_option("site_phone"); ?></li>
                </ul>
                <div class="cl fa fa-times">
                </div>
            </div>
        </li>   
    </ul>
    <img src="<?php echo get_img_href("metro.jpg"); ?>" />
    <script type="text/javascript">
        jQuery(".mmp_point").click(function (e) {
            var parent = jQuery(this).parent();
            var popup = parent.find(".metro_popup");
            popup = popup[0];
            jQuery(popup).css('display', 'block');
            jQuery(popup).css('z-index', '990');
            jQuery(this).css('z-index', '999');

        });
        jQuery(".cl").click(function (e) {
            var popup = jQuery(this).parent();

            jQuery(popup).css('display', 'none');
            jQuery(popup).css('z-index', '4');
            var point = popup.parent().find(".mmp_point");
            point = point[0];
            jQuery(point).css('z-index', '99');
        })
    </script>
</div>
<!--  -->
<?php get_footer(); ?>
