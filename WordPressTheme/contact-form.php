<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-contact_sp.webp")); ?>" media="(max-width: 767px)">
      <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-contact_pc.webp")); ?>" alt="実績紹介のメイン画像">
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
      <h1 class="sub-mv__title">お問い合わせ</h1>
      <p class="sub-mv__subtitle">contact</p>
    </hgroup>
  </div>

  <!-- お問い合わせフォーム -->
  <div class="sub-contact">
    <div class="sub-contact__inner sub-inner">
      <div class="sub-contact__container">
        <!-- <ul class="contact-form__items">
        <li class="contact-form__item">
        <p class="contact-form__label">会社名<span>必須</span></p>
        <div class="contact-form__input">[text* your-company]</div>
        </li>
        <li class="contact-form__item">
        <p class="contact-form__label">部署名<span>必須</span></p>
        <div class="contact-form__input">[text* your-department]</div>
        </li>
        <li class="contact-form__item">
        <p class="contact-form__label">役職<span>必須</span></p>
        <div class="contact-form__input">[text* your-position]</div>
        </li>
        <li class="contact-form__item">
        <p class="contact-form__label">お名前<span>必須</span></p>
        <div class="contact-form__input">[text* your-name]</div>
        </li>
        <li class="contact-form__item">
        <p class="contact-form__label">電話番号<span>必須</span></p>
        <div class="contact-form__input">[tel* your-tel]</div>
        </li>
        <li class="contact-form__item">
        <p class="contact-form__label">メールアドレス<span>必須</span></p>
        <div class="contact-form__input">[email* your-email]</div>
        </li>
        <li class="contact-form__item">
        <p class="contact-form__label">お問い合わせ内容<span>必須</span></p>
        <div class="contact-form__input">[textarea* your-message]</div>
        </li>
        </ul>
        <div class="contact-form__button">[submit class:button class:button--form "送信"]</div> -->
      </div>
    </div>
  </div>

  <!-- Contact -->
  <?php get_template_part('parts/contact'); ?>
</main>
<?php get_footer(); ?>