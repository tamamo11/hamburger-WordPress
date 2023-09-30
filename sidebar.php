</div> <!-- l-body-inner2閉じタグ -->
      <nav class="l-sidebar p-sidebar u-sidebar-menu">
        <button id="menu-close" class="p-sidebar__close">
          <span class="x-mark"></span>
        </button>
        <h2 class="p-sidebar__h2">Menu</h2>
        <!-- <h3 class="p-sidebar__h3">バーガー</h3> -->
<?php
wp_nav_menu(array(
    'menu' => 'ハンバーガー',
    'theme_location' => 'hamburger', // 使用するデフォルトのメニュー位置
    'menu_class' => 'p-sidebar__list',  // メニューに適用するCSSクラス
));
?>
        <!-- <h3 class="p-sidebar__h3">サイド</h3> -->
<?php
wp_nav_menu(array(
    'menu' => 'サイド',
    'theme_location' => 'sidemenu', // 使用するデフォルトのメニュー位置
    'menu_class' => 'p-sidebar__list',  // メニューに適用するCSSクラス
));
?>
        <!-- <h3 class="p-sidebar__h3">ドリンク</h3> -->
<?php
wp_nav_menu(array(
    'menu' => 'ドリンク',
    'theme_location' => 'drink', // 使用するデフォルトのメニュー位置
    'menu_class' => 'p-sidebar__list',  // メニューに適用するCSSクラス
));
?>
      </nav>

</div> <!-- l-body-inner1閉じタグ -->

