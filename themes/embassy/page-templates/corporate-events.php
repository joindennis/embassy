<?php
/**
 * Template Name: CORPORATE EVENTS
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


<div class="banner_events">

	<?
	
	$src = wp_get_attachment_image_src(get_post_thumbnail_id(62), 'full', false, ''); 
	echo '<img src="'.$src[0].'">';

	?>

</div>





<div class="our_wedding">
	
		<div class="grid_our_wedding">
<div  class="grid_outer" style="width: 1196px;  ">
<div class="grid_inner" style="width: 1208px; ">
	
	
	<?
	
$page_id = 62; //Page ID
$page_data = get_page( $page_id );
 
$title = $page_data->post_title;
$content = apply_filters('the_content', $page_data->post_content);

	
	
	
	
	?>
	
	
	
	
		 
		 <h1 class="color_white"><? echo $title; ?></h1>
<hr class="line_events" />

 <?
 
   $page_id = 62; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title
echo $content; // Output Content
 
 

 
 

$height_box = '435px;';

$page_id = 280; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title
// echo '<div class="page256">'.$content.'</div>'; // Output Content

$src = wp_get_attachment_image_src(get_post_thumbnail_id($page_id), 'full', false, ''); 



 				
 echo '		<div class="page280"><div class="our_services_left_align" style="height: '.$height_box.'">
		
		
		<div class="our_services_left"><img src="'.$src[0].'"></div>
		<div class="our_services_right">

<div class=our_services_right_middle>
 
<div class="services_body">'.wpautop($content).'</div>


</div>

</div>
		
		
	</div><div class="clear"></div></div>';	



?>
 
 
 
 
 
 <hr class="page256" />	



<?

$page_id = 284; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title
// echo '<div class="page256">'.$content.'</div>'; // Output Content
$src = wp_get_attachment_image_src(get_post_thumbnail_id($page_id), 'full', false, ''); 



echo '<div class="page284">
	
	<div class="page284_left">'.wpautop($content).'</div>
		<div class="page284_right"><img src="'.$src[0].'"></div>
	
	
	
</div>';


?>



<?



	
$page_id = 288; //Page ID

echo "<div class='page272'>"; 


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
	
	
 


<div class="book_event_now">
	
	
<div class="grid_home_page">
<div  class="grid_outer" style="width: 1196px; height: 246px;">
<div class="grid_inner" style="width: 1208px; height: 239px;">
		 
<h1 class="color_white">EMBASSY GRAND WILL HOST YOUR MOST MEMORABLE EVENT!</h1>
<hr class="line_book_event_now" />

 
 <div class="event_left">
 	<p>We take great pride in providing the highest quality Food and Event Halls <br>situated all around the Greater Toronto Area.</p>
 	
 	
 </div>
  <div class="event_right">
  	
  	<div class="event_star_box"><span>Book your evenT TODAY!</span></div>
  	<div class="event_phone_box"><span>905.794.9588</span></div>
  	
  	
  	
  </div>
  
		 
		 
		 
</div> <!-- end of grid inner -->
</div> <!-- end of grid outer -->
</div> <!-- end of grid -->

<div class="clear"></div>
	

	
</div>





<?php get_footer(); ?>