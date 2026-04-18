<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-case-study_sp.jpg")); ?>" media="(max-width: 767px)">
      <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-case-study_pc.webp")); ?>" alt="実績紹介のメイン画像">
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
    <hgroup class="sub-mv__text-area">
      <h1 class="sub-mv__title">実績紹介</h1>
      <p class="sub-mv__subtitle">cases</p>
    </hgroup>
  </div>

  <!-- 企業ロゴ -->
  <div class="company-logo">
    <div class="swiper js-company-logo-swiper">
      <?php
        $args = array(
          'post_type'      => 'company-logo',
          'posts_per_page' => -1,
          'orderby'        => 'menu_order',
          'order'          => 'ASC',
          'post_status'    => 'publish',
        );
        $logo_query = new WP_Query($args);
      ?>

      <?php if ($logo_query->have_posts()) : ?>
      <ul class="swiper-wrapper company-logo__list">
        <?php while ($logo_query->have_posts()) : $logo_query->the_post(); ?>
        <li class="swiper-slide company-logo__slide">
          <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
          <?php else : ?>
            <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/noimage.jpg" )); ?>)" alt="NoImage画像" />
          <?php endif; ?>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>

  <!-- 実績紹介 -->
  <div id="archive-case" class="archive-layout">
    <div class="inner archive-layout__inner">
      <div class="archive-layout__container">
        <div class="archive-layout__main archive-case">
          <?php
            // 現在いるページのクエリ対象オブジェクトを取得
            $queried_object = get_queried_object();
            $current_term_id = is_a($queried_object, 'WP_Term') ? $queried_object->term_id : 0;
            $current_heading = (is_a($queried_object, 'WP_Term') && ! empty($queried_object->name))
              ? $queried_object->name
              : '実績紹介';
          ?>
          <h2 class="archive-case__heading sub-heading"><?php echo esc_html($current_heading); ?></h2>
          <div class="archive-case__container">
            <div class="archive-case__cards case-cards">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="case-cards__item case-card">
                  <p class="case-card__title"><?php the_title(); ?></p>
                  <p class="case-card__description"><?php the_field('description'); ?></p>
                  <div class="case-card__bottom">
                    <div class="case-card__categories">
                    <?php
                    $taxonomy_terms = get_the_terms(get_the_ID(), 'cases-category');
                    if ( ! empty($taxonomy_terms) && ! is_wp_error($taxonomy_terms) ) {
                      foreach ( $taxonomy_terms as $taxonomy_term ) {
                        $term_link = get_term_link($taxonomy_term);
                        if ( ! is_wp_error($term_link) ) {
                          echo '<a class="case-card__category" href="' . esc_url($term_link) . '">' . esc_html($taxonomy_term->name) . '</a>';
                        }
                      }
                    }
                    ?>
                    </div>
                  </div>
                </div>
                <?php endwhile; ?>
              <?php else : ?>
                <p>記事が投稿されていません</p>
              <?php endif; ?>
            </div><!-- case-cards -->

            <!-- ページネーション -->
            <div class="top-pagination">
              <?php
                if (function_exists('wp_pagenavi')) {
                  wp_pagenavi();
                }
              ?>
            </div>
          </div>
        </div>
    
        <!-- サイドバー -->
        <aside class="archive-layout__sidebar sidebar">
          <div class="sidebar__section category">
            <p class="category__title">実績</p>
            <ul class="category__list">

            <?php
              $terms = get_terms([
                // 表示するタクソノミースラッグを記述
                'taxonomy' => 'cases-category',
                'orderby' => 'slug',
                'order'   => 'ASC',
              ]);

              // カスタム投稿一覧ページへのURL
              $home_class = (is_post_type_archive()) ? 'is-active' : '';
              $home_link = sprintf(
                //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
                '<li class="category__item"><a class="%s" href="%s">全て</a></li>',
                esc_attr($home_class),
                // カスタム投稿一覧ページのスラッグを指定
                esc_url(home_url('/cases'))
              );
              echo $home_link;

              // タームのリンク
              if ($terms) {
                foreach ($terms as $term) {
                  // 現在いるページのタームのIDを取得
                  $current_term_id = get_queried_object()->term_id;
                  // カレントクラスに付与するクラスを指定できる
                  $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';

                  if ($current_term_id === $term->term_id) {
                    $term_link = sprintf(
                      '<li class="category__item"><span class="%s">%s</span></li>',
                      esc_attr($term_class),
                      esc_html($term->name)
                    );
                  } else {
                    $term_link = sprintf(
                      // 各タームに付与するクラスを指定できる
                      '<li class="category__item"><a class="%s" href="%s">%s</a></li>',
                      esc_attr($term_class),
                      esc_url(get_term_link($term)),
                      esc_html($term->name)
                    );
                  }

                  echo $term_link;
                }
              }
            ?>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>

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