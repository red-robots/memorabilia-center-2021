<div class="post-container">         
    <div class="entry-content">
    	<h2 class="blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php
            global $more;
            $more = 0;
        ?>
        <?php the_excerpt(); ?>
                    
    <div class="readmore-blog">
        <a href="<?php the_permalink(); ?>">
        	Read More &raquo;
        </a>
    </div><!-- readmore blog -->
    </div><!-- entry-content -->
</div><!-- post container -->







