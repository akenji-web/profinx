<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="mv">
    <div class="mv__inner">
      <picture class="mv__image">
        <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/mv-sp.jpg")); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/mv_pc.webp")); ?>" alt="">
      </picture>
      <div class="mv__text-area">
        <p class="mv__text">ProFinX Co.は<br>
        企業価値向上<span class="mv__text-small">を</span>支<span class="mv__text-small">える</span><br>
        経営参謀<span class="mv__text-small">です。</span></p>
      </div>
    </div>
  </div>

  <!-- About -->
  <section class="about">
    <div class="about__inner inner">
      <div class="about__container">
        <div class="about__contents">
          <h2 class="about__heading">ProFinX Co.とは</h2>
          <div class="about__text-area">
            <!-- <p class="about__text">私たちの会社名は、<br>
            Pro（前へ進める/プロフェッショナル）<br>
            ＋Fin（金融/財務企画）<br>
            ＋X（トランスフォーメーション/変革）を組み合わせた造語です。</p>
            <p class="about__text">そこに込めた想いと企業理念は、 「高度な専門性を備えた経営人材チームの提供」と「データ経営の導入支援」を通じて、CFOと経営企画機能を強化し、日本企業の企業価値向上に貢献すること。</p>
            <p class="about__text">これを推進する私たちのチームは、公認会計士、外資系証券アナリスト、上場企業の経営企画担当、サステナビリティ経営の実務担当など多様なバックグランドを備えており、CXOレベルでの目線で、クライアント企業の「変革」に高い熱量でコミットします。</p> -->
            <p class="about__text"><?php echo nl2br(get_field('about_text')); ?></p>
          </div>
          <div class="about__button">
            <a href="<?php echo esc_url(home_url('/company')); ?>" class="button">会社概要<span class="button__arrow"></span></a>
          </div>
        </div>
        <figure class="about__image">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/about-image.webp")); ?>" alt="経営戦略、マネジメント、エクイティ戦略のベン図" loading="lazy" decoding="async">
        </figure>
      </div>
    </div>
  </section>

  <!-- Value Proposition -->
  <section class="value-proposition">
    <div class="value-proposition__inner inner">
      <hgroup class="heading value-proposition__heading">
        <h2 class="heading__title">value proposition</h2>
        <p class="heading__subtitle">提供価値</p>
      </hgroup>
      <div class="value-proposition__container">
        <figure class="value-proposition__image">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/our-strength-image.webp")); ?>" alt="ビジネスミーティングの様子" loading="lazy" decoding="async">
        </figure>
        <div class="value-proposition__contents">
          <ul class="value-proposition__list">
            <!-- <li class="value-proposition__item">
              <div class="value-proposition__item-header">
                <span class="value-proposition__number">01</span>
                <h3 class="value-proposition__item-title">経営者視点の提案力</h3>
              </div>
              <p class="value-proposition__item-text">経営戦略にかかる全アジェンダ（組織ガバナンス/事業戦略/財務税務/ファイナンス/人事/IT/マーケティング/M＆A/IR/株主対応）に精通した経験豊富なコンサルタントが企業価値向上施策を客観的立場から直言し、経営意思決定を後押しします。</p>
            </li>
            <li class="value-proposition__item">
              <div class="value-proposition__item-header">
                <span class="value-proposition__number">02</span>
                <h3 class="value-proposition__item-title">「腹落ち」を作る経営判断・推進のハブ</h3>
              </div>
              <p class="value-proposition__item-text">
                "第三者のハブ"として組織のしがらみを解消し、トップの「腹落ち」を醸成し、膨大な工数を厭わない熱量で、経営陣の円滑なコミュニケーションと企業価値向上を実現します。
              </p>
            </li>
            <li class="value-proposition__item">
              <div class="value-proposition__item-header">
                <span class="value-proposition__number">03</span>
                <h3 class="value-proposition__item-title">最高品質のデータ分析/基盤構築力</h3>
              </div>
              <p class="value-proposition__item-text">
                社内に点在・潜在するデータを収集・統合し、高速かつ高度なデータ分析により、経営課題の把握と解決に向けたインサイト（示唆）を導出します。<br>
                インサイトを“使いこなす”ため、データ基盤、ダッシュボード、管理帳票の策定と運用までワンストップで支援します。
              </p>
            </li> -->
            <li class="value-proposition__item">
              <div class="value-proposition__item-header">
                <span class="value-proposition__number">01</span>
                <h3 class="value-proposition__item-title"><?php echo get_field('value-proposition1_title'); ?></h3>
              </div>
              <p class="value-proposition__item-text"><?php echo nl2br(get_field('value-proposition1_text')); ?></p>
            </li>
            <li class="value-proposition__item">
              <div class="value-proposition__item-header">
                <span class="value-proposition__number">02</span>
                <h3 class="value-proposition__item-title"><?php echo get_field('value-proposition2_title'); ?></h3>
              </div>
              <p class="value-proposition__item-text"><?php echo nl2br(get_field('value-proposition2_text')); ?></p>
            </li>
            <li class="value-proposition__item">
              <div class="value-proposition__item-header">
                <span class="value-proposition__number">03</span>
                <h3 class="value-proposition__item-title"><?php echo get_field('value-proposition3_title'); ?></h3>
              </div>
              <p class="value-proposition__item-text"><?php echo nl2br(get_field('value-proposition3_text')); ?></p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="services">
    <div class="services__inner inner">
      <hgroup class="services__heading heading heading--left">
        <h2 class="heading__title">services</h2>
        <p class="heading__subtitle">コンサルティングメニュー</p>
      </hgroup>
      <ul class="services__list">
        <li class="services__item">
          <a href="#" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon01.webp")); ?>" alt="">
            </div>
            <p class="services-card__title">現状分析・経営診断</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="">
            </div>
          </a>
        </li>
        <li class="services__item">
          <a href="#" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon02.webp")); ?>" alt="">
            </div>
            <p class="services-card__title">中期経営計画・戦略策定</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="">
            </div>
          </a>
        </li>
        <li class="services__item">
          <a href="#" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon03.webp")); ?>" alt="">
            </div>
            <p class="services-card__title">M&A戦略・組織再編</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="">
            </div>
          </a>
        </li>
        <li class="services__item">
          <a href="#" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon04.webp")); ?>" alt="">
            </div>
            <p class="services-card__title">BDD・PMI</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="">
            </div>
          </a>
        </li>
        <li class="services__item">
          <a href="#" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon05.webp")); ?>" alt="">
            </div>
            <p class="services-card__title">新規事業開発</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="">
            </div>
          </a>
        </li>
        <li class="services__item">
          <a href="#" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon06.webp")); ?>" alt="">
            </div>
            <p class="services-card__title">人的資本経営・組織開発</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="">
            </div>
          </a>
        </li>
        <li class="services__item">
          <a href="#" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon07.webp")); ?>" alt="">
            </div>
            <p class="services-card__title">経営管理体制高度化</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="">
            </div>
          </a>
        </li>
        <li class="services__item">
          <a href="#" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon08.webp")); ?>" alt="">
            </div>
            <p class="services-card__title">IR/SR・<br>エクイティアドバイザリー</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="">
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <!-- Case Study -->
  <section class="case-study">
    <div class="case-study__inner inner">
      <div class="case-study__head">
        <hgroup class="heading heading--left">
          <h2 class="heading__title">case study</h2>
          <p class="heading__subtitle">実績紹介</p>
        </hgroup>
        <div class="case-study__button">
          <a href="<?php echo esc_url(home_url('/case-study')); ?>" class="button">View more<span class="button__arrow"></span></a>
        </div>
      </div>
      <ul class="case-study__list">
        <?php
        $case_study_query = new WP_Query([
          'post_type' => 'case-study',
          'posts_per_page' => 4,
          'orderby' => 'date',
          'order' => 'DESC',
        ]);
        if ($case_study_query->have_posts()) :
          while ($case_study_query->have_posts()) : $case_study_query->the_post();
        ?>
        <li class="case-study__item case-card">
          <p class="case-card__title"><?php the_title(); ?></p>
          <p class="case-card__description"><?php echo esc_html(get_field('description') ?: '〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇'); ?></p>
          <div class="case-card__bottom">
            <div class="case-card__categories">
            <?php
            $taxonomy_terms = get_the_terms($post->ID, 'case-study-category');
            if (!empty($taxonomy_terms)) {
              foreach ($taxonomy_terms as $taxonomy_term) {
                echo '<span class="case-card__category">' . esc_html($taxonomy_term->name) . '</span>';
              }
            }
            ?>
            </div>
          </div>
        </li>
        <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </ul>
    </div>
  </section>

  <!-- News -->
  <section class="news">
    <div class="news__inner inner">
      <div class="news__container">
        <div class="news__left">
          <hgroup class="heading heading--left">
            <h2 class="heading__title">news</h2>
            <p class="heading__subtitle">ニュース</p>
          </hgroup>
          <div class="news__button">
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="button">お知らせ一覧<span class="button__arrow"></span></a>
          </div>
        </div>
        <div class="news__list">
          <?php
          $news_query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
          ]);
          if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post();
          ?>
          <a href="<?php the_permalink(); ?>" class="news__item">
            <div class="news__top">
              <time class="news__date" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
              <?php
                $terms = get_the_terms($post->ID, 'category');
                if ($terms && ! is_wp_error($terms)) {
                  foreach ($terms as $term) {
                    echo '<p class="news__category">' . esc_html($term->name) . '</p>';
                  }
                }
              ?>
            </div>
            <p class="news__text"><?php echo esc_html(get_the_title()); ?></p>
          </a>
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="contact">
    <div class="contact__inner inner">
      <div class="contact__container">
        <hgroup class="heading heading--contact">
          <h2 class="heading__title">Contact</h2>
          <p class="heading__subtitle">お問い合わせ</p>
        </hgroup>
        <div class="contact__content">
          <p class="contact__text">各種経営相談や勉強会開催などにも対応しております。<br>お気軽にお問合せください。</p>
          <div class="contact__button-area">
            <a href="tel:03-6257-2000" class="contact__button contact__button-tel">TEL.03-6257-2000</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="contact__button contact-button contact-button--large">
              <span class="contact-button__icon"></span>お問い合わせ
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>