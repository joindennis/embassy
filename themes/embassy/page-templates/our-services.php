<?php
/**
 * Template Name: OUR SERVICES
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


<div class="banner_our_services">

	<?
	
	$src = wp_get_attachment_image_src(get_post_thumbnail_id(222), 'full', false, ''); 
	echo '<img src="'.$src[0].'">';

	?>

</div>


<div class="our_services">
	
		<div class="grid_our_services">
<div  class="grid_outer" style="width: 1196px;  ">
<div class="grid_inner" style="width: 1208px; ">
		 
		 <h1 class="color_white">EMBASSY GRAND’s Area of expertise</h1>
<hr class="line_our_services" />

 <?
 
   $page_id = 222; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title
echo $content; // Output Content
 
 
 ?>
 
 	
<div class="our_services_boxes">
	

 <?
 
$get_pageId = $page_id;
$pages = get_pages( array('child_of' => $get_pageId, 'parent' => $get_pageId, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ));
for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)
$src = wp_get_attachment_image_src(get_post_thumbnail_id($pages[$x]->ID), 'full', false, ''); 

if  ( $pages[$x]->ID == 230) {
	$height_box = '387px';
}

else{
	$height_box = '322px';
}



 if($x % 2 == 0){
 				
 echo '	<div class="our_services_left_align" style="height: '.$height_box.'">
		
		
		<div class="our_services_left"><img src="'.$src[0].'"></div>
		<div class="our_services_right">

<div class=our_services_right_middle>
<div class="services_title">'.$pages[$x]->post_title.'</div>
<div class="services_body">'.wpautop($pages[$x]->post_content).'</div>


</div>

</div>
		
		
	</div> ';			
 		
 	
}
else {
	
	
	echo '	<div class="our_services_left_right_align" style="height: '.$height_box.'">
		
		
	
		<div class="our_services_right_right">

<div class=our_services_right_right_middle>
<div class="services_title_right">'.$pages[$x]->post_title.'</div>
<div class="services_body_right">'.wpautop($pages[$x]->post_content).'</div>



</div>

</div>
		
		<div class="our_services_left_right"><img src="'.$src[0].'"></div>	
	</div> ';
	
	
}





}
 

?>


</div>
	

		 
</div> <!-- end of grid inner -->
</div> <!-- end of grid outer -->
</div> <!-- end of grid -->
	<div class="clear"></div>
	
	
</div>


	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
 $('.our_services_boxes').children().last().css('border','0');
});
</script>


<?php get_footer(); ?>