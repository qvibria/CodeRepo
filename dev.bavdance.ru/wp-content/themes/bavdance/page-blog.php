<?php
/*
  Template name: Блог
 */

get_header();
?>
<section id="our-portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="text-center">Блог</h2>
        </div>
        <?php
        $posts = new WP_Query(
                array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'orderby' => 'post_date',
            'order' => 'ASC',
                )
        );

        if ($posts->have_posts()):
            ?>

            <div class="section-content">
                <?php
                $i = 1;
                while ($posts->have_posts()): $posts->the_post();
                    if ($i == 1)
                        echo "<div class=\"row\">";
                    
                    ?>

                    <div class="col-sm-4">
                        <div class="block">   
                            <div class="block-img">
        <?php echo get_the_post_thumbnail(get_the_ID(), 'bav_size', array("class" => "img-responsive")); ?>
                            </div>   
                            <h3><?php the_title(); ?></h3>
                            <span class="date">
                                <i class="fa fa-calendar"></i>
        <?php the_date(); ?>
                            </span>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php echo get_permalink(); ?>" class="text-extra link">Подробнее <i class="fa fa-angle-double-right"></i></a>                      
                        </div>
                    </div>
        <?php if (($i % 3) == 0) {
            echo "</div><div class=\"row\">";
        } $i++;?>
    <?php endwhile; ?>
            </div>
                
            <?php
        else :
            echo "<label>У нас еще нет статей для вас.</label>";
        endif;
        ?>
    </div>
</section>
<?php get_footer(); ?>

