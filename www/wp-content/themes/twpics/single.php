<?php
/**
 * The Template for displaying all single posts.
 */

GitWordPressLayout::$Viewbag['sTitle'] = "Theatre Woodstock Photo Archive";
GitWordPressLayout::layout("_layout.php"); 
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php get_template_part( 'related-content' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
					do_action( 'semicolon_comments_after' );
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
