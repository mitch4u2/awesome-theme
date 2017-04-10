<?php

/*
	 Template Name:Page No Title
 */

 get_header();  ?>

<?php
if( have_posts() ):
	while ( have_posts() ): the_post(); ?>


			<h1>This is mt static title</h1>
		<small>Posted on<?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
		<h2><?php the_content(); ?></h2>

		<hr>
		<?php
	endwhile;
endif;
?>


<?php  get_footer();  ?>
