<?php get_header(); ?>

        <main class="l-main">
        <?php get_template_part('/hero') ?>
          <article class="l-single-text p-single-text">
            <?php
        if (have_posts()) :
                the_content(); // 固定ページのコンテンツを表示
        endif;
        ?>
          </article>
        </main>
      <?php get_sidebar(); ?>


<?php get_footer();?>