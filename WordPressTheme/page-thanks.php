<?php
get_header();
$current_page_uri = get_page_uri(get_queried_object_id());

if ('recruit/thanks' === $current_page_uri) {
  $sub_mv_sp_image = '/assets/images/sub-mv-recruit_sp.webp';
  $sub_mv_pc_image = '/assets/images/sub-mv-recruit_pc.webp';
  $sub_mv_alt = '採用のメイン画像';
  $sub_mv_title = '採用';
  $sub_mv_subtitle = 'recruit';
} else {
  $sub_mv_sp_image = '/assets/images/sub-mv-contact_sp.webp';
  $sub_mv_pc_image = '/assets/images/sub-mv-contact_pc.webp';
  $sub_mv_alt = 'お問い合わせのメイン画像';
  $sub_mv_title = 'お問い合わせ';
  $sub_mv_subtitle = 'contact';
}
?>
<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri($sub_mv_sp_image)); ?>" media="(max-width: 600px)">
      <img src="<?php echo esc_url(get_theme_file_uri($sub_mv_pc_image)); ?>" alt="<?php echo esc_attr($sub_mv_alt); ?>">
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
      <h1 class="sub-mv__title"><?php echo esc_html($sub_mv_title); ?></h1>
      <p class="sub-mv__subtitle"><?php echo esc_html($sub_mv_subtitle); ?></p>
    </hgroup>
  </div>

  <!-- サンクス -->
  <div class="thanks sub-top-main">
    <div class="thanks__inner inner back-icon">
      <div class="thanks__container">
        <p class="thanks__main-message">お問い合わせ内容を送信完了しました。</p>
        <p class="thanks__sub-message">このたびは、お問い合わせ頂き誠にありがとうございます。<br>
          お送り頂きました内容を確認の上、3営業日以内に折り返しご連絡させて頂きます。<br>
          また、ご記入頂いたメールアドレスへ、自動返信の確認メールをお送りしております。</p>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>