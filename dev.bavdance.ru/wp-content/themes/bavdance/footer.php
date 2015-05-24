<?php wp_footer(); ?>
<section id="contact">
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

                <p class="mail"><?php echo get_option("site_email"); ?> </p>
            </div>
            <div class="slogan blue">
            </div>
            <div class="pull-right">
                <p class="phone"><?php echo get_option("site_phone"); ?> </p>
            </div>
        </div>
    </div>
</section>
</div>
<div id="scroller"></div>
<!-- /container -->        
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->

<script type="text/javascript">
    new WOW().init();
    jQuery(".service-order-button").click(function (e) {
<<<<<<< HEAD
        
=======
        console.log("Yes");
>>>>>>> 4ee853a4ca913458d61781707283815487ac032c
        var servicename = jQuery(this).find("input[name='service_name']");
        servicename = servicename[0];
        jQuery("#service-name").val(servicename.text);
    });
</script>
 <script type="text/javascript">
        $('.carousel').carousel();
    </script>


</body>
</html>
