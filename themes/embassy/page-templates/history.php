<?php
/**
 * Template Name: HISTORY
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

<div class="banner_our_history">

	<?
	
	$src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false, ''); 
	echo '<img src="'.$src[0].'">';

	?>
	
	

</div>

<div class="our_history">
	
	
		<div class="grid_our_history">
<div  class="grid_outer" style="width: 1196px;  ">
<div class="grid_inner" style="width: 1208px; ">
		 
		 <h1 class="color_white">THE LAVIOLA FAMILY: A HISTORY OF CREATING EXPERIENCES</h1>
<hr class="line_our_history" />

 <?
 
   $page_id = $post->ID; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title
echo $content; // Output Content
 
 
 ?>
 
 <?
 
$pages = get_pages( array('child_of' => 60, 'parent' => 60, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC') );
for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)


 if($x % 2 == 0){
 $src = wp_get_attachment_image_src(get_post_thumbnail_id($pages[$x]->ID), 'full', false, '');  									
 									
 echo '
 <div class="year-left">
	
<div class="year_image"><img src="'.$src[0].'" /></div>
<div class="year_data"  id="year'.$pages[$x]->post_title.'">
	
	<div class="year_year">'.$pages[$x]->post_title.'</div>
	<div class="year_body">'.$pages[$x]->post_content.'</div>
	
	
	
</div>
	

</div>
 
 
 ';								
 							

 	
}
else {
	 $src = wp_get_attachment_image_src(get_post_thumbnail_id($pages[$x]->ID), 'full', false, '');  
	echo '
	
	<div class="year-right">
<div class="year_float_right"></div>	
<div class="year_data"  id="year'.$pages[$x]->post_title.'">	
<div class="year_image"><img id="history_image_'.$pages[$x]->post_title.'" src="'.$src[0].'" /></div>

	
	
	<div class="year_body">'.$pages[$x]->post_content.'</div>
	<div class="year_year">'.$pages[$x]->post_title.'</div>
	
	
</div>
	

</div>
	
	';
	
	
	
	
	
}





//echo "<p><a href='?page_id=" . $pages[$x]->ID . "&pageId=$get_pageId'>" . $pages[$x]->post_title . "</a></p>";
}
 
//print_r($pages);
 
// -1 любое число
?>
 
 
 


		 
</div> <!-- end of grid inner -->
</div> <!-- end of grid outer -->
</div> <!-- end of grid -->
	<div class="clear"></div>
	
	
	
	
	
	
</div>


<?php get_footer(); ?>