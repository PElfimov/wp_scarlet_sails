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



<?php
$id = 142; // id страницы
$post = get_page($id);
$content = $post->post_content;
echo $post->post_content;
?>

<section class="our-partners">
	<div class="our-partners__inner">
		<h2 class="our-partners__title">Наши партнеры</h2>
		<ul class="our-partners__list">
			<?php
			$str = get_post( 150 )->post_content;
			preg_match_all('/src="([^"]+)"/i', $str, $matches);
			$img_urls = $matches[1];
						 ?>
			 <?php foreach ($img_urls as $img_url) {?>
				 <li class="our-partners__item">
					 <img src="<?php echo $img_url; ?>" alt="" />
				 </li>
			 <?php } ?>
	 </ul>
	 </div>
</section>

</main>
<?php get_footer(); ?>
