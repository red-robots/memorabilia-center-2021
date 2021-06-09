
	
    </div><!-- #main  -->
   <!-- </div> #main-wrapper -->
	
  <section class="foot-search">
    <div class="foot-search-title roboto">Looking for something special?  Search your keyword here:</div>
        <div class="footform">
        <form role="search" method="get" id="slider-searchform" action="<?php echo home_url( '/' ); ?>">
        <div class="search-input">
           <input type="text" name="s" id="searchinputz" size="15" class="footsearch" value="" onfocus="if(this.value == 'enter search terms here'){this.value = '';}" />

        </div><!-- search input -->
        <!-- <input class="footsubmit" type="submit" id="searchsubmitz" value="Search &raquo;" /> -->
            <button type="submit" class="footsubmit">
              <i class="fas fa-search"></i>
          </button>
        </form>
        </div>
  </section>
    
    <div id="footer">
    	<div id="footerinside">
           <!-- <div class="siteTagLine-footer roboto">Home of exclusive <em>Joe DiMaggio</em> autographed memorabilia</div> -->
           
           <div class="box1">
             <div class="copyright">&copy; <?php echo date("Y") ?> Memorabilia Center, LLC.  All rights reserved.<br/><br/>
                <a href="<?php bloginfo( 'url' ); ?>/sitemap"/>sitemap</a>  |  <a href="http://bellaworksweb.com/" target="_blank">site by Bellaworks</a></div>
           </div>
          
          <div class="box2">
            <img src="<?php bloginfo('template_url'); ?>/images/payments-2.png">
          </div> 

          <div class="box3">
            <div id="footer-menu">
              <?php wp_nav_menu( array( 
              'theme_location' => 'footer', 
              'container'       => '',
              ) ); ?>
               </div><!-- footer menu --><br/>
               <div id="footer-email" class="roboto">
                email: <a href="mailto:<?php the_field('header_email','option'); ?>">
                  <?php the_field('header_email','option'); ?>
                </a>
            </div><!-- footer email -->
          </div> 
          
       </div><!-- footer inside -->
	</div><!-- #footer -->


<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50916135-1', 'memorabiliacenter.com');
  ga('send', 'pageview');

</script>
</body>
</html>