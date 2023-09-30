<?php get_header(); ?>

        <main class="l-main">
          <div class="l-main_hero p-main_hero p-main_hero--archive">
            <div class="p-main_hero__title p-main_hero--archive__title">
              <h2>Menu:</h2>
              <span>チーズバーガー</span>
            </div>
          </div>
          <article class="l-article-text p-article-text">

    <h3>小見出しが入ります</h3>
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

        // ブロック内の1つ目のブロックを取得
        $post_content = get_post_field('post_content');
        $blocks = parse_blocks($post_content);

        if (!empty($blocks)) {
            $first_block = $blocks[0]; 
        }

        // ブロック内の画像を取得
        $image_url = ''; // 画像URLを初期化

        foreach ($blocks as $block) {
            if ($block['blockName'] === 'core/image') {
                $image_id = $block['attrs']['id']; // 画像ブロックのメディア ID を取得
                $image_url = wp_get_attachment_image_url($image_id, 'full');
                break;
            }
        }
        ?>
        <!-- // ここに投稿ごとに表示したいコンテンツを追加 -->
        <div class="l-menu-items p-menu-items">
        <div class="c-menu-item">
          <div class="c-menu-item__img-container">
             <img src="<?php echo esc_url($image_url) ?>" class="c-menu-item__img" alt="メニュー画像" />
          </div>
          <section class="c-menu-item__sec">
            <h3><?php the_title(); ?></h3>
            <?php echo render_block($first_block); ?>
            <div class="c-menu-item--center">
              <button class="c-menu-item__btn">詳しく見る</button>
            </div>
          </section>
        </div>
      </div>
        <?php
    endwhile;

    //wp_pagenaviの記述
    wp_pagenavi();

  endif;
  wp_reset_query();
?>
      </article>
    </main>
  <?php get_sidebar(); ?>
<?php get_footer();?>