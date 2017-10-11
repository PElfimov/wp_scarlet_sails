<?php
/*
Template Name: Главная страница
*/
?>
<?php get_header(); ?>
<?php include(TEMPLATEPATH . '/main-header.php'); ?>
<main>
	<?php include(TEMPLATEPATH . '/capture-page.php'); ?>

	<section id="show" class="show">
		<div class="show__inner">
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</section>
	<?php include(TEMPLATEPATH . '/reviews.php'); ?>
</main>
<?php
$id = 142; // id страницы
$post = get_page($id);
$content = $post->post_content;
echo $post->post_content;
?>
<?php get_footer(); ?>
