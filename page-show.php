<?php
/*
Template Name: Страницы ШОУ
*/
?>
<?php get_header(); ?>
	<main class="show-description">
		<div class="show-description__wrapper">
			<a class="btn-close show-description__btn-close" href="index.html">Закрыть</a>
			<article class="show-description__article">
				<section>
					<?php if (have_posts()): while (have_posts()): the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</section>
			</article>
			</div>
		</main>
<?php get_footer(); ?>
