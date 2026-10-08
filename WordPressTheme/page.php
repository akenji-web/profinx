<?php get_header(); ?>
<main>
  <?php
    $page_slug = get_post_field('post_name', get_queried_object_id());
    $mv_target_slugs = array(
      'diagnosis',
      'mid-term-plan',
      'ma-strategy',
      'bdd-pmi',
      'biz-dev',
      'human-capital',
      'governance',
      'equity-advisory',
    );
    $mv_slug = in_array($page_slug, $mv_target_slugs, true) ? $page_slug : 'mid-term-plan';
    $mv_sp_image = get_theme_file_uri("/assets/images/sub-mv-{$mv_slug}_sp.webp");
    $mv_pc_image = get_theme_file_uri("/assets/images/sub-mv-{$mv_slug}_pc.webp");
  ?>
  <!-- メインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo esc_url($mv_sp_image); ?>" media="(max-width: 600px)">
      <img src="<?php echo esc_url($mv_pc_image); ?>" alt="<?php echo esc_attr(get_the_title() . 'のメイン画像'); ?>">
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
    <div class="sub-mv__text-area">
      <h1 class="sub-mv__title"><?php echo esc_html(get_the_title()); ?></h1>
    </div>
  </div>

  <div>
    <?php the_content(); ?>
  </div>

  <!-- Contact -->
  <?php get_template_part('parts/contact'); ?>
</main>
<?php get_footer(); ?>
