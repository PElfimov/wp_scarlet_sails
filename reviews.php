<section id="reviews" class="reviews">
      <h2 class="reviews__title">Отзывы</h2>
      <div class="reviews__inner">
        <?php
        $i = 0;
        $recent = new WP_Query( array( 'category_name' => 'reviews' ) );
        while($recent->have_posts()):$recent->the_post();
          $i=$i+1;
        ?>

        <?php endwhile; ?>
        <?php
        if ($i % 3 == 0) // false, 13%5=3
        {
            $b=$i/3;

        }
        else
        {   $b=intval($i/3)+1;

          }?>
        <button class="reviews__btn btn-reviews btn-reviews--blue-left" type="button" onclick="move(this, '.reviews', 'left', 708, <?php echo $b;?>);" disabled="disabled"></button>
        <div class="reviews__wrapper">
          <ul class="reviews__list">
            <?php
            $recent = new WP_Query( array( 'category_name' => 'reviews' ) );
            while($recent->have_posts()):$recent->the_post();
            ?>
            <li class="reviews__item">
              <?php the_content();
              ?>

            </li>
            <?php endwhile; ?>
          </ul>
        </div>
        <button class="reviews__btn btn-reviews btn-reviews--blue-right" type="button" onclick="move(this,'.reviews', 'right', 708, <?php echo $b;?>)"></button>
      </div>
      <a href="#" class="btn btn--reviews js-order">Хочу также</a>
      <div class="reviews__end">
      </div>
    </section>
