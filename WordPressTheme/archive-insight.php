<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-blog_sp.webp")); ?>" media="(max-width: 600px)">
      <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-blog_pc.webp")); ?>" alt="インサイトのメイン画像">
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
      <h1 class="sub-mv__title">インサイト</h1>
      <p class="sub-mv__subtitle">insight</p>
    </hgroup>
  </div>

  <!-- インサイト一覧 -->
  <div id="archive-insight" class="archive-layout js-fade__upTrigger">
    <div class="inner archive-layout__inner">
      <div class="archive-layout__container">
        <div class="archive-layout__main archive-insight">
          <?php
            // 現在いるページのクエリ対象オブジェクトを取得
            $queried_object = get_queried_object();
            $current_term_id = is_a($queried_object, 'WP_Term') ? $queried_object->term_id : 0;
            $current_heading = (is_a($queried_object, 'WP_Term') && ! empty($queried_object->name))
              ? $queried_object->name
              : 'インサイト一覧';
          ?>
          <h2 class="archive-insight__heading sub-heading"><?php echo esc_html($current_heading); ?></h2>
          <div class="archive-insight__container">
            <div class="archive-insight__cards insight-cards">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="insight-cards__item insight-card">
                  <?php if (has_post_thumbnail()) : ?>
                    <img class="insight-card__image" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async">
                  <?php else : ?>
                    <img class="insight-card__image" src="<?php echo esc_url(get_theme_file_uri( "/assets/images/noimage.jpg" )); ?>)" alt="NoImage画像" />
                  <?php endif; ?>
                  <div class="insight-card__content">
                    <p class="insight-card__title"><?php the_title(); ?></p>
                    <div class="insight-card__bottom">
                      <time class="insight-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                      <div class="insight-card__categories">
                      <?php
                      $taxonomy_terms = get_the_terms($post->ID, 'insight-category');
                      if ( ! empty( $taxonomy_terms ) ) {
                        foreach( $taxonomy_terms as $taxonomy_term ) {
                          echo '<p class="insight-card__category">' . esc_html( $taxonomy_term->name ) . '</p>';
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
            </div><!-- insight-cards -->

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
            <p class="category__title">カテゴリ</p>
            <ul class="category__list">

            <?php
              $terms = get_terms([
                // 表示するタクソノミースラッグを記述
                'taxonomy' => 'insight-category',
                'hide_empty' => true, // 未使用カテゴリを非表示にする
              ]);

              // カスタム投稿一覧ページへのURL
              if (is_post_type_archive('insight')) {
                $home_link = sprintf(
                  '<li class="category__item"><span class="is-active">全て</span></li>'
                );
              } else {
                $home_link = sprintf(
                  // カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
                  '<li class="category__item"><a href="%s">全て</a></li>',
                  // カスタム投稿一覧ページのスラッグを指定
                  esc_url(home_url('/insight'))
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
  <?php get_template_part('parts/contact'); ?>
</main>
<?php get_footer(); ?>