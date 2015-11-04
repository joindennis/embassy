<?php
/**
 * The Header template for our theme
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
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#a39570">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">




<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
  	
  	
  		<?
	
	$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
	if ($isiPad ==1) {
		?>
		<meta name="viewport" content="width=1345" />
	
		<?} else {
		?>	<meta name="viewport" content="width=1276" />
		
		 
		
		<?	
		}
	?>
  	
  	
  	
  	
  	  	<!-- <meta name="viewport" content="width=1355" /> -->
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/_reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
 
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/css.css">

 


<script src="<?php bloginfo('template_directory'); ?>/js/doubletaptogo.js"></script>
<script>
	$( function()
	{
		$( '#nav li:has(ul)' ).doubleTapToGo();
	 
	});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53645908-2', 'auto');
  ga('send', 'pageview');

</script>


<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<? 
	
	$header_text = get_field( "star_text", 44);
	$header_phone = get_field( "header_phone", 44);
	
	$google_plus_link = get_field( "google_plus_link", 41);
	$twitter_link = get_field( "twitter_link", 41);
	$facebook_link = get_field( "facebook_link", 41);
	$youtube_link = get_field( "youtube_link", 41);
	$vimeo_link = get_field( "vimeo_link", 41);
	$insta_link = get_field( "instagram_link", 41);
	$yelp_link = get_field( "yelp_link", 41);

	?>
	
	
<div id="page">

	<div  class="wrapper">
		<header>
			
			<div id="top">
				<div id="header_book">
				<div class="header_book_event"><a href="/contact/online-booking-form/"><span><? echo $header_text; ?></span></a></div>
				<div class="header_book_event_phone"><a href="/contact/online-booking-form/"><span><? echo $header_phone; ?></span></a></div>
				</div>
				
				
				<div id="header_social">
					
				
				<a href="<? echo $facebook_link; ?>" target="_blank"><img class="social_link"  src="<?php bloginfo('template_directory'); ?>/images/icons/facebook_link.png" /></a>
				<a href="<? echo $twitter_link; ?>" target="_blank"><img class="social_link"  src="<?php bloginfo('template_directory'); ?>/images/icons/twitter_link.png" /></a>
				<a href="<? echo $insta_link; ?>" target="_blank"><img class="social_link"  src="<?php bloginfo('template_directory'); ?>/images/icons/insta_link.png" /></a>
				<a href="<? echo $youtube_link; ?>" target="_blank"><img class="social_link"  src="<?php bloginfo('template_directory'); ?>/images/icons/youtube_link.png" /></a>
				<a href="<? echo $google_plus_link; ?>" target="_blank"><img class="social_link" src="<?php bloginfo('template_directory'); ?>/images/icons/google_plus_link.png" /></a>
				<a href="<? echo $vimeo_link; ?>" target="_blank"><img class="social_link"  src="<?php bloginfo('template_directory'); ?>/images/icons/vimeo_link.png" /></a>
				<a href="<? echo $yelp_link; ?>" target="_blank"><img class="social_link"  src="<?php bloginfo('template_directory'); ?>/images/icons/yelp_link.png" /></a>
				
				
				</div>
				
				
			</div>
			<div id="menu">
				
				<nav id="left">
					
				<nav id="nav" role="navigation">
	
	<ul class="clearfix">
		<li><a href="/">Home</a></li>
		<li>
			<a href="/our-company" aria-haspopup="true"><span>OUR company</span></a>
			<ul>
				<li><a href="/our-company/history/">History</a></li>
				<li><a href="/our-company/our-team/">Our Team</a></li>
				
			</ul>
		</li>
		<li>
			<a href="/our-services/" aria-haspopup="true"><span>Our Services</span></a>
			<ul>
				<li><a href="/our-services/weddings-social-events/">Weddings & social events</a></li>
				<li><a href="/our-services/corporate-events/">Corporate events</a></li>
				<li><a href="/our-services/recommended-vendors/">Recommended vendors</a></li>
			</ul>
		</li>
	 
	</ul>
</nav>	
					
					
</nav>
				<div id="logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo/logo.png" /></div>
				<nav id="right">
					
					
					<nav id="nav" role="navigation">
	
	<ul class="clearfix">
		<li><a href="/food-facility/venue-floor-plans/">FOOD & Venue</a></li>
	<li><a href="/gallery/">gallery</a></li>
	<li><a href="/blog/">blog</a></li>
	 	<li>
			<a href="/contact/" aria-haspopup="true"><span>contact</span></a>
			<ul>
				<li><a href="/contact/online-booking-form/ ">ONLINE BOOKING FORM</a></li>
				<li><a href="/contact/faq/">FAQ</a></li>
			 
			</ul>
		</li>
	</ul>
</nav>	
				
				
			</div>
			
			<div class="clear"></div>
			
		</header>
		

