<?php
$id=3; // ID заданной рубрики
$n=3;   // количество выводимых записей
$recent = new WP_Query("cat=$id&showposts=$n");
?>
<section id="reviews" class="reviews">
      <h2 class="reviews__title">Отзывы</h2>
      <div class="reviews__inner">
        <button class="reviews__btn btn-reviews btn-reviews--blue-left" type="button" onclick="move(this, '.reviews', 'left', 708, 2)" disabled="disabled"></button>
        <div class="reviews__wrapper">
          <ul class="reviews__list">
            <?php
            $recent = new WP_Query( array( 'category_name' => 'reviews' ) );
            while($recent->have_posts()):$recent->the_post();

            ?>
            <li class="reviews__item reviews__item--elena">
            <?php the_content();
            get_attachment_link();
            previous_image_link();
            the_attachment_link();?>

            <div class="reviews__autor-wrapper">
              <a href="https://vk.com/kroshka_enott" class="reviews__item-author" target="_blank">Иванайская Елена</a>
              <div class="reviews__img">
                <img src="img/reviews/elena.jpg" alt="фотография автора" width="60">
              </div>
            </div>


            </li>
            <?php endwhile; ?>



          </ul>
        </div>
        <button class="reviews__btn btn-reviews btn-reviews--blue-right" type="button" onclick="move(this,'.reviews', 'right', 708, 2)"></button>
      </div>
      <a href="#" class="btn btn--reviews js-order">Хочу также</a>
      <div class="reviews__end">

      </div>
    </section>
