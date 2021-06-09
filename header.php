<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<script src="https://kit.fontawesome.com/231958809f.js" crossorigin="anonymous"></script>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2210821732529978');
  fbq('track', 'PageView');
  fbq('track', 'ViewContent');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2210821732529978&ev=PageView&noscript=1"
/></noscript> 

<?php wp_head(); ?>
<!-- liquid web tier 1 -->
</head>

<body>


    <div id="top-header">
    	<div id="top-header-inside">
        
        	<div class="siteTagLine-header roboto"><?php bloginfo('description'); ?></div>
        
        	<div id="header-menu">
            
				<?php wp_nav_menu( array( 
                    'theme_location' => 'header', 
                    'container'       => '',
                    ) ); ?>
           </div><!-- header menu -->
            
           <div id="mycart">
               <a href="<?php bloginfo('url'); ?>/cart">
               	<img src="<?php bloginfo('template_url'); ?>/images/my-cart.png" />
               </a>
           </div><!-- my cart -->
           
        </div><!-- top header inside -->
    </div><!-- top header -->
    
<div class="wrapper">
	<div id="header">
    	
		<?php if(is_home()) { ?>
            <h1 class="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php } else { ?>
            <div class="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></div>
        <?php } ?>
        
        <div class="header-right">
          <div class="row1">
            <div id="sociallinks" class="dinline">
               	<ul>
                		<li class="facebook">
                        	<a href="<?php the_field('facebook_link', 'option') ?>" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                          </a>
                      </li>
                      <li class="twitter">
                      	<a href="<?php the_field('twitter_link', 'option') ?>" target="_blank">
                        		<i class="fab fa-twitter-square"></i>
                          </a>
                      </li>
                      <li class="pintrest">
                          <a href="<?php the_field('pintrest_link', 'option') ?>" target="_blank">
                          	<i class="fab fa-pinterest-square"></i>
                          </a>
                      </li>
                      <li class="instagram">
                          <a href="<?php the_field('instagram_link', 'option') ?>" target="_blank">
                          	<i class="fab fa-instagram-square"></i>
                          </a>
                      </li>
                	</ul>
            </div><!-- sociallinks -->

          
          
          <div id="header-email" class="roboto dinline">
              email: <a href="mailto:<?php the_field('header_email','option'); ?>">
              	<?php the_field('header_email','option'); ?>
              </a>
          </div><!-- header email -->
          <div id="header-phone" class="oswald dinline"><?php the_field('header_phone_#','option'); ?></div>


        </div>
       <div class="clear"></div>
        <div id="header-tagline" class="roboto"><?php the_field('header_tagline','option'); ?></div>
        <div class="clear"></div>
          <div class="auction">
            <a href="<?php bloginfo('url'); ?>/">
              <div class="hammer">
                <i class="fal fa-gavel"></i>
              </div>
              <div class="words">
                Click Here for Auction
              </div>
            </a>
          </div>
        </div>
        
        
        
        
    </div><!-- header -->
    </div>


<div class="wrapper">
    <nav class="main-navigation"  id="site-navigation">
        <h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
          <?php wp_nav_menu( array( 
          'theme_location' => 'primary', 
          'menu_class' => 'nav-menu'
          ) ); ?>
    </nav><!-- main menu -->
</div>    

<?php if(is_front_page()) { ?>
<!--<div id="main-wrapper">-->
<div id="main-home">
<?php } elseif(is_tax('product_cat')) { ?>

<?php
// vars
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  
 
// load thumbnail for this taxonomy term (term object)
$custom_field = get_field('category_image', $queried_object); ?>

<div id="main-cats" style="background-image:url(<?php echo $custom_field ?>)">


<?php } else { ?>

<div id="main">

<?php } ?>
    
   


	