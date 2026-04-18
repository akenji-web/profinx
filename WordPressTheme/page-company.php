<?php get_header(); ?>
<main>
  <!-- メインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__image">
      <source srcset="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-company_sp.webp")); ?>" media="(max-width: 600px)">
      <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/sub-mv-company_pc.webp")); ?>" alt="企業情報のメイン画像">
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
      <h1 class="sub-mv__title">企業情報</h1>
      <p class="sub-mv__subtitle">company</p>
    </hgroup>
    <!-- アンカーナビ -->
    <nav class="sub-mv__anchor-nav anchor-nav" aria-label="ページ内ナビゲーション">
      <div class="inner">
        <ul class="anchor-nav__list">
          <li class="anchor-nav__item">
            <a href="#company-profile" class="anchor-nav__link js-anchor">会社概要</a>
          </li>
          <li class="anchor-nav__item">
            <a href="#management" class="anchor-nav__link js-anchor">マネジメント</a>
          </li>
          <li class="anchor-nav__item">
            <a href="#member" class="anchor-nav__link js-anchor">メンバー</a>
          </li>
          <li class="anchor-nav__item">
            <a href="#group" class="anchor-nav__link js-anchor">グループ</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <!-- 会社概要 -->
  <section id="company-profile" class="company-profile">
    <div class="company-profile__inner">
      <div class="company-profile__container">
        <div class="company-profile__image">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/company-profile-image.webp")); ?>" alt="オフィスビル" loading="lazy" decoding="async">
        </div>
        <div class="company-profile__content">
          <hgroup class="company-profile__heading heading heading--left">
            <h2 class="heading__title">company profile</h2>
            <p class="heading__subtitle">会社概要</p>
          </hgroup>
          <dl class="company-profile__list">
            <div class="company-profile__row">
              <dt class="company-profile__label">会社名</dt>
              <dd class="company-profile__value">プロフィンクス株式会社</dd>
            </div>
            <div class="company-profile__row">
              <dt class="company-profile__label">事業内容</dt>
              <dd class="company-profile__value">経営、会計及び財務に関するコンサルティング業務</dd>
            </div>
            <div class="company-profile__row">
              <dt class="company-profile__label">会社設立</dt>
              <dd class="company-profile__value">2025年1月7日</dd>
            </div>
            <div class="company-profile__row">
              <dt class="company-profile__label">所在地</dt>
              <dd class="company-profile__value">〒100-6035 東京都千代田区霞が関3-2-5霞が関ビルディング35階</dd>
            </div>
            <div class="company-profile__row">
              <dt class="company-profile__label">資本金</dt>
              <dd class="company-profile__value">15,000,000円</dd>
            </div>
            <div class="company-profile__row">
              <dt class="company-profile__label">取締役</dt>
              <dd class="company-profile__value">
                <ul class="company-profile__value-list">
                  <li class="company-profile__value-item">代表取締役社長　白石良彰</li>
                  <li class="company-profile__value-item">代表取締役副社長　山手剛人</li>
                  <li class="company-profile__value-item">取締役（非常勤）根岸秀明<br>（株式会社プルータス・コンサルティング取締役）</li>
                </ul>
              </dd>
            </div>
            <div class="company-profile__row">
              <dt class="company-profile__label">メンバー数</dt>
              <dd class="company-profile__value">約100名（関連会社含むグループ全体）</dd>
            </div>
            <div class="company-profile__row">
              <dt class="company-profile__label">グループ会社</dt>
              <dd class="company-profile__value">
                <ul class="company-profile__value-list">
                  <li class="company-profile__value-item">株式会社プルータス・コンサルティング（当社株主）</li>
                  <li class="company-profile__value-item">株式会社プルータス・マネジメントアドバイザリー</li>
                </ul>
              </dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </section>

  <!-- マネジメント -->
  <section id="management" class="management">
    <div class="management__inner sub-inner">
      <hgroup class="heading management__heading">
        <h2 class="heading__title">Management</h2>
        <p class="heading__subtitle">マネジメント</p>
      </hgroup>
      <div class="management__container">
        <div class="management__list">
          <div class="management__item">
            <div class="management__head">
              <p class="management__role u-desktop">代表取締役社長</p>
              <div class="management__name-area u-desktop">
                <p class="management__name-ja">白石 良彰</p>
                <p class="management__name-en">Shiraishi Yoshiaki</p>
              </div>
              <figure class="management__figure">
                <?php $image1 = get_field('management1_image'); if( !empty($image1) ): ?>
                  <img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" loading="lazy" decoding="async">
                <?php endif; ?>
                <div class="management__name-overlay u-mobile">
                  <p class="management__position">代表取締役社長</p>
                  <div class="management__name-area">
                    <p class="management__name-ja">白石 良彰</p>
                    <p class="management__name-en">Shiraishi Yoshiaki</p>
                  </div>
                </div>
              </figure>
            </div>
            <div class="management__body">
              <div class="management__text">
                <?php echo nl2br(get_field('management1_text') ?: 'EY新日本有限責任監査法人、フロンティア・マネジメント株式会社を経て、プロフィンクス株式会社を創業。フロンティア・マネジメント株式会社では戦略策定から実行支援までの経営企画室ハンズオン支援（常駐含む）、M&A戦略・事業デューデリジェンス・PMIまでのM&A戦略室支援など、クライアントCxOに寄り添い企業価値向上を伴走支援。'); ?>
              </div>
            </div>
          </div>
          <div class="management__item management__item--reverse">
            <div class="management__head">
              <p class="management__role u-desktop">代表取締役副社長</p>
              <div class="management__name-area u-desktop">
                <p class="management__name-ja">山手 剛人</p>
                <p class="management__name-en">Yamate Taketo</p>
              </div>
              <figure class="management__figure">
                <?php $image2 = get_field('management2_image'); if( !empty($image2) ): ?>
                  <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" loading="lazy" decoding="async">
                <?php endif; ?>
                <div class="management__name-overlay u-mobile">
                  <p class="management__position">代表取締役副社長</p>
                  <div class="management__name-area">
                    <p class="management__name-ja">山手 剛人</p>
                    <p class="management__name-en">Yamate Taketo</p>
                  </div>
                </div>
              </figure>
            </div>
            <div class="management__body">
              <div class="management__text">
                <?php echo nl2br(get_field('management2_text') ?: '1999年にウォーバーグ・ディロン・リード証券（現UBS証券）に入社後、2003年に最年少（当時）でシニアアナリストに就任。2010年にクレディ・スイス証券へ移籍。2017年にフロンティア・マネジメント株式会社に入社、2021年には同社企業価値戦略部長に就任。2025年に白石・今堀らとプロフィンクス株式会社を創業。'); ?>
              </div>
            </div>
          </div>
          <div class="management__item">
            <div class="management__head">
              <p class="management__role u-desktop">パートナー</p>
              <div class="management__name-area u-desktop">
                <p class="management__name-ja">今堀 元皓</p>
                <p class="management__name-en">Imahori Motohiro</p>
              </div>
              <figure class="management__figure">
                <?php $image3 = get_field('management3_image'); if( !empty($image3) ): ?>
                  <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" loading="lazy" decoding="async">
                <?php endif; ?>
                <div class="management__name-overlay u-mobile">
                  <p class="management__position">パートナー</p>
                  <div class="management__name-area">
                    <p class="management__name-ja">今堀 元皓</p>
                    <p class="management__name-en">Imahori Motohiro</p>
                  </div>
                </div>
              </figure>
            </div>
            <div class="management__body">
              <div class="management__text">
                <?php echo nl2br(get_field('management3_text') ?: '独立系コンサルティングファームにて、中長期成長戦略策定、新規事業戦略立案、財務/ビジネスデューディリジェンス、幹部育成研修、事業譲渡や債権放棄を含むターンアラウンドなど企業変革を支援。フロンティア・マネジメント株式会社の企業価値戦略部にて、事業ポートフォリオ戦略構想、M&A戦略立案やカーブアウト～PMIなど企業価値向上に従事。プロフィンクス株式会社の創業メンバーとして参画。'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- メンバー -->
  <section id="member" class="member">
    <div class="member__inner sub-inner">
      <hgroup class="heading member__heading">
        <h2 class="heading__title">member</h2>
        <p class="heading__subtitle">メンバー</p>
      </hgroup>
      <div class="member__container">
        <?php
        $member_slider_query = new WP_Query(
          array(
            'post_type'      => 'member',
            'posts_per_page' => -1,
            'order'          => 'DESC',
          )
        );
        ?>
        <?php if ($member_slider_query->have_posts()) : ?>
          <div class="member__slide">
            <div class="swiper js-member-swiper member__swiper">
              <div class="swiper-wrapper member__swiper-wrapper">
                <?php
                while ($member_slider_query->have_posts()) :
                  $member_slider_query->the_post();
                  $member_name_ja = get_field('member-name-ja');
                  $member_img_alt = $member_name_ja ? $member_name_ja : get_the_title();
                ?>
                <div class="swiper-slide member__swiper-slide">
                  <div class="member__card member-card">
                    <div class="member-card__image">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', array('alt' => esc_attr($member_img_alt), 'loading' => 'lazy', 'decoding' => 'async')); ?>
                      <?php else : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/noimage.jpg')); ?>" alt="<?php echo esc_attr($member_img_alt); ?>" loading="lazy" decoding="async">
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
                </div>
                <?php endwhile; ?>
              </div>
            </div>
            <button type="button" class="swiper-button-prev member__prev" aria-label="前のスライド"></button>
            <button type="button" class="swiper-button-next member__next" aria-label="次のスライド"></button>
          </div>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <p class="member__empty">メンバー情報はありません。</p>
        <?php endif; ?>
        <div class="member__button">
          <a href="<?php echo esc_url(home_url('/member')); ?>" class="button">一覧を見る<span class="button__arrow"></span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- グループ -->
  <section id="group" class="group">
    <div class="group__inner sub-inner">
      <hgroup class="heading group__heading">
        <h2 class="heading__title">group</h2>
        <p class="heading__subtitle">グループ</p>
      </hgroup>
      <p class="group__lead">資本市場における企業価値の向上を実現するため、グループがシームレスに連携し、<br>各種経営課題の解決に向けたソリューションを提供します。</p>
      <div class="group__container">
        <figure class="group__image">
          <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/group-image.webp")); ?>" alt="グループ構成図" loading="lazy" decoding="async">
        </figure>
        <div class="group__companies">
          <div class="group__company">
            <div class="group__company-header">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/plutus-co-logo.webp")); ?>" alt="株式会社プルータス・コンサルティング" loading="lazy" decoding="async">
            </div>
            <div class="group__company-body">
              <p class="group__company-title">株式会社プルータス・コンサルティング</p>
              <p class="group__company-desc">国内最大手の独立系評価機関として、資本政策の立案や高度な価値評価（バリュエーション）を提供しています。公正・中立な立場から、複雑なスキームの設計やガバナンス構築を支援し、企業の適正な意思決定を支えます。</p>
              <dl class="group__company-info">
                <div class="group__info-row">
                  <dt>住所：</dt>
                  <dd>〒100-6035<br>東京都千代田区霞が関三丁目2番5号 霞が関ビルディング35階</dd>
                </div>
                <div class="group__info-row">
                  <dt>TEL：</dt>
                  <dd>03-3591-8123</dd>
                </div>
                <div class="group__info-row">
                  <dt>FAX：</dt>
                  <dd>03-3591-8112</dd>
                </div>
                <div class="group__info-row">
                  <dt>事業内容：</dt>
                  <dd>・企業価値評価<br>・エクイティ関連証券等の設計/評価<br>・ファイナンシャルアドバイザリー<br>・会計処理の支援<br>・紛争における支援</dd>
                </div>
              </dl>
              <a href="https://www.plutuscon.jp/" class="group__company-link" target="_blank" rel="noopener noreferrer">企業サイトを見る</a>
            </div>
          </div>
          <div class="group__company">
            <div class="group__company-header">
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/plutus-ma-logo.webp")); ?>" alt="株式会社プルータス・マネジメントアドバイザリー" loading="lazy" decoding="async">
            </div>
            <div class="group__company-body">
              <p class="group__company-title">株式会社プルータス・マネジメントアドバイザリー</p>
              <p class="group__company-desc">M&Aにおける「ワンサイド（片側）のアドバイザー」として、クライアントの利益最大化に特化した支援を行います。評価の専門家集団から培った「価値を見極める目」を武器に、戦略立案から実行まで伴走します。</p>
              <dl class="group__company-info">
                <div class="group__info-row">
                  <dt>住所：</dt>
                  <dd>〒100-6035<br>東京都千代田区霞が関三丁目2番5号 霞が関ビルディング35階</dd>
                </div>
                <div class="group__info-row">
                  <dt>TEL：</dt>
                  <dd>03-3502-1223</dd>
                </div>
                <div class="group__info-row">
                  <dt>FAX：</dt>
                  <dd>03-3591-1314</dd>
                </div>
                <div class="group__info-row">
                  <dt>事業内容：</dt>
                  <dd>・M&Aアドバイザリー業務<br>・ソーシング支援業務<br>・財務デューディリジェンス</dd>
                </div>
              </dl>
              <a href="https://plutusmaad.jp/" class="group__company-link" target="_blank" rel="noopener noreferrer">企業サイトを見る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
