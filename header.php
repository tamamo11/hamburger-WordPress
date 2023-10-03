<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>
  </head>
  <body class="l-body"> 
  <!-- body_class();を後で追加 -->
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