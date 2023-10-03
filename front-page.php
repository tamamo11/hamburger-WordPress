<?php get_header(); ?>

        <main class="l-main">
        <?php get_template_part('/hero') ?>
          <article>
<?php 
$takeout_query = new WP_Query(array(
  'category_name' => 'takeout',
  'posts_per_page' => 2,
  'orderby' => 'rand',
));
?>

            <div class="l-main-card p-main-card">
              <div class="p-main-card_content">
                <span class="p-main-card_title p-main-card_title--takeout"
                  ><a href="<?php echo esc_url(get_category_link(7)); ?>">Take Out</a></span
                >
                <div class="p-main-card_flexwrap">
<?php
  if ($takeout_query->have_posts()) :
  while ($takeout_query->have_posts()) : $takeout_query->the_post();
?>
                  <section class="p-main-card__section">
                  <h3 class="p-main-card__section_title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h3>
                    <div class="p-main-card__section_text">
                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_excerpt(); ?></a>
                    </div>
                  </section>
<?php
  endwhile;
  wp_reset_postdata();
else :
  echo '該当する投稿がありません。';
endif;
?>
<!-- takeoutループ終わり -->
                </div>
              </div>
              <div class="p-main-card_content u-mg-bt5rem">
                <span class="p-main-card_title p-main-card_title--eatin"
                  ><a href="<?php echo esc_url(get_category_link(6)); ?>">Eat In</a></span
                >
                <div class="p-main-card_flexwrap">
<?php 
$eatin_query = new WP_Query(array(
  'category_name' => 'eatin', 
  'posts_per_page' => 2,
  'orderby' => 'rand', 
));
?>

<?php
  if ($eatin_query->have_posts()) :
  while ($eatin_query->have_posts()) : $eatin_query->the_post();
?>
                  <section class="p-main-card__section">
                    <h3 class="p-main-card__section_title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h3>
                    <div class="p-main-card__section_text">
                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_excerpt(); ?></a>
                    </div>
                  </section>
<?php
  endwhile;
  wp_reset_postdata();
else :
  echo '該当する投稿がありません。';
endif;
?>
<!-- eatinループ終わり -->

                </div>
              </div>
            </div>
            <div class="l-main_map p-main-map">
              <section class="p-main-map__article">
                <h2 class="p-main-map__title">見出しが入ります</h2>
                <p class="p-main-map__p">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
              </section>
              <div class="p-main-map__overlay1"></div>
              <div class="p-main-map__overlay2"></div>
            </div>
          </article>
        </main>
      <?php get_sidebar(); ?>


<?php get_footer();?>