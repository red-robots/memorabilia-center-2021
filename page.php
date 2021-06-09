<?php get_header(); ?>



			<?php while ( have_posts() ) : the_post(); ?>
				
                
              <div class="page-left-product">
            	
				
				
               
              
 
                
                
            <div class="entry-content">
            
            <h1><?php the_title(); ?></h1>  
            
            
				<?php the_content(); ?>
            </div><!-- entry-content -->
            
            </div><!-- page-content -->
                
                
            
			<?php endwhile; // end of the loop. ?>

<div class="page-right-product">
            	<?php get_sidebar(); ?>
            </div><!-- page right -->

<?php get_footer(); ?>