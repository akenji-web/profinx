
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  function closeDrawerSubmenus() {
    $('.js-drawer-submenu-trigger').each(function () {
      const $btn = $(this);
      const panelId = $btn.attr('aria-controls');
      $btn.attr('aria-expanded', 'false');
      if (panelId) {
        $('#' + panelId).prop('hidden', true);
      }
    });
  }

  //ドロワーメニュー
  // ハンバーガーメニュー
  $(".js-hamburger").click(function () {
    const $hamburger = $(".js-hamburger");
    const isActive = $hamburger.hasClass("is-active");
    
    if (isActive) {
      closeDrawerSubmenus();
      // 閉じる時：is-closingクラスを追加してアニメーション実行
      $hamburger.removeClass("is-active").addClass("is-closing");
      // アニメーション完了後にis-closingクラスを削除
      setTimeout(function() {
        $hamburger.removeClass("is-closing");
      }, 750); // アニメーション時間（0.75s）に合わせる
    } else {
      // 開く時：is-activeクラスを追加
      $hamburger.addClass("is-active").removeClass("is-closing");
    }
    
    $(".js-header").toggleClass("is-active");
  });

  // リサイズ時にドロワーメニュー解除
  $(window).resize(function () {
    if (window.matchMedia("(min-width: 768px)").matches) {
      const $hamburger = $(".js-hamburger");
      if ($hamburger.hasClass("is-active")) {
        // 閉じるアニメーションを実行
        $hamburger.removeClass("is-active").addClass("is-closing");
        setTimeout(function() {
          $hamburger.removeClass("is-closing");
        }, 750);
      }
      $(".js-header").removeClass("is-active");
      closeDrawerSubmenus();
    }
  });

  // ハンバーガーメニューがクリックされたときに背景固定
  $(".js-hamburger, .js-drawer").click(function () {
    if ($("body").css("overflow") === "hidden") {
      // overflowがhiddenなら、bodyのスタイルを元に戻す
      $("body").css({
        height: "",
        overflow: ""
      });
    } else {
      // bodyにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
      $("body").css({
        height: "100%",
        overflow: "hidden"
      });
    }
  });

  // フェードインアニメーション
  function fadeAnime(){
    //ふわっと動くきっかけのクラス名と動きのクラス名の設定
    $('.js-fade__upTrigger').each(function(){ //js-fade__upTriggerというクラス名が
      var elemPos = $(this).offset().top-50; //要素より、50px上の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
        $(this).addClass('js-fade__up'); // 画面内に入ったらjs-fade__upというクラス名を追記
      } else {
        $(this).removeClass('js-fade__up'); // 画面外に出たらjs-fade__upというクラス名を外す
      }
    });
  }
  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function (){
    fadeAnime();
  });

  // トップMV：表示から1.5秒後にふわっと表示（スクロール連動なし）
  const MV_FADE_DELAY_MS = 1500;
  setTimeout(function () {
    $('.js-fade-mv__trigger').addClass('js-fade__up');
  }, MV_FADE_DELAY_MS);

  const $headerSubmenuParent = $('.header__nav-item--has-submenu');
  const $headerSubmenuTrigger = $('.js-header-submenu-trigger');
  const $headerSubmenuPanel = $('#header-submenu-services');

  function closeHeaderServicesSubmenu() {
    $headerSubmenuParent.removeClass('is-open');
    $headerSubmenuTrigger.attr('aria-expanded', 'false');
    $headerSubmenuPanel.prop('hidden', true);
  }

  $headerSubmenuTrigger.on('click', function (e) {
    e.stopPropagation();
    const isOpen = $headerSubmenuParent.hasClass('is-open');
    if (isOpen) {
      closeHeaderServicesSubmenu();
    } else {
      $headerSubmenuParent.addClass('is-open');
      $headerSubmenuTrigger.attr('aria-expanded', 'true');
      $headerSubmenuPanel.prop('hidden', false);
    }
  });

  $(document).on('click', function () {
    closeHeaderServicesSubmenu();
  });

  $headerSubmenuParent.on('click', function (e) {
    e.stopPropagation();
  });

  $(document).on('keydown', function (e) {
    if (e.key === 'Escape') {
      closeHeaderServicesSubmenu();
    }
  });

  $('.js-drawer-submenu-trigger').on('click', function () {
    const $btn = $(this);
    const panelId = $btn.attr('aria-controls');
    const $panel = $('#' + panelId);
    const isOpen = $btn.attr('aria-expanded') === 'true';
    if (isOpen) {
      $btn.attr('aria-expanded', 'false');
      $panel.prop('hidden', true);
    } else {
      $btn.attr('aria-expanded', 'true');
      $panel.prop('hidden', false);
    }
  });

  // マネジメント（SPアコーディオン）
  const mobileMediaQuery = window.matchMedia("(max-width: 768px)");
  const managementCollapsedHeightRem = 64.8;

  function setManagementBodyState($body, isOpen) {
    const $text = $body.find('.js-management-text');
    const $toggle = $body.find('.js-management-toggle');

    $body.toggleClass('is-open', isOpen);
    $toggle.attr('aria-expanded', String(isOpen));
    $toggle.find('.management__toggle-label').text(isOpen ? '閉じる' : 'もっと見る');
    $text.css('max-height', isOpen ? `${$text.prop('scrollHeight')}px` : `${managementCollapsedHeightRem}px`);
  }

  function initManagementAccordion() {
    const isMobile = mobileMediaQuery.matches;

    $('.js-management-body').each(function () {
      const $body = $(this);
      const $toggle = $body.find('.js-management-toggle');

      if (!isMobile) {
        $body.addClass('is-open');
        $toggle.attr('aria-expanded', 'true');
        $toggle.find('.management__toggle-label').text('閉じる');
        $body.find('.js-management-text').css('max-height', '');
        return;
      }

      const shouldOpen = $body.hasClass('is-open');
      setManagementBodyState($body, shouldOpen);
    });
  }

  $(document).on('click', '.js-management-toggle', function () {
    if (!mobileMediaQuery.matches) return;
    const $toggle = $(this);
    const $body = $toggle.closest('.js-management-body');
    const isOpen = $body.hasClass('is-open');

    setManagementBodyState($body, !isOpen);
  });

  $(window).on('resize', function () {
    initManagementAccordion();
  });

  initManagementAccordion();

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
  
    const url = new URL(this.href);
    const currentUrl = new URL(location.href);
  
    if (
      url.origin !== currentUrl.origin ||
      url.pathname !== currentUrl.pathname ||
      url.search !== currentUrl.search
    ) {
      return true;
    }
  
    let target = $(this.hash);
    if (!target.length) return true;
  
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
  
    return false;
  });

  // メンバースライダー
  if (document.querySelector(".js-member-swiper")) {
    new Swiper(".js-member-swiper", {
      loop: true, //繰り返しをする
      loopedSlides: 3,
      slidesPerView: 1,
      spaceBetween: 24,
      speed: 1000,
      effect: "slide",
      autoplay: {
        delay: 3000,
        waitForTransition: false
      },
      navigation: {
        prevEl: ".swiper-button-prev",
        nextEl: ".swiper-button-next",
      },
      breakpoints: {
        // when window width is >= 768px
        769: {
          slidesPerView: 3,
          spaceBetween: 16,
        },
        // when window width is >= 768px
        1025: {
          slidesPerView: 3,
          spaceBetween: 36,
        },
      },
    });
  }

  // 企業ロゴスライダー（実績紹介アーカイブ）
  if (document.querySelector(".js-company-logo-swiper")) {
    new Swiper(".js-company-logo-swiper", {
      loop: true, // ループ有効
      slidesPerView: 4, // スライダーの表示枚数
      spaceBetween: 0, // スライダーの間隔
      speed: 3000, // スライダーの速度
      allowTouchMove: false, // スワイプ無効
      autoplay: {
        delay: 0, // 途切れなくループ
        disableOnInteraction: false,
      },
      breakpoints: {
        769: {
          slidesPerView: 6,
        },
        1440: {
          slidesPerView: 8,
        }
      },
    });
  }
});
