<?php
/**
 * Template Name: WEDDINGS & SOCIAL EVENTS
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

<div class="banner_wedding">

	<?
	
	$src = wp_get_attachment_image_src(get_post_thumbnail_id(63), 'full', false, ''); 
	echo '<img src="'.$src[0].'">';

	?>

</div>




<div class="our_wedding">
	
		<div class="grid_our_wedding">
<div  class="grid_outer" style="width: 1196px;  ">
<div class="grid_inner" style="width: 1208px; ">
	
	
	<?
	
$page_id = 63; //Page ID
$page_data = get_page( $page_id );
 
$title = $page_data->post_title;
$content = apply_filters('the_content', $page_data->post_content);

	
	
	
	
	?>
	
	
	
	
		 
		 <h1 class="color_white"><? echo $title; ?></h1>
<hr class="line_our_wedding" />

 <?
 
   $page_id = 63; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title
echo $content; // Output Content
 
 

 
$page_id = 256; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title

echo '<hr class="line_common_divider" />';



echo '<div class="page256">'.$content.'</div>'; // Output Content
 
 
 ?>
 
 <hr class="page256" />	
<div class="our_wedding_boxes">
	


<?

$height_box = '355px;';

$page_id = 260; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title
// echo '<div class="page256">'.$content.'</div>'; // Output Content

$src = wp_get_attachment_image_src(get_post_thumbnail_id($page_id), 'full', false, ''); 



	echo '
	
	<div class="page260">
	
		<div class="our_services_left_right_align" style="height: '.$height_box.'">
		
		
	
		<div class="our_services_right_right">

<div class=our_services_right_right_middle>
 
<div class="services_body_right">'.wpautop($content).'</div>



</div>

</div>
		
		<div class="our_services_left_right"><img src="'.$src[0].'"></div>	
	</div><div class="clear"></div>
	
	</div>
	';



?>





<?

$height_box = '590px;';

$page_id = 264; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title
// echo '<div class="page256">'.$content.'</div>'; // Output Content

$src = wp_get_attachment_image_src(get_post_thumbnail_id($page_id), 'full', false, ''); 



 				
 echo '		<div class="page264"><div class="our_services_left_align" style="height: '.$height_box.'">
		
		
		<div class="our_services_left"><img src="'.$src[0].'"></div>
		<div class="our_services_right">

<div class=our_services_right_middle>
<div class="services_title">'.$title.'</div>
<div class="services_body">'.wpautop($content).'</div>


</div>

</div>
		
		
	</div><div class="clear"></div></div>';	



?>


<?

$height_box = '542px;';

$page_id = 268; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title
// echo '<div class="page256">'.$content.'</div>'; // Output Content

$src = wp_get_attachment_image_src(get_post_thumbnail_id($page_id), 'full', false, ''); 



	echo '
	
	<div class="page268">
	
		<div class="our_services_left_right_align" style="height: '.$height_box.'">
		
		
	
		<div class="our_services_right_right">

<div class=our_services_right_right_middle>
<div class="services_title_right">'.$title.'</div> 
<div class="services_body_right">'.wpautop($content).'</div>



</div>

</div>
		
		<div class="our_services_left_right"><img src="'.$src[0].'"></div>	
	</div><div class="clear"></div>
	
	</div>
	';



?>


<?



	
$page_id = 272; //Page ID

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
	
	
</div>


<? include '_box_book_event_now.php'; ?>



<?php get_footer(); ?>