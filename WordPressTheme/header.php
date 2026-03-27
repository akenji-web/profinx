<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>

<body>
	<header class="header js-header">
    <div class="header__inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="ProFinX">
      </a>
      <nav class="header__nav u-desktop" aria-label="グローバルナビゲーション">
        <ul class="header__nav-list">
          <li class="header__nav-item">
            <a class="header__nav-link" href="<?php echo esc_url(home_url("/company")) ?>">company<span>企業情報</span></a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="<?php echo esc_url(home_url("/services")) ?>">services<span>サービス</span></a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="<?php echo esc_url(home_url("/case-study")) ?>">case study<span>実績紹介</span></a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="<?php echo esc_url(home_url("/news")) ?>">news<span>ニュース</span></a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="<?php echo esc_url(home_url("/blog")) ?>">blog<span>ブログ</span></a>
          </li>
        </ul>

        <div class="header__buttons">
          <a href="<?php echo esc_url(home_url("/recruit")) ?>" class="header__recruit-button recruit-button">採用応募</a>
          <a href="<?php echo esc_url(home_url("/contact")) ?>" class="header__contact-button contact-button contact-button--small">
            <span class="contact-button__icon"></span>お問い合わせ
          </a>
        </div>
      </nav>

      <button class="header__hamburger js-hamburger u-mobile" aria-label="メニューを開く">
        <span></span><span></span><span></span>
      </button>

      <div class="header__drawer js-drawer u-mobile">
        <nav class="drawer__nav" aria-label="スマートフォンメニュー">
          <ul class="drawer__list">
            <li><a href="/company/">企業情報</a></li>
            <li><a href="/services/">サービス</a></li>
            <li><a href="/case/">実績紹介</a></li>
            <li><a href="/news/">ニュース</a></li>
            <li><a href="/blog/">ブログ</a></li>
            <li><a href="/recruit/">採用応募</a></li>
            <li><a href="/contact/">お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>