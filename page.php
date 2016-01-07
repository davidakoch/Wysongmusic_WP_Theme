<?php
/*
	Template Name: General Page

*/
?>


<?php get_header(); ?>

	<div class="music_title">	

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		
				<p><?php the_title(); ?></p>

	</div>
				<p><?php the_content(); ?></p>

		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no pages found' ); ?></p>
		<?php endif; ?>
		
	


<?php get_footer(); ?>