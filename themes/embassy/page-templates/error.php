<?php
/**
 * Template Name: Error
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

<div class="status">
 

<?

$page_id = 385; //Page ID
	$page_data = get_page( $page_id );
 
$title = $page_data->post_title;
$content = apply_filters('the_content', $page_data->post_content);

echo $content; // Output Content



?>

</div>
<?php get_footer(); ?>