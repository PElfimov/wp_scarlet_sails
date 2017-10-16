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
$id = 15; // id спецвпредложений
$post = get_page($id);
$content = $post->post_content;
echo $post->post_content;
?>

<section class="our-partners">
	<div class="our-partners__inner">
		<h2 class="our-partners__title">Наши партнеры</h2>
		<ul class="our-partners__list">
			<?php
				$str = get_post( 54 )->post_content;
				preg_match_all('/<img[^>]+>/i', $str, $matches);
				$img_urls = $matches[0];
			?>
			 <?php foreach ($img_urls as $img_url) {?>
				 <li class="our-partners__item">
					 <?php echo $img_url; ?>
				 </li>
			 <?php } ?>
	 </ul>
	 </div>
</section>
<section id="сertificates" class="сertificates">
	<h2 class="сertificates__title">Сертификаты</h2>
	<div class="сertificates__inner">
		<button class="btn-reviews btn-reviews--blue-left" type="button" onclick="move(this, '.сertificates', 'left',680,2)" disabled="disabled"></button>
		<div class="сertificates__wrapper">
			<ul class="сertificates__list">
				<?php
					$str_cert = get_post( 71 )->post_content;
					preg_match_all('/src="([^"]+)"/i', $str_cert, $matches);
					$img_urls = $matches[1];
				?>
				 <?php foreach ($img_urls as $img_url) {?>
					 <li class="сertificates__item">
						 <img src="<?php echo $img_url; ?>" alt="Наши сертификаты" width="200" height="280">
					 </li>
				 <?php } ?>
			</ul>
		</div>
		<button class="btn-reviews btn-reviews--blue-right" type="button" onclick="move(this,'.сertificates', 'right',680,2)"></button>
	</div>
	</section>
	<div class="move-up">
		<a class="btn-up" href="#main-page">Наверх</a>
	</div>
</main>
<div class="modal-content modal-content--order">
	<button class="modal-content__btn-close btn-close" type="button" title="Закрыть">Закрыть</button>
	<h2 class="modal-content__title">Заказать</h2>
	<p class="modal-content__text">Для заказа шоу-программы заполните форму заказа</p>
	<form id="formx" class="order-form" action="javascript:void(null);" method="post" onsubmit="callorder()">
		<input class="order-form__input" type="text" name="user" placeholder="Ваше имя" required>
		<input class="order-form__input" type="tel" name="phone" placeholder="Ваш телефон" required>
		<label class="order-form__checkbox">
				<input type="checkbox" name="personal-data" required>
				Я соглашаюсь на передачу персональных данных согласно <a href="termsofuse.html">пользовательскому соглашению</a> и <a href="politic.html">политике конфиденциальности данного сайта</a>
			</label>
		<input type="hidden" name="formname" value="Заказ шоу">
		<button class="btn order-form__btn" type="submit">Заказать</button>
	</form>
</div>
<div class="modal-content modal-content--consultation">
	<button class="modal-content__btn-close btn-close" type="button" title="Закрыть">Закрыть</button>
	<h2 class="modal-content__title">Заказать консультацию</h2>
	<p class="modal-content__text">Оставьте заявку и мы свяжемся с вами в ближайшее время, чтобы ответить на ваши вопросы</p>
	<form id="formy" class="order-form order-form--consultation" action="javascript:void(null);" method="post" onsubmit="callconcult()">
		<input class="order-form__input" type="text" name="user" placeholder="Ваше имя" required>
		<input class="order-form__input" type="tel" name="phone" placeholder="Ваш телефон" required>
		<label class="order-form__checkbox">
					<input type="checkbox" name="personal-data" required>
					Я соглашаюсь на передачу персональных данных согласно <a href="termsofuse.html">пользовательскому соглашению</a> и <a href="politic.html">политике конфиденциальности данного сайта</a>
				</label>
		<input type="hidden" name="formname" value="Консультация">
		<button class="btn order-form__btn" type="submit">Заказать</button>
	</form>
</div>
<div class="modal-content modal-content--thanks">
	<button class="modal-content__btn-close btn-close" type="button" title="Закрыть">Закрыть</button>
	<h2 class="modal-content__title">Спасибо!</h2>
	<p class="modal-content__text">Ваше сообщение отправлено, наши менеджеры свяжутья с вами в ближайшее время</p>

</div>
<?php get_footer(); ?>

<?php
$id = 69; // id подвала
$post = get_page($id);
$content = $post->post_content;
echo $post->post_content;
?>
