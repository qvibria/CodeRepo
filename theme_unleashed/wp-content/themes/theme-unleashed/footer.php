	</div><!-- .middle-->

</div><!-- .wrapper -->
</div><!-- layout-->

<footer class="footer">
	<nav class='footer-menu'>
	<?php
                    $args = array(
                                        'theme_location' => '',
                                        'menu' => 'menu',
                                        'container' => 'div',
                                        'container_class' => 'menu-container',
                                        'container_id' => '',
                                        'menu_class' => 'tl_menu',
                                        'menu_id' => 'fmenu',
                                        'echo' => true,
                                        'fallback_cb' => 'wp_page_menu',
                                        'before' => '',
                                        'after' => '',
                                        'link_before' => '',
                                        'link_after' => '<b></b>',
                                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'depth' => 0
                                    );
                    wp_nav_menu($args);
                    ?>
	</nav>
	<section class='copyright-and-metrics'>
		<div class='copyright'>
			&copy;Транспортная компания ООО "Альбатрос", 2014
			Телефон: +7 (121) 500 500
		</div>
		<div class='metrics'>
			метрики
		</div>
	</section>
<?php wp_footer ();?>
</footer><!-- #footer -->
</body>
</html>