		</div><!-- End Main row -->
  </div><!-- Container End -->
  <footer id="content-info" role="contentinfo">
    <div class="row">
      <?php dynamic_sidebar("Footer"); ?>
    </div>
    <!--
    <div class="row">
      <div class="four columns">
        &copy; 2012<?php //echo date('Y'); ?> <?php bloginfo('name'); ?>
      </div>
      <?php //wp_nav_menu(array('theme_location' => 'utility_navigation', 'container' => false, 'menu_class' => 'eight columns footer-nav')); ?>
    </div>
    -->
    <div class="row">
      <div class="twelve columns">
        <?php do_action('okf_footer'); ?>
      </div>
    </div>
  </footer>
	
	<!-- Included JS Files of Foundation -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
   <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.dotdotdot.min.js" type="text/javascript"></script>
    <script>
			$(document).ready(function() {
				$(".home-posts .post .text").dotdotdot({
				// configuration goes here
				});
			});
		</script>
	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]>
		<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	
	<?php wp_footer(); ?>
</body>
</html>