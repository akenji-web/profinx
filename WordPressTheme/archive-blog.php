<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-blog_sp.webp")); ?>" media="(max-width: 600px)">
      <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-blog_pc.webp")); ?>" alt="ブログのメイン画像">
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
      <h1 class="sub-mv__title">ブログ</h1>
      <p class="sub-mv__subtitle">blog</p>
    </hgroup>
  </div>

  <!-- ブログ一覧 -->
  <div id="archive-blog" class="blog-layout">
    <div class="inner blog-layout__inner">
      <div class="blog-layout__container">
        <div class="blog-layout__main archive-blog">
          <?php
            // 現在いるページのクエリ対象オブジェクトを取得
            $queried_object = get_queried_object();
            $current_term_id = is_a($queried_object, 'WP_Term') ? $queried_object->term_id : 0;
            $current_heading = (is_a($queried_object, 'WP_Term') && ! empty($queried_object->name))
              ? $queried_object->name
              : 'ブログ一覧';
          ?>
          <h2 class="archive-blog__heading sub-heading"><?php echo esc_html($current_heading); ?></h2>
          <div class="archive-blog__container">
            <div class="archive-blog__cards blog-cards">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                  <?php if (has_post_thumbnail()) : ?>
                    <img class="blog-card__image" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async">
                  <?php else : ?>
                    <img class="blog-card__image" src="<?php echo esc_url(get_theme_file_uri( "/assets/images/noimage.jpg" )); ?>)" alt="NoImage画像" />
                  <?php endif; ?>
                  <div class="blog-card__content">
                    <p class="blog-card__title"><?php the_title(); ?></p>
                    <div class="blog-card__bottom">
                      <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                      <div class="blog-card__categories">
                      <?php
                      $taxonomy_terms = get_the_terms($post->ID, 'blog-category');
                      if ( ! empty( $taxonomy_terms ) ) {
                        foreach( $taxonomy_terms as $taxonomy_term ) {
                          echo '<p class="blog-card__category">' . esc_html( $taxonomy_term->name ) . '</p>';
                        }
                      }
                      ?>
                      </div>
                    </div>
                  </div>
                </a>
                <?php endwhile; ?>
              <?php else : ?>
                <p>記事が投稿されていません</p>
              <?php endif; ?>
            </div><!-- blog-cards -->

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
        <aside class="blog-layout__sidebar sidebar">
          <div class="sidebar__section category">
            <p class="category__title">カテゴリー</p>
            <ul class="category__list">

            <?php
              $terms = get_terms([
                // 表示するタクソノミースラッグを記述
                'taxonomy' => 'blog-category',
                'orderby' => 'slug',
                'order'   => 'ASC',
              ]);

              // カスタム投稿一覧ページへのURL
              if (is_post_type_archive('blog')) {
                $home_link = sprintf(
                  '<li class="category__item"><span class="is-active">全て</span></li>'
                );
              } else {
                $home_link = sprintf(
                  // カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
                  '<li class="category__item"><a href="%s">全て</a></li>',
                  // カスタム投稿一覧ページのスラッグを指定
                  esc_url(home_url('/blog'))
                );
              }
              echo $home_link;

              // タームのリンク
              if ($terms) {
                foreach ($terms as $term) {
                  // 現在いるページのタームのIDを取得
                  $current_term_id = get_queried_object_id();
                  $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';

                  if ($current_term_id === $term->term_id && ! is_post_type_archive()) {
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