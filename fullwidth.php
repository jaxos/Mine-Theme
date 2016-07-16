<?php
/*
Template Name: fullwidth
*/
?>

<?php get_header(); ?>


<div id="main">
<!-- No sidebar -->
<div id="content">
<?php $postCount = 0 ?> <!-- for counting the ost not to put the <hr> tag under last post -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post">
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<h4>Napisany <?php the_time('F jS, Y') ?></h4>
	<p>
	<?php the_excerpt(); ?>
</p>
	
	</div>
<?php endwhile; else: ?>
	<div class="post">
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	</div>
<?php endif; ?>



</div>

</div>
<div id="delimiter">
</div>

<?php get_footer(); ?>