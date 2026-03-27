
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  let topBtn = $('.c-to-top');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });
  //  ヘッダークラス名付与
  let header = $('.p-header');
  let headerHeight = $('.p-header').height();
  let height = $('.js-mv-height').height();

  console.log('ヘッダー高さ ' + headerHeight);
  console.log('mv高さ ' + height);

  $(window).scroll(function () {
    if ($(this).scrollTop() > (height - headerHeight)) {
      header.addClass('is-color');
    } else {
      header.removeClass('is-color');
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  //ドロワーメニュー
  $(".js-hamburger").click(function () {
    if ($('.js-hamburger').hasClass('is-active')) {
      $('.js-hamburger').removeClass("is-active");
      // $("html").toggleClass("is-fixed");
      $(".js-sp-nav").fadeOut(300);
    } else {
      $('.js-hamburger').addClass("is-active");
      // $("html").toggleClass("is-fixed");
      $(".js-sp-nav").fadeIn(300);
    }
  });



  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
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
        768: {
          slidesPerView: 6,
        },
        1440: {
          slidesPerView: 8,
        }
      },
    });
  }
});
