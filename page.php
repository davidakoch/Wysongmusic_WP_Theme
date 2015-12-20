<?php get_header(); ?>



	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		<div class="index_image">		
			
			<img src="http://localhost:8888/wordpress/wp-
			content/uploads/2015/12/index_studio_image.jpg">
		
		</div>

	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no pages found' ); ?></p>
	<?php endif; ?>

<?php get_footer(); ?>