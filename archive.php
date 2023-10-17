<?php get_header(); ?>

        <?php get_template_part('/hero') ?>
        <main class="l-main">

         <article class="l-article-text p-article-text">

    <h3>
    <?php
if (is_category()) {
  $category_name = single_cat_title('', false); // カテゴリー名を取得
  echo $category_name;
}
?>
    </h3>
    <p>
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </p>
 
    <?php

$paged = get_query_var('paged')? get_query_var('paged') : 1;
$information= new WP_Query( array(
            'post_type' => 'post',
            'paged' => $paged,
            'post_status' => 'publish',
            'posts_per_page' => 3,
        ));

if (have_posts()) :
    while (have_posts()) : the_post();

        ?>
        <!-- // ここに投稿ごとに表示したいコンテンツを追加 -->
        <div class="l-menu-items p-menu-items">
          <div class="c-menu-item">

            <?php if ( has_post_thumbnail() ) : ?>
            <div class="c-menu-item__img-container">
                <?php the_post_thumbnail( 'full', array( 'class' => 'c-menu-item__img', 'alt' => 'メニュー画像' ) );?>
            </div>
            <?php else : ?>
              <div class="c-menu-item__img-container">
                <p>投稿が見つかりません。</p>
              </div>
            <?php endif; ?>

              <section class="c-menu-item__sec">
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <div class="c-menu-item--center">
                <a href="<?php the_permalink(); ?>" class="c-menu-item__btn">詳しく見る</a>
                </div>
              </section>
           </div>
        </div>
        <?php
    endwhile;
    ?>
    </article>
<?php
    //wp_pagenaviの記述
    wp_pagenavi();

  endif;
  wp_reset_query();
?>
    </main>
  <?php get_sidebar(); ?>
<?php get_footer();?>