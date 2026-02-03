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

  <div class="sub-news">
    <div class="sub-news__inner inner">
      <h2 class="sub-news__heading sub-heading">ニュース一覧</h2>
      <div class="sub-news__container">
        <ul class="sub-news__list">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <li class="sub-news__item">
              <a href="<?php the_permalink(); ?>">
                <p class="sub-news__date"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time></p>
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
</main>
<?php get_footer(); ?>