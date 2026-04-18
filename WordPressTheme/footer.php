  <footer class="footer">
    <div class="footer__inner inner">
      <div class="footer__container">
        <div class="footer__left">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.webp" alt="ProFinX">
          </a>
          <div class="footer__group">
            <h3 class="footer__group-title">グループ会社紹介</h3>
            <div class="footer__group-logos">
              <a href="https://www.plutuscon.jp/" class="footer__group-link" target="_blank" rel="noopener noreferrer">
                <img  class="footer__group-logo" src="<?php echo esc_url(get_theme_file_uri("/assets/images/plutus-co-logo.webp")); ?>" alt="プルータス・コンサルティング">
                <p class="footer__group-name">プルータス・コンサルティング</p>
              </a>
              <a href="https://plutusmaad.jp/" class="footer__group-link" target="_blank" rel="noopener noreferrer">
                <img class="footer__group-logo" src="<?php echo esc_url(get_theme_file_uri("/assets/images/plutus-ma-logo.webp")); ?>" alt="プルータス・マネジメントアドバイザリー">
                <p class="footer__group-name">プルータス・マネジメントアドバイザリー</p>
              </a>
            </div>
          </div>
        </div>
        <div class="footer__right">
          <nav class="footer__nav">
            <ul class="footer__nav-list">
              <li class="footer__nav-item">
                <a href="<?php echo esc_url(home_url('/company')); ?>" class="footer__nav-link">企業情報</a>
              </li>
              <li class="footer__nav-item">
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="footer__nav-link">サービス</a>
              </li>
              <li class="footer__nav-item">
                <a href="<?php echo esc_url(home_url('/cases')); ?>" class="footer__nav-link">実績紹介</a>
              </li>
              <li class="footer__nav-item">
                <a href="<?php echo esc_url(home_url('/news')); ?>" class="footer__nav-link">ニュース</a>
              </li>
              <li class="footer__nav-item">
                <a href="<?php echo esc_url(home_url('/insight')); ?>" class="footer__nav-link">インサイト</a>
              </li>
            </ul>
          </nav>
          <div class="footer__button-area">
            <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="footer__button footer__button--recruit">採用</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="footer__button contact-button">
              <span class="contact-button__icon"></span>お問い合わせ
            </a>
          </div>
        </div>
      </div>
      <p class="footer__copyright">Copyright &copy; ProFinX Co. All rights reserved.</p>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>

