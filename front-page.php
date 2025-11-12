<?php
/**
 * The main template file.
 */

get_header(); ?>

<section class="homecats">
<?php
$pageID = get_option('page_on_front');
// specific post ID you want to pull
$post = get_post( $pageID ); 
setup_postdata( $post );

	$frontCats = get_field('categories_to_show_on_homepage');
	$emailTitle = get_field('email_signup');

	foreach ( $frontCats as $c ) {
		$cat = get_term( $c, 'product_cat' );
		// $term_id = $cat->term_id;
		$img = get_field( 'homepage_category_image', $cat->taxonomy . '_' . $cat->term_id );
		$link = get_term_link( $c );
		// echo $img;
		// echo '<pre>';
		// print_r($img);
		// echo '</pre>';
		?>


		<div class="hcat-card">
			<a href="<?php echo $link; ?>">
				<div class="theimage">
					<div class="thefade"><h3><?php echo $cat->name; ?></h3></div>
					<img src="<?php echo $img['url']; ?>">
				</div>
			</a>
		</div>


<?php	} ?>
</section>
<?php

wp_reset_postdata();

// echo '<pre>';
// print_r($img);
// echo '</pre>';
?>
   
   <section class="home-signup">
	   	<div class="signup-wrapper">
	   	<h3><?php echo $emailTitle; ?></h3>
	   	  <div class="signupforma">
			<!-- <form name="ccoptin" action="https://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post" >
			<div class="input-wrapper">
				<input class="input" type="text" name="ea" id="emailinputz"  value="email">
				<input class="signup" type="submit" name="go" value="SIGN ME UP"  >
			</div>

			<input type="hidden" name="llr" value="xyl5irqab">
			<input type="hidden" name="m" value="1117271306007">
			<input type="hidden" name="p" value="oi">
			</form> -->
			<!-- Begin MailChimp Signup Form -->
			<!-- <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css"> -->
			<style type="text/css">
			/*#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }

			#mc_embed_signup .mc-field-group input {
				background-color: #070d18;
				color: #CDA169;
			}
			#mc_embed_signup .button {
				background-color: #CDA169;
				color: #070d18;
			}*/
			/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
			  We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
			</style>
			<div id="mc_embed_signup">
			<form action="//memorabiliacenter.us14.list-manage.com/subscribe/post?u=d4a7da08e347af923a336286b&amp;id=25b0130c1e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div id="mc_embed_signup_scroll">
			<!-- <div class="indicates-required"><span class="asterisk">*</span> indicates required</div> -->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d4a7da08e347af923a336286b_25b0130c1e" tabindex="-1" value=""></div>
			<!-- <div class="mc-field-group"> -->
			<div class="input-wrapper">
				<!-- <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
				</label> -->
				<input type="email" placeholder="your email..." name="EMAIL" class="input" id="mce-EMAIL">
				
			   <input type="submit" value="SIGN ME UP" name="subscribe" id="mc-embedded-subscribe" class="signup">
			    </div>
			</div>
			</div>
			<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    
			</form>
			</div>
			<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
			<!--End mc_embed_signup-->
			</div>
		</div>
   </section> 

<?php get_footer(); ?>
