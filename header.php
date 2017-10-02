<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('Â«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link href="<?= bloginfo('template_directory'); ?>/css/style.css?v=1.5" rel="stylesheet" type="text/css" />
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<header class="main-header">
    <div class="main-header__inner">
      <section class="header-logo">
        <h1>
        <span class="header-logo__logo-text">Алые паруса</br> </span>
        <a class="header-logo__link"><img src="img/logo.png" width="274" height="77" alt="Логотип компании «Алые Паруса»"></a>
      </h1>
      </section>
      <section class="header-contact">
        <p class="header-contact__text">Ждем ваших звонков!</p>
        <p class="header-contact__phonenomber">
          <a href="tel:+79293992429">+7 929 399 2429</a>
        </p>
        <div class="social-btn header-contact__socialbtn">
          <p class="social-btn__text-hidden">Пишите нам</p>
          <ul class="social-btn__list">
            <li class="social-btn__item social-btn__item--insta">
              <a href="https://www.instagram.com/prazdnik.barnaul/" target="_blank"> Мы в инстаграмм</a>
            </li>
            <li class="social-btn__item social-btn__item--ok">
              <a href="#" target="_blank">Мы в одноклассниках</a>
            </li>
            <li class="social-btn__item social-btn__item--vk">
              <a href="#" target="_blank">Мы в контакте</a>
            </li>
            <li class="social-btn__item social-btn__item--fb">
              <a href="#" target="_blank">Мы в фейсбук</a>
            </li>
          </ul>
        </div>
        <p class="header-contact__cyty">г. Барнаул</p>
      </section>
    </div>
    <nav class="main-nav">
      <p class="main-nav__text-hidden">Главное меню сайта</p>
      <ul class="main-nav__list">
        <li class="main-nav__item">
          <a href="#main-page">Главная</a>
        </li>
        <li class="main-nav__item">
          <a href="#show">Наши шоу</a>
        </li>
        <li class="main-nav__item">
          <a href="#reviews">Отзывы</a>
        </li>
        <li class="main-nav__item">
          <a href="#offers">Спецпредложения</a>
        </li>
        <li class="main-nav__item">
          <a href="#сertificates">Сертификаты</a>
        </li>
      </ul>
    </nav>

  </header>
