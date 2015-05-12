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
                                    <?php echo get_non_additional_service_content(get_the_ID()); ?>

                                </div>
                                <div class="block-price-footer">
                                    <a class="btn btn-pink-border" data-toggle="modal" data-target="#to-order">Заказать</a>
                                </div>
                            </div>
                        </div>
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
<div class="modal fade about" id="to-order" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog small">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="section-header">
                    <h2 class="text-center t-acL">Заказать услугу</h2>
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
<section id="additional-services">
    <div class="container-wd">
        <div class="section-header">
            <h2 class="text-center">Дополнительные услуги</h2>
        </div>
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
                    <tr>
                        <td>Мастер-класс</td>
                        <td>Отличной танцевальной паузой вечера будет мастер-класс для Вас и ваших гостей. В программе: зажигательные ритмы и море эмоций. Средняя продолжительность программы – 20 минут.</td>
                        <td class="text-extra">от 3500 рублей</td>
                    </tr>
                    <tr>
                        <td>Танцевальное шоу </td>
                        <td>Выступление танцевального дуэта, шоу номера латиноамериканской и европейской программы. Выступление шоу- балета с зажигательными и тематическими номерами.</td>
                        <td class="text-extra">от 2500 рублей</td>
                    </tr>
                    <tr>
                        <td>Танцевальный батл(поединок)</td>
                        <td>Новинка свадебного искусства! Представьте себе, 2 профессиональных хореографа приглашают Ваших гостей принять участие в простом конкурсе,  делят гостей на команду жениха и невесты и тут начинается поединок! Разминка, поединок, конкурс капитанов…все зависит от выбранной программы. Минимум 2 хореографа, продолжительность от 20 минут.</td>
                        <td class="text-extra">от 6000 рублей</td>
                    </tr>
                    <tr>
                        <td>Розыгрыш</td>
                        <td>Хотите сделать уникальное предложение любимой или удивить гостей? Возможно, разыграть гостей: до, во время и после окончанию свадебного танца. Различные варианты сценариев на выбор. Любые варианты: с применением технических средств, актеров и госорганов. Стоимость зависит от масштабов.</td>
                        <td class="text-extra">от 5000 рублей</td>
                    </tr>
                    <tr>
                        <td>Танец с балеринами</td>
                        <td>Ваш первый свадебный танец в сочетании с профессиональными балеринами.</td>
                        <td class="text-extra"></td>
                    </tr>
                    <tr>
                        <td>Танец с шоу-балетом от ...</td>
                        <td>Стильное и яркое решение для первого танца! Профессиональные шоу под ритмы бродвейских мюзиклов.</td>
                        <td class="text-extra"></td>
                    </tr>
                    <tr>
                        <td>Подарочный сертификат</td>
                        <td>
                            <ul class="stylized">
                                <li>Экспресс-постановка (2 занятия)- 2500 рублей</li>
                                <li>Классик (4 занятия)- 4800 рублей</li>
                                <li>Классик-шоу (6 занятий) – 7200 рублей</li>
                            </ul>
                        </td>
                        <td class="text-extra">от 2500 рублей</td>
                    </tr>
                </tbody>
            </table>
        </div>
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
        <div class="section-content">
            <div class="row">
                <div class="col-xs-4">
                    <div class="block">   
                        <div class="block-img">
                            <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>" height="1067" width="1600" alt="" class="img-responsive">
                            <a class="circle">
                                <i class="fa fa-video-camera"></i>
                            </a>
                        </div>   
                        <p>Конец весны сулит прекрасное настроение, а у нас скидки на постановку танцев...</p>                      
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="block">   
                        <div class="block-img">
                            <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>" height="1067" width="1600" alt="" class="img-responsive">
                            <a class="circle">
                                <i class="fa fa-video-camera"></i>
                            </a>
                        </div>   
                        <p>Конец весны сулит прекрасное настроение, а у нас скидки на постановку танцев...</p>                      
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="block">   
                        <div class="block-img">
                            <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>" height="1067" width="1600" alt="" class="img-responsive">
                            <a class="circle">
                                <i class="fa fa-video-camera"></i>
                            </a>
                        </div>   
                        <p>Конец весны сулит прекрасное настроение, а у нас скидки на постановку танцев...</p>                      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <div class="block">   
                        <div class="block-img">
                            <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>" height="1067" width="1600" alt="" class="img-responsive">
                            <a class="circle">
                                <i class="fa fa-video-camera"></i>
                            </a>
                        </div>   
                        <p>Конец весны сулит прекрасное настроение, а у нас скидки на постановку танцев...</p>                      
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="block">   
                        <div class="block-img">
                            <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>" height="1067" width="1600" alt="" class="img-responsive">
                            <a class="circle">
                                <i class="fa fa-video-camera"></i>
                            </a>
                        </div>   
                        <p>Конец весны сулит прекрасное настроение, а у нас скидки на постановку танцев...</p>                      
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="block">   
                        <div class="block-img">
                            <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>" height="1067" width="1600" alt="" class="img-responsive">
                            <a class="circle">
                                <i class="fa fa-video-camera"></i>
                            </a>
                        </div>   
                        <p>Конец весны сулит прекрасное настроение, а у нас скидки на постановку танцев...</p>                      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <div class="block">   
                        <div class="block-img">
                            <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>" height="1067" width="1600" alt="" class="img-responsive">
                            <a class="circle">
                                <i class="fa fa-video-camera"></i>
                            </a>
                        </div>   
                        <p>Конец весны сулит прекрасное настроение, а у нас скидки на постановку танцев...</p>                      
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="block">   
                        <div class="block-img">
                            <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>" height="1067" width="1600" alt="" class="img-responsive">
                            <a class="circle">
                                <i class="fa fa-video-camera"></i>
                            </a>
                        </div>   
                        <p>Конец весны сулит прекрасное настроение, а у нас скидки на постановку танцев...</p>                      
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="block">   
                        <div class="block-img">
                            <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>" height="1067" width="1600" alt="" class="img-responsive">
                            <a class="circle">
                                <i class="fa fa-video-camera"></i>
                            </a>
                        </div>   
                        <p>Конец весны сулит прекрасное настроение, а у нас скидки на постановку танцев...</p>                      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <div class="block">   
                        <div class="block-img">
                            <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>" height="1067" width="1600" alt="" class="img-responsive">
                            <a class="circle">
                                <i class="fa fa-video-camera"></i>
                            </a>
                        </div>   
                        <p>Конец весны сулит прекрасное настроение, а у нас скидки на постановку танцев...</p>                      
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="block">   
                        <div class="block-img">
                            <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>" height="1067" width="1600" alt="" class="img-responsive">
                            <a class="circle">
                                <i class="fa fa-video-camera"></i>
                            </a>
                        </div>   
                        <p>Конец весны сулит прекрасное настроение, а у нас скидки на постановку танцев...</p>                      
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="block">   
                        <div class="block-img">
                            <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>" height="1067" width="1600" alt="" class="img-responsive">
                            <a class="circle">
                                <i class="fa fa-video-camera"></i>
                            </a>
                        </div>   
                        <p>Конец весны сулит прекрасное настроение, а у нас скидки на постановку танцев...</p>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg" id="reviews">
    <div class="container-wd">
        <div class="section-header">
            <h2 class="text-center">Отзывы</h2>
        </div>
        <div class="section-content">

            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="media">
                            <div class="media-img">
                                <img src="<?php echo get_img_href("slideshow-2.jpg"); ?>" class="img-responsive">
                            </div>
                            <div class="media-body">
                                <h4>Андрей и Светлана</h4>
                                <p>Волшебно!!! Не ожидала, что можно стать мастерами за столь короткий срок. Спасибо Вам, это было не забываемо!</p>
                            </div>  
                        </div>
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <div class="media">
                            <div class="media-img">
                                <img src="" class="img-responsive">
                            </div>
                            <div class="media-body">
                                <h4>Стас и Анна</h4>
                                <p>Спасибо большое за прекрасный танец!</p>
                            </div>  
                        </div>
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                    <li data-target="#carousel" data-slide-to="4"></li>
                    <li data-target="#carousel" data-slide-to="5"></li>
                </ol>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="fa fa-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="fa fa-chevron-right"></span>
                </a>
            </div>

            <div class="text-center m-t-30">
                <a href="#" class="btn btn-blue">Остальные отзывы в Вконтакте <i class="fa fa-angle-double-right"></i></a>
            </div>

        </div>
    </div>
</section>
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

            <div class="row section-content">
                <div class="col-xs-1">

                </div>
                <div class="col-xs-5">
                    <div class="block-price blue">
                        <div class="block-price-header">
                            Свадебный распорядитель в день свадьбы
                            <p class="text-no"></p>
                            <p class="text-extra-p">4800 р.</p>
                        </div>
                        <div class="block-price-content">
                            <ul class="pseudo-table">
                                <li>Контроль всех подрядчиков накануне свадьбы ( банкет, ведущий, водители, видео, фото, транспорт, флорист, артисты, стилист и другие)</li>
                                <li>Решение любых организационных моментов, возникающих на протяжении свадебного дня</li>
                                <li>Нахождение на банкетной площадке с момента начала подготовки банкета вплоть до окончания</li>
                                <li>Координация и расчет всех подрядчиков</li>
                                <li>Контроль качества и кол-ва выполняемых услуг</li>
                            </ul>
                        </div>
                        <div class="block-price-footer">
                            <a class="btn btn-pink-border" data-toggle="modal" data-target="#to-order-coordinator">Заказать</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="block-price blue">
                        <div class="block-price-header">
                            Свадьба «под ключ» от свадебного агентства
                            <p class="text-no"></p>
                            <p class="text-extra-p"> бесплатно</p>
                        </div>
                        <div class="block-price-content">
                            <ul class="pseudo-table">
                                <li>При заказе свадьбы « под ключ» в свадебном агентстве («название, оно же ссылка на сайт») свадебный координатор бесплатно!</li>
                                <li>Каждой паре подарок на выбор:
                                    <ul class="stylized">
                                        <li>Свадебный танец</li>
                                        <li>Свадебный торт + каравай</li>
                                        <li>Love story</li>
                                        <li>Номер в отеле</li>
                                        <li>Букет невесты + бутоньерка</li>
                                        <li>Горка из шампанского</li>
                                    </ul>
                                </li>
                                <li>Возможны варианты до 3-х услуг в подарок, подробнее на сайте агентства.</li>
                            </ul>
                        </div>
                        <div class="block-price-footer">
                            <a class="btn btn-pink-border" data-toggle="modal" data-target="#to-order-coordinator">Заказать</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-1">

                </div>
            </div>
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
<img src="https://api.fnkr.net/testimg/2000x580/00CED1/FFF/?text=img+placeholder" class="img-responsive"/>
<!--  -->

<?php wp_footer(); ?>

