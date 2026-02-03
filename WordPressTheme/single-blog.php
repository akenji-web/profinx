<?php
  // カスタムクエリの前に、メインクエリを調整
  global $wp_query;
  $wp_query->query_vars['posts_per_page'] = 10;
  get_header();
?>
<main>
  <!-- メインビュー -->
 

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb'); ?>

  <div class="blog-layout">
    <div class="blog-layout__inner inner">
      <!-- 投稿詳細 -->
      <div class="blog-layout__container">
        <div class="blog-layout__main blog-detail">

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="blog-detail__head">
                <time class="blog-detail__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                <h1 class="blog-detail__title"><?php the_title(); ?></h1>
                <figure class="blog-detail__image">
                  <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async">
                  <?php else : ?>
                    <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/noimage.jpg" )); ?>)" alt="NoImage画像" loading="lazy" decoding="async">
                  <?php endif ; ?>
                </figure>
              </div>
              <div class="blog-detail__content">
                <?php the_content(); ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          
          <!-- ページネーション -->
          <div class="pagination top-pagination pagination--no-number">
          <?php
            // 前の記事へのリンク
            $prev_link = get_previous_post_link('<div class="pagination__item">%link</div>', '<span class="pagination__prev"></span>');
            if (!empty($prev_link)) {
                echo $prev_link;
            }

            // 次の記事へのリンク
            $next_link = get_next_post_link('<div class="pagination__item">%link</div>', '<span class="pagination__next"></span>');
            if (!empty($next_link)) {
                echo $next_link;
            }
          ?>
          </div>
        </div>

        <!-- サイドバー -->
        <aside class="blog-layout__sidebar blog-layout__sidebar--single sidebar">
          <div class="sidebar__section category">
            <p class="category__title">カテゴリー</p>
            <ul class="category__list">

            <?php
              $terms = get_terms([
                // 表示するタクソノミースラッグを記述
                'taxonomy' => 'blog-category',
                'orderby' => 'name',
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
</main>
<?php get_footer(); ?>