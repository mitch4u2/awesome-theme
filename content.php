<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>" xmlns="http://www.w3.org/1999/html">
<header class="entry-header">

	<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">',esc_url( get_permalink() ) ),'</a></h1>' ); ?>
	<small>Posted on<?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>

</header>
	<div class="row">

		<?php if( has_post_thumbnail() ):  ?>
		<div class="col-xs-12 col-sm-4">
			<div class="thumbnail-img"> <?php the_post_thumbnail('thumbnail'); ?> </div>
		</div>
		<div class="col-xs-12 col-sm-8">
			<p><?php the_content(); ?></p>
		</div>
		<?php else: ?>

			<div class="col-xs-12">
				<p><?php the_content(); ?></p>
			</div>


		<?php endif; ?>

	</div>
<hr>
</article>