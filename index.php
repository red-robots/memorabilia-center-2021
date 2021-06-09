<?php
/**
 * The main template file.
 */

get_header(); ?>

<?php 
$args = array(
	'post_type' => 'page',
	'page_id' => '2' // About Us Page
);
$the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="home-left">
    	<div class="home-left-title roboto">
       		<?php the_field('homepage_text_title'); ?>
       </div><!-- entry-content -->
       <div class="home-left-text roboto">
       		<?php the_field('homepage_text'); ?>
       </div><!-- entry-content -->
       
       <div class="payments">Acepted Payments</div>
       <div class="home-left-readmore"><a href="<?php bloginfo('url'); ?>/about-us">Read More</a></div>
       
    </div><!-- home left -->
        
<?php endwhile; ?>
<?php endif; // end have_posts() check ?>
<?php wp_reset_postdata();?>
        
        
    <div class="home-right">
        	<div class="home-newsletter">
            	<div class="home-newsletter-title oswald">Join our Preferred Customer List!</div>
              <?php get_template_part('inc/email-form-mc'); ?>
            </div><!-- home newletter -->
            <div class="home-tags">
            	<div class="home-newsletter-title oswald">Popular Searches</div>
                <?php 
					$args = array(
					'post_type' => 'product',
					);
					$loop = new WP_Query( $args );
					?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                	<?php echo get_the_term_list( $post->ID, 'product_tag', '', ' | ', '' ); ?>
                <?php endwhile; ?>
            </div><!-- home tags -->
    </div><!-- home right -->
    
    

<?php get_footer(); ?>