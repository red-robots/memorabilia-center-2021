<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-0" class="post error404 no-results not-found">
				 <div class="page-left-product">
                 <div class="entry-content">
					<h1 class="entry-title"><?php _e( 'Page Not Found', 'twentytwelve' ); ?></h1>
				

				
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Pleases select a page from our sitemap below.', 'twentytwelve' ); ?></p>
					    <?php wp_list_pages('title_li='); ?>
				</div><!-- .entry-content -->
                 </div><!-- page-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>