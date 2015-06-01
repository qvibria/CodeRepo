<?php wp_footer(); ?>
<section id="contact">
    <div class="container-wd">
        <div class="media">
            <div class="pull-left">
                <div style="overflow: hidden;">
                    <a class="block-social" href="<?php echo get_option('vk_link'); ?>">
                        <i class="fa fa-vk"></i>
                    </a>
                    <a class="block-social" href="<?php echo get_option('insta_link'); ?>">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a class="block-social" href="<?php echo get_option('youtube_link'); ?>">
                        <i class="fa fa-youtube"></i>
                    </a>
                </div>

                <p class="mail"><?php echo get_option("site_email"); ?> </p>
            </div>
            <div class="slogan blue">
            </div>
            <div class="pull-right">
                <p class="phone"><?php echo get_option("site_phone"); ?> </p>
                <p ><a href="#" class="btn btn-pink pull-right"  data-toggle="modal" data-target="#order-call">Заказать звонок</a></p>
            </div>
        </div>
    </div>
</section>
</div>
<div id="scroller" class="fa fa-arrow-up fa-3x"></div>
<!-- /container -->        
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->

<script type="text/javascript">
    $('.carousel').carousel();
    $(document).ready(function(){   
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#scroller').fadeIn();
        } else {
            $('#scroller').fadeOut();
        }
    });
    $('#scroller').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});
</script>


</body>
</html>
