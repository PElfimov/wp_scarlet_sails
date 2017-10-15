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
		</main>
		<div class="modal-content modal-content--order">
	    <button class="modal-content__btn-close btn-close" type="button" title="Закрыть">Закрыть</button>
	    <h2 class="modal-content__title">Заказать</h2>
	    <p class="modal-content__text">Для заказа шоу-программы заполните форму заказа</p>
	    <form id="formx" class="order-form" action="javascript:void(null);" method="post" onsubmit="callorder()">
	      <input class="order-form__input" type="text" name="user" placeholder="Ваше имя" required>
	      <input class="order-form__input" type="tel" name="phone" placeholder="Ваш телефон" required>
	      <label class="order-form__checkbox" required>
	          <input type="checkbox" name="personal-data" required>
	            Я соглашаюсь на передачу персональных данных согласно <a href="termsofuse.html">пользовательскому соглашению</a> и <a href="politic.html">политике конфиденциальности данного сайта</a>
	        </label>
	      <input type="hidden" name="formname" value="Заказ шоу Крио Шоу">
	      <button class="btn order-form__btn" type="submit">Заказать</button>
	    </form>
	  </div>
	  <div class="modal-content modal-content--thanks">
	    <button class="modal-content__btn-close btn-close" type="button" title="Закрыть">Закрыть</button>
	    <h2 class="modal-content__title">Спасибо!</h2>
	    <p class="modal-content__text">Ваше сообщение отправлено, наши менеджеры свяжутья с вами в ближайшее время</p>

	  </div>
<?php get_footer(); ?>
