

<div class="row">
<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">',esc_url( get_permalink() ) ),'</a></h1>' ); ?>



<div class="col-xs-12 col-sm-4">
	<div class="thumbnail-img"> <?php the_post_thumbnail('thumbnail'); ?> </div>
</div>
<div class="col-xs-12 col-sm-8">
	<p><?php the_content(); ?></p>
</div>
</div>
<hr>