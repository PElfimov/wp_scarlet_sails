<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('Â«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link href="<?= bloginfo('template_directory'); ?>/css/style1.css?v=1.5" rel="stylesheet" type="text/css" />
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<nav class="main-navigation">
		<? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
	</nav>
