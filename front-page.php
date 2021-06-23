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
			<form name="ccoptin" action="https://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post" >
			<div class="input-wrapper">
				<input class="input" type="text" name="ea" id="emailinputz"  value="email">
				<input class="signup" type="submit" name="go" value="SIGN ME UP"  >
			</div>

			<input type="hidden" name="llr" value="xyl5irqab">
			<input type="hidden" name="m" value="1117271306007">
			<input type="hidden" name="p" value="oi">
			</form>
			</div><!-- signup -->
		</div>
   </section> 

<?php get_footer(); ?>