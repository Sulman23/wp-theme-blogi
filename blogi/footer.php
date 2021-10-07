<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id='site-footer'>
  <div class='row'>
      <div class="col-md-12">
        <div class="container-fluid">
          
          <div class="col-md-4">
           
              <?php dynamic_sidebar('footer-widget1'); ?>
        
          </div><!-- /end col-md-4 -->

          <div class="col-md-4">
          
              <?php dynamic_sidebar('footer-widget2'); ?>
         
          </div><!-- /end col-md-4 -->

          <div class="col-md-4">
           
              <?php dynamic_sidebar('footer-widget3'); ?>
       
          </div><!-- /end col-md-4 -->

          
        </div><!-- /end foot-container -->
      </div><!-- /end col-12 -->
  </div><!-- /end row -->

</footer><!-- /end footer -->

<?php wp_footer(); ?>

</body>
</html>
