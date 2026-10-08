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
	<?php
	$header_service_sublinks = [
		[ 'label' => '経営診断・企業価値向上プログラム', 'url' => 'diagnosis' ],
		[ 'label' => '中期経営計画策定', 'url' => 'mid-term-plan' ],
		[ 'label' => 'M&A戦略・組織再編', 'url' => 'ma-strategy' ],
		[ 'label' => '各種デューディリジェンス・PMI', 'url' => 'bdd-pmi' ],
		[ 'label' => '新規事業開発', 'url' => 'biz-dev' ],
		[ 'label' => '人的資本経営・組織開発', 'url' => 'human-capital' ],
		[ 'label' => '経営管理体制高度化', 'url' => 'governance' ],
		[ 'label' => 'エクイティアドバイザリー', 'url' => 'equity-advisory' ],
	];
	?>
	<header class="header js-header">
    <div class="header__inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="ProFinX Co.のロゴ">
      </a>
      <nav class="header__nav u-desktop" aria-label="グローバルナビゲーション">
        <ul class="header__nav-list">
          <li class="header__nav-item">
            <a class="header__nav-link" href="<?php echo esc_url(home_url("/company")) ?>">company<span>企業情報</span></a>
          </li>
          <li class="header__nav-item header__nav-item--has-submenu">
            <button type="button" class="header__nav-link header__nav-link--submenu-trigger js-header-submenu-trigger" aria-expanded="false" aria-controls="header-submenu-services" id="header-submenu-services-trigger" >
              services<span>サービス</span>
            </button>
            <div class="header__submenu" id="header-submenu-services" role="region" aria-labelledby="header-submenu-services-trigger" hidden >
              <ul class="header__submenu-list">
                <?php foreach ( $header_service_sublinks as $row ) : ?>
                  <li class="header__submenu-item">
                    <a class="header__submenu-link" href="<?php echo esc_url( home_url("/" . $row['url']) ); ?>">
                      <span class="header__submenu-label"><?php echo esc_html( $row['label'] ); ?></span>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="<?php echo esc_url(home_url("/cases")) ?>">cases<span>実績紹介</span></a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="<?php echo esc_url(home_url("/news")) ?>">news<span>ニュース</span></a>
          </li>
          <li class="header__nav-item">
            <a class="header__nav-link" href="<?php echo esc_url(home_url("/insight")) ?>">insight<span>インサイト</span></a>
          </li>
        </ul>

        <div class="header__buttons">
          <a href="<?php echo esc_url(home_url("/recruit")) ?>" class="header__recruit-button recruit-button">採用</a>
          <a href="<?php echo esc_url(home_url("/contact")) ?>" class="header__contact-button contact-button contact-button--small">
            <span class="contact-button__icon"></span>お問い合わせ
          </a>
        </div>
      </nav>

      <button class="header__hamburger hamburger js-hamburger u-mobile" aria-label="メニューを開く">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <div class="header__drawer drawer js-drawer js-sp-nav">
        <div class="drawer__inner">
          <nav class="drawer__nav" aria-label="スマートフォンメニュー">
            <ul class="drawer__list">
              <li class="drawer__item">
                <a href="<?php echo esc_url(home_url("/company")) ?>" class="drawer__link">company<span>企業情報</span></a>
              </li>
              <li class="drawer__item drawer__item--has-submenu">
                <button type="button" class="drawer__link drawer__parent js-drawer-submenu-trigger" aria-expanded="false" aria-controls="drawer-submenu-services">
                  services<span>サービス</span>
                </button>
                <ul class="drawer__submenu" id="drawer-submenu-services" hidden>
                  <?php foreach ( $header_service_sublinks as $row ) : ?>
                    <li class="drawer__submenu-item">
                      <a href="<?php echo esc_url( home_url( '/' . $row['url']) ); ?>"><?php echo esc_html( $row['label'] ); ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </li>
              <li class="drawer__item">
                <a href="<?php echo esc_url(home_url("/cases")) ?>" class="drawer__link">cases<span>実績紹介</span></a>
              </li>
              <li class="drawer__item">
                <a href="<?php echo esc_url(home_url("/news")) ?>" class="drawer__link">news<span>ニュース</span></a>
              </li>
              <li class="drawer__item">
                <a href="<?php echo esc_url(home_url("/insight")) ?>" class="drawer__link">insight<span>インサイト</span></a>
              </li>
            </ul>
            <div class="drawer__button-area">
              <a href="<?php echo esc_url(home_url("/recruit")) ?>" class="drawer__button recruit-button">採用</a>
              <a href="<?php echo esc_url(home_url("/contact")) ?>" class="drawer__button contact-button contact-button--small">
                <span class="contact-button__icon"></span>お問い合わせ
              </a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>