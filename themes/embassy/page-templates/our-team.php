<?php
/**
 * Template Name: OUR TEAM
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

<div class="banner_our_team">

	<?
	
	$src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false, ''); 
	echo '<img src="'.$src[0].'">';

	?>

</div>




<div class="our_team">
	
	<div class="grid_our_team">
<div  class="grid_outer" style="width: 1196px;  ">
<div class="grid_inner" style="width: 1208px; ">
		 
		 <h1 class="color_white">THE EMBASSY GRAND Executive Team</h1>
<hr class="line_our_team" />

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

$member_email = get_field( "email_profile_team_member", $pages[$x]->ID);

echo '
<div class="inner_team">
<div class="team_image"><img src="'.$src[0].'"><p style="padding-left:0px;padding-right:0px;"><a class="member_email" href="mailto:'.$member_email.'">'.$member_email.'</a></p></div>
	<div class="team_info"><h1>'.$pages[$x]->post_title.'</h1>'.wpautop($pages[$x]->post_content).'</div> 
	<div class="clear"></div>
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