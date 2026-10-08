<?php
/*
Template Name:テンプレート（画像多い）
*/
?>

<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-mid-term-plan_sp.webp")); ?>" media="(max-width: 600px)">
      <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-mid-term-plan_pc.webp")); ?>" alt="企業情報のメイン画像">
    </picture>
    <!-- パンくず -->
    <div class="sub-mv__breadcrumb breadcrumb">
      <div class="breadcrumb__inner">
      <?php if (function_exists('bcn_display')) { ?>
        <div class="breadcrumb__list" vocab="http://schema.org/" typeof="BreadcrumbList">
          <?php bcn_display(); ?>
        </div>
      <?php } ?>
      </div>
    </div>
    <div class="sub-mv__text-area">
      <h1 class="sub-mv__title">中期経営計画策定</h1>
    </div>
  </div>

  <!-- 概要 -->
  <div id="overview" class="sub-overview">
    <!-- アンカーナビ -->
    <nav class="sub-overview__anchor-nav anchor-nav" aria-label="ページ内ナビゲーション">
      <div class="anchor-nav__inner">
        <ul class="anchor-nav__list anchor-nav__list--sub">
          <li class="anchor-nav__item">
            <a href="#overview" class="anchor-nav__link">概要</a>
          </li>
          <li class="anchor-nav__item">
            <a href="#services" class="anchor-nav__link">サービス内容</a>
          </li>
          <li class="anchor-nav__item">
            <a href="#features" class="anchor-nav__link">サービス特長</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="sub-overview__inner sub-inner">
      <hgroup class="sub-overview__heading heading">
        <h2 class="heading__title">overview</h2>
        <p class="heading__subtitle">概要</p>
      </hgroup>
      <div class="sub-overview__lead">
        <p>政府指針・グローバルスタンダード*に基づく独自の診断フレームワークにより、経営及び経営参謀経験豊富なコンサルタントが、<br>
        自社の経営状況・戦略課題を可視化し、アクショナブルなプランニングまで一気通貫で支援します。</p>
      </div>
      <figure class="sub-overview__diagram">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-midterm/service-midterm-overview.png')); ?>" alt="中期経営計画策定の概要フロー図" loading="lazy" decoding="async">
      </figure>
    </div>
  </div>

  <!-- サービス内容 -->
  <div id="services" class="sub-services">
    <div class="sub-inner">
      <hgroup class="sub-services__heading heading">
        <h2 class="heading__title">services</h2>
        <p class="heading__subtitle">サービス内容</p>
      </hgroup>
      <div class="sub-services__container">
        <ul class="sub-services__list">
          <li class="service-pattern sub-services__item">
            <!-- <div class="service-pattern__bg" aria-hidden="true"></div> -->
            <div class="service-pattern__body">
              <p class="service-pattern__label u-mobile">pattern<span class="service-pattern__num">01</span></p>
              <div class="service-pattern__image">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-midterm/service-midterm-pattern-01.png')); ?>" alt="" loading="lazy" decoding="async">
              </div>
              <div class="service-pattern__content">
                <p class="service-pattern__label u-desktop">pattern<span class="service-pattern__num">01</span></p>
                <h3 class="service-pattern__title">資本コスト起点型中計策定</h3>
                <p class="service-pattern__text">株主資本コストを算定し、ROE目標を設定します。それを起点に資本政策の検討、KPIへの落とし込みとギャップを埋める施策の検討により、中計を策定支援します。</p>
              </div>
            </div>
          </li>
  
          <li class="service-pattern sub-services__item">
            <div class="service-pattern__bg" aria-hidden="true"></div>
            <div class="service-pattern__body service-pattern__body--reverse">
              <p class="service-pattern__label u-mobile">pattern<span class="service-pattern__num">02</span></p>
              <div class="service-pattern__image">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-midterm/service-midterm-pattern-02.png')); ?>" alt="" loading="lazy" decoding="async">
              </div>
              <div class="service-pattern__content">
                <p class="service-pattern__label u-desktop">pattern<span class="service-pattern__num">02</span></p>
                <p class="service-pattern__title">多階層ハンズオン型中計</p>
                <p class="service-pattern__text">経営企画部に伴走し、トップマネジメント及び事業部とのコミュニケーションハブとなり、意思疎通の翻訳機能と有機的連携の触媒機能を担って、中計策定を社内に入り込んで支援します。</p>
              </div>
            </div>
          </li>
  
          <li class="service-pattern sub-services__item">
            <div class="service-pattern__bg" aria-hidden="true"></div>
            <div class="service-pattern__body">
              <p class="service-pattern__label u-mobile">pattern<span class="service-pattern__num">03</span></p>
              <div class="service-pattern__image">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-midterm/service-midterm-pattern-03.png')); ?>" alt="" loading="lazy" decoding="async">
              </div>
              <div class="service-pattern__content">
                <p class="service-pattern__label u-desktop">pattern<span class="service-pattern__num">03</span></p>
                <p class="service-pattern__title">長期ビジョン/MVV構想・バックキャスティング型中計策定</p>
                <p class="service-pattern__text">中計に先立ち、長期戦略/ビジョンや、ミッション・ビジョン・バリュー等のあり姿を構想・定義し、将来への通過点として逆引きする形で中計を策定支援します。</p>
              </div>
            </div>
          </li>
  
          <li class="service-pattern sub-services__item">
            <div class="service-pattern__bg" aria-hidden="true"></div>
            <div class="service-pattern__body service-pattern__body--reverse">
              <p class="service-pattern__label u-mobile">pattern<span class="service-pattern__num">04</span></p>
              <div class="service-pattern__image">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-midterm/service-midterm-pattern-04.png')); ?>" alt="" loading="lazy" decoding="async">
              </div>
              <div class="service-pattern__content">
                <p class="service-pattern__label u-desktop">pattern<span class="service-pattern__num">04</span></p>
                <p class="service-pattern__title">中計開示ストーリー・IR支援</p>
                <p class="service-pattern__text">資本市場が求める骨太な戦略ストーリーや、事業ポートフォリオ、キャッシュアロケーションといった投資家の関心が高い内容を押さえた開示を支援します。</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- サービス特長 -->
  <div id="features" class="sub-features">
    <div class="sub-features__inner sub-inner">
      <hgroup class="sub-features__heading heading">
        <h2 class="heading__title">features</h2>
        <p class="heading__subtitle">サービス特長</p>
      </hgroup>
      <div class="sub-features__list">
        <div class="feature sub-features__item">
          <div class="feature__body">
            <div class="feature__content">
              <p class="feature__num">01</p>
              <h3 class="">「抽象度」と「解像度」の両立支援</h3>
              <p class="feature__text">戦略合性や業界内ポジション等のショートリストの精緻化といった「解像度」、経営トップが描く将来像や企業価値向上のストーリーといった「抽象度」を、両立させながら中計へ落とし込みます。</p>
            </div>
            <div class="feature__image">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/diagnosis-features-image01.webp')); ?>" alt="" loading="lazy" decoding="async">
            </div>
          </div>
        </div>

        <div class="feature sub-features__item">
          <div class="feature__bg" aria-hidden="true"></div>
          <div class="feature__body feature__body--reverse">
            <div class="feature__content">
              <p class="feature__num">02</p>
              <h3 class="feature__title">KSF充足度とシナジーまで練り 上げられた戦略的ターゲットリスト</h3>
              <p class="feature__text">独自のデータベース・専門家ネットワークに基づき、 M&A戦略と合致する企業を、KSF充足度とシナジーの 観点から評価しリストアップします。また、KSFをKPIに 落とし込んで定量評価することで、納得感を醸成し、社 内意思決定を促進します。</p>
            </div>
            <div class="feature__image">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/diagnosis-features-image01.webp')); ?>" alt="" loading="lazy" decoding="async">
            </div>
          </div>
        </div>

        <div class="feature sub-features__item">
          <div class="feature__bg" aria-hidden="true"></div>
          <div class="feature__body">
            <div class="feature__content">
              <p class="feature__num">03</p>
              <h3 class="feature__title">M&A戦略立案から、エグゼ キューション、その後のPMI で、グループー気通貫支援可</h3>
              <p class="feature__text">国内独立系トップクラスの M&Aアドバイザリー実績を誇 るプルータスグループ全体のケイパビリティを活かし、 M&A戦略からディール実行、PMIまで一気通貫でご支 援します。クライアントのM&Aにおける戦略上の「狙い」 を理解したソーシング・DD・PMIが可能です。</p>
            </div>
            <div class="feature__image">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/diagnosis-features-image01.webp')); ?>" alt="" loading="lazy" decoding="async">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact -->
  <?php get_template_part('parts/contact'); ?>
</main>
<?php get_footer(); ?>
