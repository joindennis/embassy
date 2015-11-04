<?php
/**
 * Template Name: MENUS
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


<div class="banner_menus">

	<?
	
	$src = wp_get_attachment_image_src(get_post_thumbnail_id(65), 'full', false, ''); 
	echo '<img src="'.$src[0].'">';

	?>

</div>

<?

 $page_id = 65; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title

?>

<div class="our_menus">
	
		<div class="grid_our_menus">
<div  class="grid_outer" style="width: 1196px;  ">
<div class="grid_inner" style="width: 1208px; ">
		 
		 <h1 class="color_white"><? echo $title; ?></h1>
<hr class="line_our_menus" />

 <?
 
echo $content; // Output Content
 
?>
 
 	
<div class="our_menus_boxes">
	
<?
   $page_id = 294; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title
//echo $content; // Output Content
$src = wp_get_attachment_image_src(get_post_thumbnail_id($page_id), 'full', false, ''); 


echo "<h1 class='social_event_menus'>".$title."</h1>";

echo '<img class="social_event_menus" src="'.$src[0].'">';



echo "<div class='menus_ul'>".$content."</div>";
echo '<div class="clear"></div>';
?>



</div>





<div class="our_menus_boxes">
	
<?
   $page_id = 293; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title
//echo $content; // Output Content
$src = wp_get_attachment_image_src(get_post_thumbnail_id($page_id), 'full', false, ''); 


echo "<h1 class='corp_event_menus'>".$title."</h1>";

echo '<img class="corp_event_menus" src="'.$src[0].'">';



echo "<div class='corp_menus_ul'>".$content."</div>";
echo '<div class="clear"></div>';
?>



</div>

















	

		 
</div> <!-- end of grid inner -->
</div> <!-- end of grid outer -->
</div> <!-- end of grid -->
	<div class="clear"></div>
	
	
</div>



















<?php get_footer(); ?>