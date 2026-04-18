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
  <div class="sub-contact">
    <div class="sub-contact__inner sub-inner">
      <div class="sub-contact__container">
        <?php echo do_shortcode('[contact-form-7 id="3668020" title="採用"]'); ?>
        <!-- <form class="sub-contact__form contact-form" action="#" method="POST">
          <ul class="contact-form__items">
            <li class="contact-form__item">
              <p class="contact-form__label">お名前<span>必須</span></p>
              <div class="contact-form__input"><input type="text" id="recruit-name" name="your-name" required></div>
            </li>
            <li class="contact-form__item">
              <p class="contact-form__label">フリガナ<span>必須</span></p>
              <div class="contact-form__input"><input type="text" id="recruit-furigana" name="your-furigana" required></div>
            </li>
            <li class="contact-form__item">
              <p class="contact-form__label">生年月日<span>必須</span></p>
              <div class="contact-form__input contact-form__input-date"><input type="date" id="recruit-birthdate" name="your-birthdate" required></div>
            </li>
            <li class="contact-form__item">
              <p class="contact-form__label">電話番号<span>必須</span></p>
              <div class="contact-form__input"><input type="tel" id="recruit-tel" name="your-tel" required></div>
            </li>
            <li class="contact-form__item">
              <p class="contact-form__label">メールアドレス<span>必須</span></p>
              <div class="contact-form__input"><input type="email" id="recruit-email" name="your-email" required></div>
            </li>
            <li class="contact-form__item">
              <p class="contact-form__label">職務経歴<span>必須</span></p>
              <div class="contact-form__input"><textarea id="recruit-career" name="your-career" required></textarea></div>
            </li>
            <li class="contact-form__item">
              <p class="contact-form__label">最終学歴<span>必須</span></p>
              <div class="contact-form__input"><input type="text" id="recruit-education" name="your-education" required></div>
            </li>
            <li class="contact-form__item">
              <p class="contact-form__label">保有資格<span>必須</span></p>
              <div class="contact-form__input"><input type="text" id="recruit-qualifications" name="your-qualifications" required></div>
            </li>
            <li class="contact-form__item">
              <p class="contact-form__label">自己PR</p>
              <div class="contact-form__input"><textarea id="recruit-pr" name="your-pr"></textarea></div>
            </li>
          </ul>
          <div class="contact-form__button">
            <button type="submit" class="button button--form">送信</button>
          </div>
        </form> -->
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