<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-member_sp.jpg")); ?>" media="(max-width: 767px)">
      <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-member_pc.webp")); ?>" alt="実績紹介のメイン画像">
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
      <h1 class="sub-mv__title">メンバー紹介</h1>
      <p class="sub-mv__subtitle">member</p>
    </hgroup>
  </div>

  <!-- リード文 -->
  <div class="lead-copy lead-copy--bg-gray">
    <div class="inner lead-copy__inner">
      <p class="lead-copy__text">
        「高度な専門性を備えた経営人材チームの提供」と「データ経営の導入支援」によって<br>
        ​経営戦略機能/CFO機能を高度化し、経営者と共に企業価値向上を実現します。
      </p>
    </div>
  </div>

  <!-- メンバー紹介 -->
  <div id="archive-member" class="archive-member">
    <div class="inner archive-member__inner">
      <h2 class="archive-member__heading sub-heading">メンバー紹介</h2>
      <div class="archive-member__container">
        <div class="archive-member__cards member-cards">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="member-cards__item member-card">
              <div class="member-card__image">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async">
                <?php else : ?>
                  <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/noimage.jpg" )); ?>)" alt="NoImage画像" />
                <?php endif; ?>
                <div class="member-card__name-overlay">
                  <p class="member-card__position"><?php the_field('member-position'); ?></p>
                  <div class="member-card__name-area">
                    <p class="member-card__name-ja"><?php the_field('member-name-ja'); ?></p>
                    <p class="member-card__name-en"><?php the_field('member-name-en'); ?></p>
                  </div>
                </div>
              </div>
              <div class="member-card__body">
                <p class="member-card__profile"><?php the_field('member-profile'); ?></p>
              </div>
            </div>
            <?php endwhile; ?>
          <?php else : ?>
            <p>メンバー情報はありません。</p>
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
  </div>

</main>
<?php get_footer(); ?>