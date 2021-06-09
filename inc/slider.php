<div id="home-banner-container">
<?php
$args = array(
    'number'     => $number,
    'orderby'    => $orderby,
    'order'      => $order,
    'hide_empty' => $hide_empty,
    'include'    => $ids,
     'parent'    => 0
);
$product_categories = get_terms( 'product_cat', $args ); ?>

<div class="flexslider">
   <div class="slider-searchform">
   		<div class="search-title roboto">Looking for something special?  Search by team, player &amp; more.</div>
        <form role="search" method="get" id="slider-searchform" action="<?php echo home_url( '/' ); ?>">
        <div class="search-input">
           <input type="text" name="s" id="searchinput" size="15" class="topsearch" value="enter search terms here" onfocus="if(this.value == 'enter search terms here'){this.value = '';}" />
        </div><!-- search input -->
        <input type="submit" id="searchsubmit" value="Search &raquo;" />
            
        </form>
   </div><!-- search form -->
      <ul class="slides">
      <?php foreach( $product_categories as $cat ) { ?>
    	   <li> 
              <div class="home-banner-pic">
              
				  <?php 
                   $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true ); 
                   // get the image URL
                   $image = wp_get_attachment_url( $thumbnail_id ); 
                 ?>
                		<img src="<?php echo $image ?>" />
                     
                  <?php
				  		// get the currently viewed slide's category
						$productCat = $cat->slug;
						$args = array(
							'post_type' => 'product',
							'posts_per_page' => 3,
							'product_cat' => $productCat, // which product category to pull
							// we can also query only those chosen with an Advanced Custom Field of "Yes"
							'meta_query' => array(
								 array(
									'key' => 'feature_on_homepage_slider', // Custom field radio button
									'value' => 'yes', // default set to no, so they have to check yes.
									'compare' => '=', 
									'type'      => 'CHAR'
								  )
							 )
							);
						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) : ?>
                        
                     <div class="polaroid-container">
                     
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            
                            
                            <div class="slider-polaroid <?php echo $productCat ?>">
                            <a href="<?php the_permalink(); ?>">
                            <div class="polaroid-pic">
									<?php if ( has_post_thumbnail() ) { the_post_thumbnail('polaroid'); } ?>
                            </div><!-- polaroid pic -->
								<div class="polaroid-title roboto">
									<?php if (strlen($post->post_title) > 50) {
										echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . '...'; } else {
										the_title();
										} ?>
                             </div><!-- polaroid title -->				
                             <div class="polaroid-price roboto">
                             	<?php $price = get_post_meta( get_the_ID(), '_regular_price', true); ?>
							 		$<?php echo $price; ?>
                             </div><!-- polaroid title -->
                             
                             <div class="polaroid-viewdetails roboto">View Details &raquo;</div>
                             </a>
                            </div><!-- slider polaroid -->
                            
								
							<?php endwhile; ?>
                         </div><!-- polaroid container -->
                         <?php endif; ?>
						
						<?php wp_reset_postdata();?>
                     
              </div><!-- home banner pic -->
          </li>
      <?php } ?>  
     </ul><!-- slides -->
  
</div><!-- .flexslider -->
<?php wp_reset_postdata(); ?>
</div><!-- home banner container -->