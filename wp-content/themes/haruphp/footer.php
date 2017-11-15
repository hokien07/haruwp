<footer>
    <div class="links-bar">
        <div class="row">
    <div class="one-third-box">
        <p><a href="<?php echo bloginfo('url') ?>/about">About</a></p>
        <ul>
            <li><a href="<?php echo bloginfo('url') ?>/people">Our Milestones</a></li>
            <li><a href="<?php echo bloginfo('url') ?>/about">Our Strategy</a></li>
            <li><a href="<?php echo bloginfo('url') ?>/about">Brand Accolades</a></li>
        </ul>
    </div>
    
    <div class="one-third-box">
        <p><a href="<?php echo bloginfo('url') ?>/investor">Investor</a></p>
        <p><a href="<?php echo bloginfo('url') ?>/partnership">Partnership</a></p>
        <ul>
            <li><a href="<?php echo bloginfo('url') ?>/career">Apply Now</a></li>
        </ul>
    </div>
    
    <div class="one-third-box">
        <p><a href="<?php echo bloginfo('url') ?>/people">Community</a></p>
        <p><a href="<?php echo bloginfo('url') ?>/career">Career</a></p>
        <p><a href="<?php echo bloginfo('url') ?>/contact">Contact</a></p>
    </div>
</div>
    </div>
    <div class="brands-bar">
        <p><strong>Our Brands</strong></p>
			<a href="http://www.breadtalk.com.sg/" target="_blank">BreadTalk</a>
			<a href="http://www.foodrepublic.com.sg/" target="_blank">Food Republic</a>
			<a href="http://www.toastbox.com.sg/" target="_blank">Toast Box</a>
			<a href="https://www.facebook.com/SoRamenSG/" target="_blank">Sō</a>
			<a href="http://www.dintaifung.com.sg/" target="_blank">Din Tai Fung</a>
			<a href="http://www.theicingroom.com.sg/" target="_blank">The Icing Room</a>
			<a href="http://www.thyemohchan.com/" target="_blank">Thye Moh Chan</a>
			<a href="http://www.breadsociety.com.sg/" target="_blank">Bread Society</a>
			<a href="http://www.carlsjr.com.cn/" target="_blank">Carl's Jr.</a>
    </div>
    <div class="copyright-bar">
        <p>
          <?php echo check_text_isset($hk_options['copyright-text'], 'Copyright &copy; 2017 BreadTalk Group Limited. All Rights Reserved.'); ?>
        </p>
        <p><a href="<?php chuyen_den_trang('index.php'); ?>" target="_blank">Privacy Policy</a></p>
    </div>
</footer>

<!--Google Analytics Script Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-17086125-13', 'auto');
  ga('send', 'pageview');

</script>


<!--Plugin Javascript code of theme-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>

<?php 
  if(is_page('people') || is_page('investor')) {
    echo '<script src="'. get_template_directory_uri() .'/js/isotope.pkgd.min.js"></script>';
  }
?>


<?php 
  if(is_home()) {
    
    include('js/index_js_plugin.js');
  }

  if(is_page('career')) {
    include('js/career_js_plugin.js');
  }

  if(is_page('people') || is_page('investor')) {
    include('js/people_js_plugin.js'); 
  }
?>

<?php wp_footer(); ?>
</body>
</html>