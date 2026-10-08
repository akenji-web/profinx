<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="mv">
    <div class="mv__inner">
      <picture class="mv__image">
        <source media="(max-width: 600px)" srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/mv_sp.webp")); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/mv_pc.webp")); ?>" alt="メイン画像">
      </picture>
      <div class="mv__text-area">
        <p class="mv__text js-fade-mv__trigger">ProFinX Co.は<br>
        企業価値向上<span class="mv__text-small">を</span>支<span class="mv__text-small">える</span><br>
        経営参謀<span class="mv__text-small">です。</span></p>
        <!-- <p class="mv__text js-fade-mv__trigger">ProFinX Co.は</p>
        <p class="mv__text js-fade-mv__trigger">企業価値向上<span class="mv__text-small">を</span>支<span class="mv__text-small">える</span></p>
        <p class="mv__text js-fade-mv__trigger">経営参謀<span class="mv__text-small">です</span></p> -->
      </div>
    </div>
  </div>

  <!-- About -->
  <section class="about js-fade__upTrigger">
    <div class="about__inner inner">
      <div class="about__container">
        <div class="about__contents">
          <h2 class="about__heading">ProFinX Co.<span>とは</span></h2>
          <div class="about__text-area">
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

  <!-- Services -->
  <section id="services" class="services">
    <div class="services__inner inner">
      <hgroup class="services__heading heading js-fade__upTrigger">
        <h2 class="heading__title">services</h2>
        <p class="heading__subtitle">コンサルティングメニュー</p>
      </hgroup>
      <ul class="services__list js-fade__upTrigger">
        <li class="services__item">
          <a href="<?php echo esc_url(home_url('/diagnosis')); ?>" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon01.webp")); ?>" alt="" loading="lazy" decoding="async">
            </div>
            <p class="services-card__title">経営診断・企業価値向上<br>プログラム</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="" loading="lazy" decoding="async">
            </div>
          </a>
        </li>
        <li class="services__item">
          <a href="<?php echo esc_url(home_url('/mid-term-plan')); ?>" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon02.webp")); ?>" alt="" loading="lazy" decoding="async">
            </div>
            <p class="services-card__title">中期経営計画策定</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="" loading="lazy" decoding="async">
            </div>
          </a>
        </li>
        <li class="services__item">
          <a href="<?php echo esc_url(home_url('/ma-strategy')); ?>" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon03.webp")); ?>" alt="" loading="lazy" decoding="async">
            </div>
            <p class="services-card__title">M&A戦略・組織再編</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="" loading="lazy" decoding="async">
            </div>
          </a>
        </li>
        <li class="services__item">
          <a href="<?php echo esc_url(home_url('/bdd-pmi')); ?>" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon04.webp")); ?>" alt="" loading="lazy" decoding="async">
            </div>
            <p class="services-card__title">各種デューディリ<br>ジェンス・PMI</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="" loading="lazy" decoding="async">
            </div>
          </a>
        </li>
        <li class="services__item">
          <a href="<?php echo esc_url(home_url('/biz-dev')); ?>" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon05.webp")); ?>" alt="" loading="lazy" decoding="async">
            </div>
            <p class="services-card__title">新規事業開発</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="" loading="lazy" decoding="async">
            </div>
          </a>
        </li>
        <li class="services__item">
          <a href="<?php echo esc_url(home_url('/human-capital')); ?>" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon06.webp")); ?>" alt="" loading="lazy" decoding="async">
            </div>
            <p class="services-card__title">人的資本経営・組織開発</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="" loading="lazy" decoding="async">
            </div>
          </a>
        </li>
        <li class="services__item">
          <a href="<?php echo esc_url(home_url('/governance')); ?>" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon07.webp")); ?>" alt="" loading="lazy" decoding="async">
            </div>
            <p class="services-card__title">経営管理体制高度化</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="" loading="lazy" decoding="async">
            </div>
          </a>
        </li>
        <li class="services__item">
          <a href="<?php echo esc_url(home_url('/equity-advisory')); ?>" class="services__card services-card">
            <div class="services-card__icon">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/services-card-icon08.webp")); ?>" alt="" loading="lazy" decoding="async">
            </div>
            <p class="services-card__title">エクイティアドバイザリー</p>
            <div class="services-card__arrow">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/service-card-arrow.svg")); ?>" alt="" loading="lazy" decoding="async">
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <!-- Value Proposition -->
  <section class="value-proposition">
    <div class="value-proposition__inner inner">
      <hgroup class="heading value-proposition__heading js-fade__upTrigger">
        <h2 class="heading__title">value proposition</h2>
        <p class="heading__subtitle">提供価値</p>
      </hgroup>
      <div class="value-proposition__container js-fade__upTrigger">
        <figure class="value-proposition__image">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/our-strength-image.webp")); ?>" alt="ビジネスミーティングの様子" loading="lazy" decoding="async">
        </figure>
        <div class="value-proposition__contents">
          <ul class="value-proposition__list">
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

  <!-- Cases -->
  <section class="cases">
    <div class="cases__inner inner">
      <div class="cases__head js-fade__upTrigger">
        <hgroup class="heading heading--left cases__title">
          <h2 class="heading__title">cases</h2>
          <p class="heading__subtitle">実績紹介</p>
        </hgroup>
        <div class="cases__button u-desktop">
          <a href="<?php echo esc_url(home_url('/cases')); ?>" class="button">View more<span class="button__arrow"></span></a>
        </div>
      </div>
      <div class="cases__container">
        <ul class="cases__list js-fade__upTrigger">
          <?php
          $cases_query = new WP_Query([
            'post_type' => 'cases',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'DESC',
          ]);
          if ($cases_query->have_posts()) :
            while ($cases_query->have_posts()) : $cases_query->the_post();
          ?>
          <li class="cases__item case-card">
            <p class="case-card__title"><?php the_title(); ?></p>
            <div class="case-card__description"><?php the_content(); ?></div>
            <div class="case-card__bottom">
              <div class="case-card__categories">
              <?php
              $taxonomy_terms = get_the_terms($post->ID, 'cases-category');
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
        <div class="cases__button u-mobile">
          <a href="<?php echo esc_url(home_url('/cases')); ?>" class="button">View more<span class="button__arrow"></span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- News -->
  <section class="news js-fade__upTrigger">
    <div class="news__inner inner">
      <div class="news__container">
        <div class="news__left">
          <hgroup class="heading heading--left">
            <h2 class="heading__title">news</h2>
            <p class="heading__subtitle">ニュース</p>
          </hgroup>
          <div class="news__button u-desktop">
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
        <div class="news__button u-mobile">
          <a href="<?php echo esc_url(home_url('/news')); ?>" class="button">お知らせ一覧<span class="button__arrow"></span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <?php get_template_part('parts/contact'); ?>
</main>
<?php get_footer(); ?>