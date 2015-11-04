<?php
/**
 * Template Name: VENUE & FLOOR PLANS
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


 <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" type="text/css"/> 
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/colorbox.css" type="text/css"/> 
  

 	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.10.2.min.js"></script>
 	
   	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.colorbox.js"></script>



<div class="banner_venue">

	<?
	
	$src = wp_get_attachment_image_src(get_post_thumbnail_id(64), 'full', false, ''); 
	echo '<img src="'.$src[0].'">';


 $page_id = 64; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title



	?>

</div>



<div class="our_venue">
	
		<div class="grid_our_venue">
<div  class="grid_outer" style="width: 1196px;  ">
<div class="grid_inner" style="width: 1208px; ">
		 
		 <h1 class="color_white">FOOD AND VENUE</h1>
<hr class="line_our_venue" />

 <?
 
echo $content; // Output Content
 
?>
 
 	
<div class="our_venue_boxes">



<a name="menuSection"></a>	
<?



	
$page_id = 308; //Page ID

echo "<div class='page308'>"; 


$page_data = get_page( $page_id );
 
$title = $page_data->post_title;
$content = apply_filters('the_content', $page_data->post_content);

echo "<h1>".$title ."</h1>";	
	
echo $content;	

echo '</div>';	
?>



</div>



<div class="our_venue_boxes">
	
<?



	
$page_id = 307; //Page ID

echo "<div class='page307'>"; 


$page_data = get_page( $page_id );
 
$title = $page_data->post_title;
$content = apply_filters('the_content', $page_data->post_content);

echo "<h1>".$title ."</h1>";	
	
echo $content;	

echo '</div>';	
?>



</div>


		 
</div> <!-- end of grid inner -->
</div> <!-- end of grid outer -->
</div> <!-- end of grid -->
	<div class="clear"></div>
	
	
	
	
	 <h1 class="venu_video_gallery">VENUE IMPRESSIONS</h1>	
 

 <div class="embassy_gallery_video">
	
	
	<div class="slider4">
		
		
<?

$pages = get_pages( array('child_of' => 125, 'parent' => 125, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC') );

for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)
echo ' <div class="slide">';
//echo $pages[$x]->post_content;

$video_link = get_field( "embed_code_video", $pages[$x]->ID ); 

$src = wp_get_attachment_image_src(get_post_thumbnail_id($pages[$x]->ID), 'full', false, ''); 

//echo $src[0]; 


echo '<a class="vimeo cboxElement" href="'.$video_link.'"><img src="'.$src[0].'"></a></div>';
}

?> 
		
 
</div>
	
	
</div>







	
<a class="venue_view_video_gallery" href="http://embassygrand.ca/gallery/#ad-image-0">VIEW COMPLETE GALLERY</a>	
	<a name="floorSection"></a>	
	<?
	
	$page_id = 305; //Page ID
	
	$page_data = get_page( $page_id );
 
$title = $page_data->post_title;
$content = apply_filters('the_content', $page_data->post_content);
	
	?>
	
	<div class="grid_our_venue">
<div  class="grid_outer" style="width: 1196px;  ">
<div class="grid_inner" style="width: 1208px; ">
		 
		 <h1 class="color_white"><? echo $title; ?></h1>
<hr class="line_our_venue_floor_plans" />

 <?
 
echo $content; // Output Content
 
?>
 
 <div class="floor_plans_links">	
<?
// display subpages of Main Page
$get_pageId = 305;
$pages = get_pages( array('child_of' => $get_pageId, 'parent' => $get_pageId, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ));
for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)
$url_pdf = get_field( "link_to_file_floor_plan", $pages[$x]->ID ); 

if(($x+1) % 3 == 0) {
echo '<div class="floor_plan_pdf no-margin-right"><a href="'.$url_pdf.'">'.$pages[$x]->post_content.'</a></div>';
}

elseif ($pages[$x]->post_title == 'VENUE FEATURE SHEET' ) {
	echo '<div class="floor_plan_pdf botton_pdf_links"><a href="'.$url_pdf.'">'.$pages[$x]->post_content.'</a></div>';
	
}

else {
	echo '<div class="floor_plan_pdf"><a href="'.$url_pdf.'">'.$pages[$x]->post_content.'</a></div>';
}



//echo '<div class="floor_plan_pdf">'.$pages[$x]->post_title.'</div>';

 


//echo "<p><a href='?page_id=" . $pages[$x]->ID . "&catId=$get_pageId&highlight=Events'>" . $pages[$x]->post_title . "</a><br>".$pages[$x]->post_content."</p>";
}
echo '<div class="clear"></div>	';
?>



</div> 


		 
</div> <!-- end of grid inner -->
</div> <!-- end of grid outer -->
</div> <!-- end of grid -->
	<div class="clear"></div>	
	
	
	
</div>


<script>
	
	$(document).ready(function(){
  $('.slider4').bxSlider({
    slideWidth: 319,
    minSlides: 2,
    maxSlides: 4,
    moveSlides: 1,
    slideMargin: 0
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



<?php get_footer(); ?>