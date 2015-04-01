<?php
/*
  Template Name: Single page
 */
?>
<?php get_header(); ?>  
<div class="container">
    <main class="content">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php /* сам пост, включает постоянную ссылку, метаданные, счетчик комментариев и текст */ ?>
                <article class="entry">
                        <h4><a href="<?php the_permalink() ?>" rel="bookmark" style="font-size: 18px;text-transform: uppercase;color: #301910;" title="Постоянная ссылка для <?php the_title(); ?>"><?php the_title(); ?></a></h4>
                    <?php if ((is_archive()) or (is_search())) { ?>
                        <div class="entry-text">
                            <?php the_excerpt(); ?>
                        </div>
                    <?php } else { ?>
                        <div class="entry-text">
                            <?php the_content("Читать дальше..."); ?>
                        </div>
                    <?php } ?>				
                </article>
                <!--
                <?php trackback_rdf(); ?>
                -->
            <?php endwhile; ?>
            <?php
            if ((is_home() or is_archive()) or (is_search()) or (is_paged()) or (is_category())) {
        	wp_paginator();
			}
			else :
            ?>

            <div class="entry">
                <h3>Error</h3>
                <p>Произошла ошибка. Проверьте правильность запроса. </p>
            </div>

            <p align="center"><?php get_template_part('searchform'); ?></p>

<?php endif; ?>
    </main><!-- .content -->
</div><!-- .container-->
<?php get_sidebar(); ?>
<?php get_footer(); ?> 