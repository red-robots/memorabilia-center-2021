<?php
/**
 * Template Name: Blog
 */

get_header(); ?>



<div class="page-left-product">


<?php  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args= array(
	//'cat' => 1,
	'paged' => $paged
);
query_posts($args); ?>
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>  	
				
				
               

                
       <div class="post-container">         
            <div class="entry-content">
            
            <h2 class="blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
            <?php
				global $more;
				$more = 0;
			  ?>
				<?php the_excerpt(); ?>
                
                <div class="readmore-blog"><a href="<?php the_permalink(); ?>">Read More &raquo;</a></div>
                
                
            </div><!-- entry-content -->
            </div><!-- post container -->
            
            
            
            <?php endwhile; // end of the loop. ?>
            <div class="clear"></div>
            <?php pagi_posts_nav(); ?>
            
            
            
            
            <?php endif; // end of the loop. ?>
            
            
            
            </div><!-- page-left -->
            
            <div class="page-right-product">
            	<?php get_sidebar(); ?>
            </div><!-- page right -->
            
            
            
      
                
                
                
				
			



<?php get_footer(); ?>