<?php
/*
	Template Name: Bio Page

*/
?>

<?php get_header(); ?>

	<div class="index_image_bio">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		
				<p><?php the_content(); ?></p>

		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no pages found' ); ?></p>
		<?php endif; ?>

	</div>

<?php get_footer(); ?>