<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-member_sp.webp")); ?>" media="(max-width: 600px)">
      <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-member_pc.webp")); ?>" alt="メンバー紹介のメイン画像">
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