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
$id = 15; // id страницы
$post = get_page($id);
$content = $post->post_content;
echo $post->post_content;
?>

<?php
$imgs = get_attached_media( 'image', 48 );
foreach($imgs as $img){
$image_url = $img->guid;
echo '<img src="'. $image_url .'" />';
}



$media = get_attached_media( 'image', 48 );
print_r( $media );

?>


<?php $str= get_the_content();
preg_match_all('/src="([^"]+)"/i', $str, $matches);
$img_urls = $matches[1]; ?>
<?php if($img_urls) { ?>
<ul class="gallery">
<? foreach ($img_urls as $img_url) {?>
<li><a href="<?php echo $img_url; ?>" rel="prettyPhoto[cat-<?php echo $post->ID; ?>]" title="<?php the_title(); ?>"><img src="<?php echo $img_url; ?>" alt="" /></a></li>
<?php }} ?>
</ul>

<?php get_footer(); ?>
