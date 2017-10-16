<?php
/*
Template Name: Страницы Документа
*/
?>
<?php get_header(); ?>
<main class="documents">
	<a class="btn-close documents__btn-close" href="<?php echo home_url();?>">Закрыть</a>
	<section>
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</section>
</main>
<?php get_footer(); ?>
