
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="post-title"><a href="<?php the_permalink();?>"> <?php the_title();?> </a> </h1>

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</div>
		</div>
	</div>
</article><!-- #post-${ID} -->