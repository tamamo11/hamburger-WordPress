<footer class="l-footer p-footer">

<?php
wp_nav_menu(array(
    'menu' => 'footermenu',
    'theme_location' => 'footer navigation', // 使用するデフォルトのメニュー位置
    'menu_class' => 'p-footer__nav',  // メニューに適用するCSSクラス
));
?>

      <p class="p-footer-copyright">Copyright: RaiseTech</p>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
