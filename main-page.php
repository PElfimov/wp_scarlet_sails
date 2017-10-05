<?php
/*
Template Name: Главная страница
*/
?>
<?php get_header(); ?>

<?php include(TEMPLATEPATH . '/reviews.php'); ?>
<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</section>

<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/popup.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/ajax.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/jquery.tubular.1.0.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/index.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/move.js"></script>
<?php get_footer(); ?>
