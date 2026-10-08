<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-recruit_sp.webp")); ?>" media="(max-width: 600px)">
      <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-recruit_pc.webp")); ?>" alt="採用のメイン画像">
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
      <h1 class="sub-mv__title">採用</h1>
      <p class="sub-mv__subtitle">recruit</p>
    </hgroup>
  </div>

  <!-- お問い合わせフォーム -->
  <div class="sub-contact js-fade__upTrigger">
    <div class="sub-contact__inner sub-inner">
      <div class="sub-contact__container">
        <?php echo do_shortcode('[contact-form-7 id="3668020" title="採用"]'); ?>
      </div>
      <p class="sub-recruit__recapcha recapcha-text">このサイトはreCAPTCHAによって保護されており、Googleの
        <a href="https://policies.google.com/privacy" target="_blank">プライバシーポリシー</a> と
        <a href="https://policies.google.com/terms" target="_blank">利用規約</a> が適用されます。
      </p>
    </div>
  </div>

  <!-- Contact -->
  <?php get_template_part('parts/contact'); ?>
</main>
<?php get_footer(); ?>