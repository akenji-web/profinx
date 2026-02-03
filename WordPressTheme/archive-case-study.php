<?php get_header(); ?>
<main>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb'); ?>

  <!-- 実績紹介 -->
  <div id="archive-case" class="blog-layout">
    <div class="inner blog-layout__inner">
      <div class="blog-layout__container">
        <div class="blog-layout__main archive-case">
          <h2 class="archive-case__heading sub-heading">実績紹介</h2>
          <div class="archive-case__container">
            <?php
              // 現在いるページのクエリ対象オブジェクトを取得
              $queried_object = get_queried_object();
              $current_term_id = is_a($queried_object, 'WP_Term') ? $queried_object->term_id : 0;
              $current_heading = (is_a($queried_object, 'WP_Term') && ! empty($queried_object->name))
                ? $queried_object->name
                : '最近の実績';
            ?>
            <h3 class="archive-case__title"><?php echo esc_html($current_heading); ?></h3>
            <div class="archive-case__cards case-cards">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="case-cards__item case-card">
                  <p class="case-card__title"><?php the_title(); ?></p>
                  <p class="case-card__description"><?php the_field('description'); ?></p>
                  <div class="case-card__bottom">
                    <time class="case-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                    <?php
                    $taxonomy_terms = get_the_terms($post->ID, 'case-study-category');
                    if ( ! empty( $taxonomy_terms ) ) {
                      foreach( $taxonomy_terms as $taxonomy_term ) {
                        echo '<p class="case-card__category">' . esc_html( $taxonomy_term->name ) . '</p>';
                      }
                    }
                  ?>
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
        <aside class="blog-layout__sidebar sidebar">
          <div class="sidebar__section category">
            <p class="category__title">実績</p>
            <ul class="category__list">

            <?php
              $terms = get_terms([
                // 表示するタクソノミースラッグを記述
                'taxonomy' => 'case-study-category',
                'orderby' => 'name',
                'order'   => 'ASC',
              ]);

              // カスタム投稿一覧ページへのURL
              if (is_post_type_archive('case-study')) {
                $home_link = sprintf(
                  '<li class="category__item"><span class="is-active">全て</span></li>'
                );
              } else {
                $home_link = sprintf(
                  // カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
                  '<li class="category__item"><a href="%s">全て</a></li>',
                  // カスタム投稿一覧ページのスラッグを指定
                  esc_url(home_url('/case-study'))
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

</main>
<?php get_footer(); ?>