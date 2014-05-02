<?php if (have_posts()) :  ?>
<main class="content">
<div class='content_post'>
<?php while (have_posts()) : the_post(); ?>
<article class="entry">
<div><h2><?php the_title(); ?></h2></div>
<?php if ( (is_archive()) or (is_search()) ) { ?>
	<div class="entry-text">
		<?php the_excerpt(); ?>
	</div>
<?php } else { ?>
	<div class="entry-text">
		<?php the_content("Читать дальше..."); ?>
	</div>
<?php } ?>				
</article>
</div>
	<!--
		<?php trackback_rdf(); ?>
	-->
<?php endwhile; ?>
	<div class="navigation">
		<?php if(function_exists('wp_paginator')) { wp_paginator(); } ?>
	</div>
</main><!-- .content -->				
<?php else : ?>
<?php get_template_part('error'); ?>
<?php endif; ?>