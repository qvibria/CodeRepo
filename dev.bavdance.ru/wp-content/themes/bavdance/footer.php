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

                <p class="mail">info@bavdance.ru</p>
            </div>
            <div class="slogan blue">
            </div>
            <div class="pull-right">
                <p class="phone">8 (812) 981-67-68</p>
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
        console.log("Yes");
        var servicename = jQuery(this).find("input[name='service_name']");
        servicename = servicename[0];
        jQuery("#service-name").val(servicename.text);
    });
</script>


</body>
</html>
