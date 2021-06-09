<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="page-left-product">


<?php if(have_posts()) : ?>

<?php 	
// $last_type="";
// $typecount = 0;
while (have_posts()) :
    the_post();
    // if ($last_type != $post->post_type){
    //     $typecount = $typecount + 1;
    //     if ($typecount > 1){
    //         echo '</div><!-- close container -->'; //close type container
    //     }
    //     // save the post type.
    //     $last_type = $post->post_type;
    //     //open type container
    //     switch ($post->post_type) {
    //         case 'post':
    //             echo "<div class=\"postsearch container\"><h2>Blog Results</h2>";
    //             break;
    //         case 'product':
    //             echo "<div class=\"productsearch container\"><h2>Product Search Results</h2>";
    //             break;
          
    //     }
    // } 
?>
    
     <?php if('post' == get_post_type()) : 
			get_template_part('search-blog');
			endif; 
	  ?>
        
      <?php if('product' == get_post_type()) : 
			get_template_part('search-product');
			endif; 
	  ?>

    
<?php endwhile; ?>
			
	<?php else : ?>
    <div class="open-a-div">
    <p>No results found.</p>	
       
<?php endif; ?>       

</div><!-- throw a closing div in -->     
        
        
        
        
			






        

      
      
      </div><!-- #page left -->

		<div class="page-right-product">
           <?php get_sidebar(); ?>
       </div><!-- page right -->
            
            
<?php get_footer(); ?>