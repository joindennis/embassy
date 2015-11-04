<?php
/**
 * Template Name: OUR COMPANY
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


    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slider.css" type="text/css"/> 
     
 
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.10.2.min.js"></script>
  	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.glide.min.js"></script>



<div class="banner_our_company">

	<?
	
	$src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false, ''); 
	echo '<img src="'.$src[0].'">';

	?>

</div>


<div class="our_company">
	
		<div class="grid_our_company">
<div  class="grid_outer" style="width: 1196px;  ">
<div class="grid_inner" style="width: 1208px; ">
		 
		 <h1 class="color_white">ABOUT THE EMBASSY GRAND CONVENTION CENTRE</h1>
<hr class="line_our_company" />

 <?
 
   $page_id = $post->ID; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title
echo $content; // Output Content
 
 
 ?>
 
 	

	

		 
</div> <!-- end of grid inner -->
</div> <!-- end of grid outer -->
</div> <!-- end of grid -->
	<div class="clear"></div>
	
	
</div>

<? include '_box_testimonials.php'; ?>



<? include '_box_experience.php'; ?>


				
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



<?php get_footer(); ?>