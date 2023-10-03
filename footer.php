<footer class="l-footer p-footer">

<?php
wp_nav_menu(array(
    'menu' => 'footermenu',
    'theme_location' => 'footer navigation', // 使用するデフォルトのメニュー位置
    'menu_class' => 'p-footer__nav',  // メニューに適用するCSSクラス
));
?>
      <!-- <nav class="p-footer__nav">
        <ul class="p-footer__ul">
          <li><a href="#">ショップ情報</a></li>
          <li>｜</li>
          <li><a href="#">ヒストリー</a></li>
        </ul>
      </nav> -->
      <p class="p-footer-copyright">Copyright: RaiseTech</p>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
