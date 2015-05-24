<?php
/*
  Template name: Пост
 */
global $post;
get_header();
?>
<section id="our-portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="text-center"><?php echo $post->post_title; ?></h2>
        </div>
    <div class="section-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="block">
 <?php echo get_the_post_thumbnail($post->ID, 'full_size', array("class" => "img-responsive")); ?>                    
                </div>
                <?php echo $post->post_content; ?>
            </div>
        </div>
    </div>
    </div>
</section>
<?php get_footer(); ?>

