v<?php
/**
 * Template Name: FAQ
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

<div class="banner_faq">

	<?
	
	$src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false, ''); 
	echo '<img src="'.$src[0].'">';
 
	?>

</div>

<div class="our_team">
	
	<div class="grid_our_team">
<div  class="grid_outer" style="width: 1196px;  ">
<div class="grid_inner" style="width: 1208px; ">
		 
		 <h1 class="color_white">FREQUENTLY ASKED QUESTIONS</h1>
<hr class="line_faq" />

 <?
 
   $page_id = $post->ID; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title
echo $content; // Output Content
 
 
 ?>
 
 	

	
	
	<?
// display subpages of Main Page
$get_pageId = $page_id;
$pages = get_pages( array('child_of' => $get_pageId, 'parent' => $get_pageId, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ));
for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)
$src = wp_get_attachment_image_src(get_post_thumbnail_id($pages[$x]->ID), 'full', false, ''); 

 

echo '
 
<div class="faq_question"><p>'.$pages[$x]->post_title.'</p></div>
<div class="faq_question_bottom_arrow"></div>
<div class="faq_answer_top_arrow"></div>
<div class="faq_answer">
<div class="data">  
'.$pages[$x]->post_content.'
 
</div>  
</div> 
 
 
	';

}
?>
	

		 
</div> <!-- end of grid inner -->
</div> <!-- end of grid outer -->
</div> <!-- end of grid -->
	<div class="clear"></div>
	
	
	
</div>






<?php get_footer(); ?>