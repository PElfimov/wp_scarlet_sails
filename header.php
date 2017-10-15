<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div  id="google-container" data-uri="<?php echo get_template_directory_uri(); ?>">
</div>
