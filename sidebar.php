
<div id="secondary" class="widget-area" role="complementary">
	<form role="search" method="get" id="searchform" class="searchform" action="https://memorabiliacenter.com/">
		<div class="sidesearcher">
			<input type="text" name="s" id="sidesearch" size="15" class="topsearch" value="enter search terms here" onfocus="if(this.value == 'enter search terms here'){this.value = '';}" />
			<input type="submit" id="sidesearchsubmit" value="Search" />
		</div>
	</form>



	<?php if ( is_active_sidebar( 'sidebar_widgets' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar_widgets' ); ?>
	<?php endif; ?>
    
    
</div><!-- #secondary -->