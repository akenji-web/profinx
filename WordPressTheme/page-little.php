<?php
/*
Template Name:テンプレート（画像少ない）
*/
?>

<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-diagnosis_sp.webp")); ?>" media="(max-width: 600px)">
      <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-diagnosis_pc.webp")); ?>" alt="経営診断・企業価値向上プログラムのメイン画像">
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
      <h1 class="sub-mv__title">経営診断・企業価値向上プログラム</h1>
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
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-page/01.diagnosis/diagnosis-overview.webp')); ?>" alt="経営診断・企業価値向上プログラムの概要図" loading="lazy" decoding="async">
      </figure>
    </div>
  </div>

  <!-- サービス内容 -->
  <div id="services" class="sub-services">
    <div class="sub-services__inner">
      <hgroup class="sub-services__heading heading">
        <h2 class="heading__title">services</h2>
        <p class="heading__subtitle">サービス内容</p>
      </hgroup>
      <div class="sub-services__blocks">
        <div class="service-block">
          <h3 class="service-block__title">各種経営診断サービス</h3>
          <p class="service-block__lead">国際標準に準拠した弊社独自メソッドに基づき、マネジメントインタビューを<br class="u-desktop">ベースに各種経営課題をクイックに診断します。</p>
          <ul class="service-block__cards">
            <li class="sub-service-card">
              <p class="sub-service-card__title">経営ペンタゴンレビュー</p>
              <p class="sub-service-card__text">全社戦略・事業戦略・機能戦略・経営チーム・組織カルチャーの経営戦略5要素を、弊社独自メソッドによりクイックにレビューします。</p>
            </li>
            <li class="sub-service-card">
              <p class="sub-service-card__title">ファイナンシャルクイックレビュー</p>
              <p class="sub-service-card__text">コスト構造／CVP分析、プロフィットプール分析、資金／投資分析に基づく最適投資バランス分析等、財務状況や資本効率に関するレビューを実施します。</p>
            </li>
            <li class="sub-service-card">
              <p class="sub-service-card__title">人的資本クイックレビュー</p>
              <p class="sub-service-card__text">ISO30414に基づく人的資本KPI Fit&amp;Gap分析及び独自分析切り口によるエンゲージメント相関分析により、人的資本の課題をクイックにレビューします。</p>
            </li>
          </ul>
        </div>

        <div class="service-block">
          <h3 class="service-block__title">経営課題整理／事業計画・アクションプラン策定</h3>
          <p class="service-block__lead">表層的事象のみならず、真因に迫る課題導出に基づき、「実行」にこだわるプランニングを行います。</p>
          <ul class="service-block__cards">
            <li class="sub-service-card">
              <p class="sub-service-card__title">経営課題整理・統合</p>
              <p class="sub-service-card__text">表層的事象のみならず、真因に迫る課題導出に基づき、「実行」にこだわるプランニングを行います。</p>
            </li>
            <li class="sub-service-card">
              <p class="sub-service-card__title">事業計画の作成</p>
              <p class="sub-service-card__text">バリューアップドライバーを動かす施策・KPIにまでブレークダウンした計画を作成</p>
            </li>
            <li class="sub-service-card">
              <p class="sub-service-card__title">アクションプランの作成</p>
              <p class="sub-service-card__text">絵に描いた餅で終わらせない、5W1Hが明確化された行動計画を作成</p>
            </li>
          </ul>
        </div>

        <div class="service-block">
          <h3 class="service-block__title">三位一体型企業価値向上プログラム</h3>
          <p class="service-block__lead">導出された経営課題に対し、改善計画策定・実行、マネジメント人材育成、現場力強化の三位一体改革により、企業価値向上を支援します。</p>
          <ul class="service-block__cards">
            <li class="sub-service-card">
              <p class="sub-service-card__title">価値向上戦略策定・実行</p>
              <p class="sub-service-card__text">事業環境分析、これまでの取り組み施策の評価に基づき、改善に向けた事業戦略を再構築し、タスクフォースを設計のうえで、実行まで支援します。</p>
            </li>
            <li class="sub-service-card">
              <p class="sub-service-card__title">マネジメント人材育成</p>
              <p class="sub-service-card__text">戦略に基づいて必要な人材像を特定し、ギャップを埋めるための人材育成施策を立案・推進体制構築及び実行まで支援します。</p>
            </li>
            <li class="sub-service-card">
              <p class="sub-service-card__title">現場力強化</p>
              <p class="sub-service-card__text">戦略を実行する現場の運営／オペレーション体制を整備し、現場の課題解決をPDCA支援します。現場力強化に向けた営業／管理等の改善ツールも設計・導入します。</p>
            </li>
          </ul>
        </div>
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
        <div class="feature feature--large sub-features__item">
          <div class="feature__body">
            <div class="feature__content">
              <p class="feature__num">01</p>
              <h3 class="feature__title">独自のインタビューナレッジで貴社の「経営力」を可視化</h3>
              <p class="feature__text">当社コンサルタントは、経営参謀としてCXOレベルと直接対話する経験を豊富に持ち、経営戦略にかかる全アジェンダ（組織ガバナンス、事業戦略、財務／税務、ファイナンス、人事、IT、マーケティング、M&A、IR／株主対応）に精通しています。インタビューを通じて、経営課題を言語化及び真因深掘りにより、取るべき打ち手を明らかにします。</p>
            </div>
            <div class="feature__image feature__image--large">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-little/service-little-feature-01.webp')); ?>" alt="経営診断を実施するコンサルタントのイメージ" loading="lazy" decoding="async">
            </div>
          </div>
        </div>

        <div class="feature sub-features__item">
          <div class="feature__bg" aria-hidden="true"></div>
          <div class="feature__body feature__body--reverse">
            <div class="feature__content">
              <p class="feature__num">02</p>
              <h3 class="feature__title">戦略のみならず、人材育成・現場力強化により、企業価値向上にコミット</h3>
              <p class="feature__text">企業価値向上に必要不可欠な、戦略・人材・現場力を同時並行的に中から支援することで、戦略策定とそれに基づく人材育成、実行するための現場への落とし込み及びこれらのPDCAサイクルを高速回転させることで、企業価値向上にコミットします。</p>
            </div>
            <div class="feature__image feature__image--large">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-little/service-little-feature-02.webp')); ?>" alt="戦略と人材育成を連動する図解イメージ" loading="lazy" decoding="async">
            </div>
          </div>
        </div>

        <div class="feature sub-features__item">
          <div class="feature__bg" aria-hidden="true"></div>
          <div class="feature__body">
            <div class="feature__content">
              <p class="feature__num">03</p>
              <h3 class="feature__title">現場伴走により、戦略の実行定着まで支援</h3>
              <p class="feature__text">実行フェーズでは、現場の運営／オペレーション体制の整備、課題解決のPDCA支援、営業・管理領域を含む改善ツールの設計と導入まで実務として伴走します。</p>
            </div>
            <div class="feature__image feature__image--large">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/service-little/service-little-feature-03.webp')); ?>" alt="現場改善を支援するチームのイメージ" loading="lazy" decoding="async">
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
