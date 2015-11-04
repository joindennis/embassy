<?php
/**
 * Template Name: BLOG
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

<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "f29a0705-d87d-40f4-85f7-f329eeee13cc", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>




<div class="banner_blog">

	<?
	
	$src = wp_get_attachment_image_src(get_post_thumbnail_id(55), 'full', false, ''); 
	echo '<img src="'.$src[0].'">';

	?>

</div>




<div class="our_blog">
	
		<div class="grid_our_vendors">
<div  class="grid_outer" style="width: 1196px;  ">
<div class="grid_inner" style="width: 1208px; ">
		 
		 <!-- <h1 class="color_white"><? echo $title; ?></h1>
<hr class="line_our_vendors" /> -->


<!-- <div id="blog">
<?php if(have_posts()) : ?>
     <?php while(have_posts()) : the_post(); ?>
          <div class="post">
               <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
               <div class="entry">    
                    <?php the_content(); ?>
                    <?php
                    $current_date ="";
                    $count_posts = wp_count_posts();
                    $nextpost = 0;
                    $published_posts = $count_posts->publish;
                    $myposts = get_posts(array('posts_per_page'=>$published_posts));
                   foreach($myposts as $post) :
                         $nextpost++;
                         setup_postdata($post);
                         $date = get_the_date("F Y");  
                         if($current_date!=$date):
                              if($nextpost>1): ?>
                                   </ol>
                              <?php endif; ?>
                              <strong><?php echo $date; ?></strong><ol start = "<?php echo $nextpost; ?>">
                              <?php $current_date=$date;
                         endif; ?>
                         <li><?php the_title(); ?> &bull; <a href = "<?php the_permalink(); ?>">link</a></li>
                    <?php endforeach; wp_reset_postdata(); ?>
                    </ol>
              </div>
          </div>
     <?php endwhile; ?>
     

     
     
<?php endif; ?>
</div> -->
 	
 

<?



 


$subject="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

 


$pattern='/\d+/i';
//echo $subject;



$success = preg_match($pattern, $subject, $match);

//print_r($match);

 
//echo $match[0];




switch ($_GET['action']) {
	case '':
		$_GET['action'] ='all';
		break;

}


switch ($_GET['action']) {
	case 'all':
// pagination

	
	$current_page = $match[0];
		
		
		switch ($match[0]) {
			case '':
				$match[0] = 1;
				break;
			
		}
		
/* debuging info */	
	
	$args = array( 'numberposts' => -1 );	
	$posts = get_posts( $args );

	/* NOTE:  POST PER PAGE  */
	$ppp = 2; /* post per page PPP */
	$num_posts = sizeof($posts); /* count all selected posts */
	$num_pages = ceil($num_posts/$ppp);  /* how many pages we've got */
	
	
	
	/* gen finish array */
	for ($i=1; $i <= $num_pages-1; $i++) { 
		$a[$i]=$i*$ppp; 
		}
	$a[$num_pages]= $num_posts;


	
	/* gen start array */	
	for ($i=1; $i <= $num_pages-1; $i++) { 
			$b[$i]=($a[$i]-$ppp)+1; 
		}
	$b[$num_pages]= $a[$num_pages-1]+1;
 
	

$current_page = $match[0];
$start = $b[$current_page];
$finish = $a[$current_page];

for ($i=$start-1; $i <=$finish-1; $i++) {
	
	
	
	 




echo '<h1 class="color_white">'.$posts[$i]->post_title.'</h1><hr class="line_our_vendors" />';
	
	
$src = wp_get_attachment_image_src(get_post_thumbnail_id($posts[$i]->ID), 'full', false, ''); 

//echo $src[0]; 


echo '<div class="blog_image"><img src="'.$src[0].'"></div>';	
	
		
// echo "<a class='titlePost' href='http://guzzolaw.com/blog-view-post/?recordID=".$posts[$i]->ID."#postStart'> ";
// echo $posts[$i]->post_title;
// echo "</a>";	
		 
//print_r( $posts[$i]);
//echo $posts[$i]->post_author;
 


// $first_name =  the_author_meta( 'first_name' , $posts[$i]->post_author );  
// $last_name =  the_author_meta( 'last_name' , $posts[$i]->post_author ); 


$date=date_create($posts[$i]->post_date);
$new_date = date_format($date,"l jS \of F Y");

 


$field = $posts[$i]->post_content;

echo wpautop($field);
	
echo '<div class="blog_details">';


echo '<div class="blog_by"><div class="blog_middle">BY: ';
the_author_meta( 'first_name' , $posts[$i]->post_author ); echo ' '; the_author_meta( 'last_name' , $posts[$i]->post_author ); 
echo  '<span class="blog_details_divider">|</span></div></div>';

echo '<div class="blog_date"><div class="blog_middle">DATE: ';
echo $new_date;
echo  '<span class="blog_details_divider">|</span></div></div>';

echo '<div class="blog_cat"><div class="blog_middle">CATEGORY: ';
$category_detail[$i]= get_the_category($posts[$i]->ID); //$post->ID

foreach($category_detail[$i] as $cd){
$filedUnder[$i].= $cd-> cat_name;
} 

$textC = $filedUnder[$i];
$new_text = substr($textC, 0, -1);
echo $new_text; 
echo  '<span class="blog_details_divider">|</span></div></div>';


echo '<div class="blog_social"><div class="blog_middle">';
echo "
<span class='st_googleplus_large' st_url='".$subject."' st_title='".$posts[$i]->post_title."' displayText='Google +'></span>
<span class='st_twitter_large' st_url='".$subject."' st_title='".$posts[$i]->post_title."'  displayText='Tweet'></span>
<span class='st_facebook_large' st_url='".$subject."' st_title='".$posts[$i]->post_title."'  displayText='Facebook'></span>
";
echo  '</div></div>';






echo '</div>';


 if(($i+1) % 2 == 0) {
}
else if ($start == $finish) {
	
}



else {
	echo '<hr class="blog_post_end">';
}









 
    
/* end cycle */	
}

//print_r($category_detail);
	
$id_post_cat = $_GET['blogid'];	

if (($current_page == 1) and ($current_page == $num_pages)) {
	/* do nothing ;) */ 			
	
	break;
	

} else

	
	if ($current_page == 1) {
	$next_page = $current_page+1;
	echo "<a class='pagination prev_post'  href='/blog/page/".$next_page."'>Older Posts <img class='arrow_post' src='"; echo bloginfo('template_directory'); echo "/images/arrow_prev_post.png'></a><div class='clear'></div>";
		$prev_page = $current_page-1;			
	
	break;
	

} else
	
	
if ($current_page < $num_pages) {
	$next_page = $current_page+1;
	echo "<a class='pagination prev_post'  href='/blog/page/".$next_page."'>← Previous Posts</a>";
		$prev_page = $current_page-1;			
	echo "<a class='pagination next_post'  href='/blog/page/".$prev_page."'>Next Posts →</a>";
	break;
	

} else {
	if (($current_page = $num_pages) and ($current_page !=1)){
			$prev_page = $current_page-1;
		
				
	echo "<a class='pagination next_post'  href='/blog/page/".$prev_page."'> <img class='arrow_post' src='"; echo bloginfo('template_directory'); echo "/images/arrow_next_post.png'> Recent Posts </a><div class='clear'></div>";
	
	break;
	}
}


break;
	
	
	

	
}


?>


	

		 
</div> <!-- end of grid inner -->
</div> <!-- end of grid outer -->
</div> <!-- end of grid -->
	<div class="clear"></div>
	
	
</div>







<?php get_footer(); ?>