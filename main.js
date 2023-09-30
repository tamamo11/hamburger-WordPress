(function($) {
  $(function () {
    //関数定義
    function openSidebar() {
      $('body').toggleClass('u-sidebar-body--isOpen');
      $('.u-sidebar-bg').toggleClass('u-sidebar-bg--isOpen');

      if (!$('.p-sidebar').hasClass('u-sidebar-menu--isClose') && !$('.p-sidebar').hasClass('u-sidebar-menu--isOpen')) {
      $('.p-sidebar').addClass('u-sidebar-menu--isOpen');
      }
      else {
        $('.p-sidebar').toggleClass('u-sidebar-menu--isClose')
        $('.p-sidebar').toggleClass('u-sidebar-menu--isOpen');
      }
    }
    function closeSidebar() {
      $('body').toggleClass('u-sidebar-body--isOpen');
      $('.u-sidebar-bg').toggleClass('u-sidebar-bg--isOpen');
      $('.p-sidebar').toggleClass('u-sidebar-menu--isClose')
      $('.u-sidebar-menu').toggleClass('u-sidebar-menu--isOpen');
    }

    function removeClassesIfExist(element, classesToRemove) {
      classesToRemove.forEach(className => {
        if (element.hasClass(className)) {
          element.removeClass(className);
        }
      });
    }

    // 要素を取得
    const bodyElement = $('body');
    const sidebarBgElement = $('.u-sidebar-bg');
    const sidebarMenuElement = $('.p-sidebar');

    // 削除したいクラスの配列を定義
    const classesToRemove = ['u-sidebar-body--isOpen', 'u-sidebar-bg--isOpen', 'u-sidebar-menu--isOpen', 'u-sidebar-menu--isClose'];


    //以下イベントハンドラ

    $('#menu-open').on('click', function() {
      console.log("読み込まれた");
      openSidebar();
    });
    $('#menu-close').on('click', function() {
      closeSidebar();
    });
    $('.u-sidebar-bg').on('click', function(event) {
      // モーダル外部をクリックしたときの処理
      if ($(event.target).closest('.p-sidebar').length === 0) {
        closeSidebar();
      }
    });

    // ウィンドウのリサイズイベントを監視
  $(window).on('resize', function() {
  let windowWidth = $(window).width();
  if (windowWidth <= 1200) {
    // 各要素からクラスを削除
    removeClassesIfExist(bodyElement, classesToRemove);
    removeClassesIfExist(sidebarBgElement, classesToRemove);
    removeClassesIfExist(sidebarMenuElement, classesToRemove);
  }
});
  });
  })(jQuery);
