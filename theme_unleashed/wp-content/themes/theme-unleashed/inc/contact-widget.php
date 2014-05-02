<?php

class Contact_Widget extends WP_Widget {

    function Contact_Widget() {
        $widget_ops = array('classname' => 'Contact_widget', 'description' => 'Виджет обратной связи');
        $this->WP_Widget('Contact_Widget', 'Обратная связь', $widget_ops);
    }

    function widget($args, $instance) {

        extract($args);

        $title = apply_filters('widget_title', $instance['title']);
        if (empty($title))
            $title = false;

        echo $before_widget;
        ?>	
        <div class="contact-wrapper">
            <div class="contact-head">
                <?php
                if ($title):
                    echo $before_title;
                    echo $title;
                    echo $after_title;
                endif;
                ?>
            </div>
            <p class='desc'>Заполните форму и мы обязательно Вам перезвоним</p>
            <?php echo do_shortcode("[contact-form-7 id='30' title='form-sidebar']"); ?>
            <script>
                jQuery('#your-phone').keypress(function(event) {
                    if (event.which < 48 || event.which > 57 )
                        return false;
                });
               

            </script>
        </div>	                         						
        <?php
        echo $after_widget;
    }

    function form($instance) {

        $instance = wp_parse_args((array) $instance, array('title' => 'Заказать звонок'));

        $title = esc_attr($instance['title']);
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Заголовок</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>			
        <?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['title'] = strip_tags($new_instance['title']);

        return $instance;
    }

}
