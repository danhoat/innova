<article id="post-<?php the_ID(); ?>" class="col-post" >
		<div class="col-md-12 col-thumbnail">
			<a href="<?php the_permalink();?>">
				<?php innova_post_thumbnail(); ?>
			</a>
		</div>
		<div class="col-md-12">

			<h2 class="post-title"><a href="<?php the_permalink();?>"> <?php the_title();?> </a> </h2>

			<div class="entry-content">
				<?php echo get_the_excerpt(); ?>
			</div><!-- .entry-content -->
		</div>
</article><!-- #post-${ID} -->