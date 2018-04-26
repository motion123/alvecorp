
<!--
Created by tomino on 18/04/22.

-->
<section>
  <nav class="footer-container">
      <div class="footer-company-info">
          <div class="logo">
              <img src="http://localhost/wp-content/uploads/2018/04/logo.gif"/>
          </div>
      </div>
       <?php wp_nav_menu( array ( 'theme_location' => 'footer-navi' ) );?>
  </nav>
</section>
<?php if ( is_singular() ) wp_enqueue_script( "my_scripts_method" ); ?>
<?php if ( is_singular() ) wp_enqueue_script( "scrollMonitor_scripts_method"); ?>
<?php wp_footer(); ?>
</body>
</html>