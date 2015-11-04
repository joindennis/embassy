<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

    <link rel="stylesheet" href="wp-content/themes/embassy/css/slider.css" type="text/css"/> 
     <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" type="text/css"/> 
         <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/colorbox.css" type="text/css"/> 
  
     
 
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>
  	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.glide.min.js"></script>
  	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.colorbox.js"></script>
	




<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/colorbox.css" />

		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
  	

				
	  <div class="slider" style="
									border-bottom: 7px solid #fff;
									border-top: 7px solid #fff;
									height: 473px;
								 
									overflow: hidden;
									position: relative;
									width: 1276px;">
      <ul class="slides">
       
<?

$pages = get_pages( array('child_of' => 77, 'parent' => 77, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC') );

for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)
echo ' <li class="slide"><figure>';
echo $pages[$x]->post_content;
echo ' </figure></li>';
}

?> 
          
</ul>
</div><!-- @end .slider -->	
<div class="inner_wrapper">

<h1 class="color_white">WELCOME TO THE EMBASSY GRAND CONVENTION CENTRE</h1>
<hr class="welcome" />


<p class="color_white align_center"> Life is grand. Whether it's one night or one weekend, business or pleasure, let us enchant you and your guests with an Embassy Grand <br> experience with memories that will last a lifetime in the hearts and minds of your guests.</p>
</div>


<div class="why_choose_embassy">
	
	<div class="inner_wrapper">
	<h1 class="color_khaki">WHY SHOULD YOU CHOOSE EMBASSY GRAND?</h1>
	<hr class="color_khaki2" />
	
<span class="planning" style="margin-left: 131px;">PLANNING</span><div class="dot">•</div> 
<span class="planning">FOOD</span><div class="dot">•</div> 
<span class="planning">BUILDING HIGHLIGHTS</span><div class="dot">•</div> 
<span class="planning">LOCATION</span> 

	
	</div>
	<div class="clear"></div>
<div class="s_l">
	
	
	
	
</div>
<div  class="s_c">
	
	
		  <div class="slider second_slider">
    
     
      <ul class="slides">
       
<?

$pages = get_pages( array('child_of' => 105, 'parent' => 105, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC') );

for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)
echo ' <li class="slide"><figure>';

$src = wp_get_attachment_image_src(get_post_thumbnail_id($pages[$x]->ID), 'full', false, ''); 

echo '<div class="slider_planning">
<div class="image"><img src="'.$src[0].'"></div>
<div class="body">'.$pages[$x]->post_content.'</div></div>';
echo ' </figure></li>';

}

?> 
          
</ul> 
</div><!-- @end .slider -->	
	
	
</div>

<div class="s_r"></div>	
<div class="clear"></div>	

	
<p class="align_center color_khaki">The Embassy Grand Convention Centre is a proud to be an award-winning member of:</p>	
<div class="proud"><img src="<?php bloginfo('template_directory'); ?>/images/proud/proud.png" /></div>
	
</div>
 

<div class="watch_us_in_action">
	
	
	<div class="grid_home_page">
<div  class="grid_outer" style="width: 1196px; height: 589px;">
<div class="grid_inner" style="width: 1208px; height: 579px;">
		 
		 <h1 class="color_white">WATCH US IN ACTION</h1>
		 
		 
<div class="embassy_gallery_video">
		<div id="slider_video">
		<div class="slider44">
	
			
<?

$pages = get_pages( array('child_of' => 125, 'parent' => 125, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC') );

for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)
echo ' <div class="slide" style="margin-left:30px; margin-right:30px;">';
//echo $pages[$x]->post_content;

$video_link = get_field( "embed_code_video", $pages[$x]->ID ); 

$src = wp_get_attachment_image_src(get_post_thumbnail_id($pages[$x]->ID), 'full', false, ''); 

//echo $src[0]; 


echo '<a class="vimeo cboxElement" href="'.$video_link.'"><img src="'.$src[0].'"></a>';


echo '<div class="w_title">'.$pages[$x]->post_title.'</div>';

echo '<div class="w_body">'.$pages[$x]->post_content.'</div></div>';


}

?> 
	
</div> 
	</div> 	 
	</div> 	 
		 
</div> <!-- end of grid inner -->
</div> <!-- end of grid outer -->
</div> <!-- end of grid -->

<div class="clear"></div>
	
 
</div>  <!-- end watch us -->
    

<? include '_box_testimonials.php'; ?>


<? include '_box_experience.php'; ?>


<?

include '_box_book_event_now.php';

?>





				
<!-- run slider -->
<script type="text/javascript">
$(function(){
  $('.slider').glide({
    autoplay: 3500,
    hoverpause: true, // set to false for nonstop rotate
  arrowRightText: '&nbsp;',
    arrowLeftText: '&nbsp;'
  });
});
</script>	



	<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>

<script>
	
	$(document).ready(function(){
  $('.slider44').bxSlider({
    slideWidth: 319,
    minSlides: 2,
    maxSlides: 3,
    moveSlides: 1,
    slideMargin: 0
  });
});
</script>
 
				 

<?php get_footer(); ?>