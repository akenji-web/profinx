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

  <div class="news-detail">
    <div class="news-detail__inner inner">
      <!-- 投稿詳細 -->
      <div class="news-detail__container">

        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="news-detail__head">
              <time class="news-detail__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
              <h1 class="news-detail__title"><?php the_title(); ?></h1>
              <figure class="news-detail__image">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async">
                <?php endif ; ?>
              </figure>
            </div>
            <div class="news-detail__content">
              <?php the_content(); ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

        <!-- ページネーション -->
        <div class="pagination top-pagination">
          <?php
            // 前の記事へのリンク
            $prev_link = get_previous_post_link('<div class="pagination__item">%link</div>', '«');
            if (!empty($prev_link)) {
                echo $prev_link;
            }

            // 次の記事へのリンク
            $next_link = get_next_post_link('<div class="pagination__item">%link</div>', '»');
            if (!empty($next_link)) {
                echo $next_link;
            }
          ?>
        </div>

      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>