<?php
/*
 * Template Name: Blog Page
 */
GitWordPressLayout::$Viewbag ['sTitle'] = "Theatre Woodstock Photo Archive";
GitWordPressLayout::layout ( "_layout.php" );
?>
<div id="main" class="row">
	<div id="content" class="col-md-9">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
		<h5>Posted on <?php the_time('F jS, Y') ?></h5>
		<p><?php the_content(__('(more...)')); ?></p>
		<?php comments_template(); ?>
		<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>