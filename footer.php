<!--
Created by tomino on 18/04/22.

-->
<section>
  <nav class="footer-container">
      <div class="footer-company-info">
          <div class="logo">
              <img class="footer-img" src="http://localhost:8888/wordpress/wp-content/uploads/2018/04/logo_03.png"/>
          </div>
      </div>
      <div class="footer-flex">
       <?php wp_nav_menu( array ( 'theme_location' => 'footer-navi' ) );?>
       <div class="company-info">
         <span>〒101-0021</span>
         <span>TEL:03-5807-1728</span>
         <span>東京都千代田区<br>外神田5丁目6番14号<br>秋葉原KDビル6F</span>
     </div>
     </div>
     <div class="copyright">
       <span>Copyright(C) 2007-<?php the_time(Y)?> Alveare Co.,Ltd. All rights Reserved.</span>
     </div>
  </nav>
</section>
<?php wp_footer(); ?>
</body>
</html>
