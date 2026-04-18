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

  <!-- インサイト詳細 -->
  <div class="insight-detail">
    <div class="insight-detail__inner sub-inner">
      <div class="insight-detail__container">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="insight-detail__head">
              <time class="insight-detail__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
              <h1 class="insight-detail__title"><?php the_title(); ?></h1>
              <figure class="insight-detail__image">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async">
                <?php else : ?>
                  <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/noimage.jpg" )); ?>)" alt="NoImage画像" loading="lazy" decoding="async">
                <?php endif ; ?>
              </figure>
            </div>
            <div class="insight-detail__content">
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