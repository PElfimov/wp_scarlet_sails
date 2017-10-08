<?php get_header(); ?>
<?php include(TEMPLATEPATH . '/reviews.php'); ?>
<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</section>


<?php get_footer(); ?>
