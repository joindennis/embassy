<?php
/**
 * Template Name: RECOMMENDED VENDORS
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

<div class="banner_vendors">

	<?
	
	$src = wp_get_attachment_image_src(get_post_thumbnail_id(65), 'full', false, ''); 
	echo '<img src="'.$src[0].'">';

	?>

</div>

<?

 $page_id = 61; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title


?>

<div class="our_vendors">
	
		<div class="grid_our_vendors">
<div  class="grid_outer" style="width: 1196px;  ">
<div class="grid_inner" style="width: 1208px; ">
		 
		 <h1 class="color_white"><? echo $title; ?></h1>
<hr class="line_our_vendors" />



<?
// display subpages of Main Page
$get_pageId = 61;
$pages = get_pages( array('child_of' => $get_pageId, 'parent' => $get_pageId, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ));
for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)

$vendor_address_1 = get_field( "vendors_addresses_1", $pages[$x]->ID );
$vendor_address_2 = get_field( "vendors_addresses_2", $pages[$x]->ID );
$vendor_address_3 = get_field( "vendors_address_3", $pages[$x]->ID );
$vendor_address_4 = get_field( "vendors_address_4", $pages[$x]->ID );
$vendor_address_5 = get_field( "vendors_address_5", $pages[$x]->ID );
$vendor_address_6 = get_field( "vendors_address_6", $pages[$x]->ID ); 

	$src = wp_get_attachment_image_src(get_post_thumbnail_id($pages[$x]->ID), 'full', false, ''); 
	
	
echo '<img class="vendors_image_preview" src="'.$src[0].'">';

echo '<div class="recomended_vendors">
	
	<div class="vendors_h2"><h2>'.$pages[$x]->post_title.'</h2></div>
	<div class="vendors_content">'.wpautop($pages[$x]->post_content).'</div>	
	<div class="vendors_address_box">
		
		<div class="vendor_address_1"><div class="vendor_middle">'.$vendor_address_1.'</div></div>
		<div class="vendor_address_2"><div class="vendor_middle">'.$vendor_address_2.'</div></div>
		<div class="vendor_address_3"><div class="vendor_middle">'.$vendor_address_3.'</div></div>
		<div class="vendor_address_4"><div class="vendor_middle">'.$vendor_address_4.'</div></div>
		<div class="vendor_address_5"><div class="vendor_middle">'.$vendor_address_5.'</div></div>
		<div class="vendor_address_6"><div class="vendor_middle">'.$vendor_address_6.'</div></div>
		
	</div>
	<div class="clear"></div>
	
	
</div>';



//echo "<p><a href='?page_id=" . $pages[$x]->ID . "&catId=$get_pageId&highlight=Events'>" . $pages[$x]->post_title . "</a><br>".$pages[$x]->post_content."</p>";
}
?>
 	

		 
</div> <!-- end of grid inner -->
</div> <!-- end of grid outer -->
<p> </p>
</div> <!-- end of grid -->

	<div class="clear"></div>
	
	
</div>




<?php get_footer(); ?>