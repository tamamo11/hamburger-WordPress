<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>
  </head>
  <?php if( is_front_page() ) {
 $body_class = 'top-page'; // front-pageに指定するクラス
} else if( is_single()){
 $body_class = 'posttype-page'; // single or page投稿タイプのページに指定するクラス
} elseif (is_page()) {
  $body_class = 'static-page'; // 固定ページに指定するクラス
} elseif (is_404()) {
  $body_class = 'error-page'; // 404エラーページに指定するクラス
}
?>
  <body class="l-body <?php echo $body_class ?>">
    <div class="u-sidebar-bg"></div>
    <div class="l-body-inner1">
      <div class="l-body-inner2">
        <header class="l-header p-header">
          <div class="p-header-top">
            <button id="menu-open" class="p-header__button">Menu</button>
          </div>
          <h1 class="p-header__title"><a href="/">Hamburger</a></h1>
          <div class="p-header-wrapflex">
            <?php get_search_form() ?>
          </div>
        </header>