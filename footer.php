<footer class="footer">
      <div class="footer__links">
      <div class="footer__links__keywords">
          <h5>Servicios</h5>
          <?php 
            $args = array(
              'theme_location' => 'keywords-menu',
              'container' => 'nav',
              'container_class' => '' 
            );
          ?>
        </div>
        <div class="footer__links__menu">
          <h5>Data Futbol</h5>
          <?php
            $args = array(
              'theme_location' => 'footer-menu',
              'container' => 'nav',
              'container_class' => ''
             );
            wp_nav_menu($args);
          ?>
        </div>


        <div class="footer__links__social">
          <h5>Siguenos</h5>
          <?php 
            $args =array(
              'theme_location' => 'social-menu',
              'container' => 'nav',
              'before' => '<i class="fab"></i> '
            );
            wp_nav_menu($args);
          ?>
          </div>


        <div class="footer__links__contacto">
          <h5>Escribenos</h5>
            <p>hola@datafutbol.club</p>
        </div>
        <div class="header__logo footer__logo"><a href="<?php echo site_url(); ?>"><img src="<?php $url = home_url()."/wp-content/themes/DataFutbol/img/dataFutbol-3.png" ; echo esc_url( $url ); ?> " alt="Logo"></a></div>
      </div>
      <div class="footer__copyrigth">
        <p>Derechos Reservados &#169 <?php echo date('Y'); ?> <br> <span> Code + Design By <a href="">AdanUriPlata</a></span></p>
      </div>
    </footer>
  </div> 
  <?php wp_footer(); ?>