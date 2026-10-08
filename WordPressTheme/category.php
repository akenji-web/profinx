<?php
  // カスタムクエリの前に、メインクエリを調整
  global $wp_query;
  $wp_query->query_vars['posts_per_page'] = 10;
  get_header();
?>
<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-news_sp.jpg")); ?>" media="(max-width: 767px)">
      <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-news_pc.webp")); ?>" alt="ニュースのメイン画像">
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
      <h1 class="sub-mv__title">ニュース</h1>
      <p class="sub-mv__subtitle">news</p>
    </hgroup>
  </div>

  <!-- ニュース一覧（カテゴリページ） -->
  <div id="archive-news" class="archive-layout js-fade__upTrigger">
    <div class="inner archive-layout__inner">
      <div class="archive-layout__container">
        <div class="archive-layout__main">
          <div class="sub-news">
            <?php
              // 現在いるページのクエリ対象オブジェクトを取得
              $queried_object = get_queried_object();
              $current_term_id = is_a($queried_object, 'WP_Term') ? $queried_object->term_id : 0;
              $current_heading = (is_a($queried_object, 'WP_Term') && ! empty($queried_object->name))
                ? $queried_object->name
                : 'ニュース一覧';
            ?>
            <h2 class="sub-news__heading sub-heading"><?php echo esc_html($current_heading); ?></h2>
            <div class="sub-news__container">
              <ul class="sub-news__list">
                <?php if (have_posts()) : ?>
                  <?php while (have_posts()) : the_post(); ?>
                  <li class="sub-news__item">
                    <a href="<?php the_permalink(); ?>">
                      <div class="sub-news__top">
                        <p class="sub-news__date">
                          <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                        </p>
                        <div class="sub-news__categories">
                        <?php
                          $terms = get_the_terms($post->ID, 'category');
                          if ($terms && ! is_wp_error($terms)) {
                            foreach ($terms as $term) {
                              echo '<p class="sub-news__category">' . esc_html($term->name) . '</p>';
                            }
                          }
                        ?>
                        </div>
                      </div>
                      <h3 class="sub-news__title"><?php the_title(); ?></h3>
                    </a>
                  </li>
                  <?php endwhile; ?>
                <?php else : ?>
                  <p>記事が投稿されていません</p>
                <?php endif; ?>
              </ul>

              <!-- ページネーション -->
              <div class="pagination top-pagination">
                <?php
                  if (function_exists('wp_pagenavi')) {
                    wp_pagenavi();
                  }
                ?>
              </div>
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
                'taxonomy' => 'category',
                'hide_empty' => true, // 未使用カテゴリを非表示にする
              ]);

              // ニュース一覧ページへのURL
              $home_link = sprintf(
                '<li class="category__item"><a href="%s">全て</a></li>',
                esc_url(home_url('/news'))
              );
              echo $home_link;

              // タームのリンク
              if ($terms && ! is_wp_error($terms)) {
                $current_term_id = get_queried_object_id();
                foreach ($terms as $term) {
                  $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';

                  if ($current_term_id === $term->term_id) {
                    $term_link = sprintf(
                      '<li class="category__item"><span class="%s">%s</span></li>',
                      esc_attr($term_class),
                      esc_html($term->name)
                    );
                  } else {
                    $term_link = sprintf(
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