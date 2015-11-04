<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<?
// get address

$address_line_1 = get_field( "address_line_1", 7);
$address_line_2 = get_field( "address_line_2", 7); 
$zip = get_field( "zip", 7); 
$phone = get_field( "phone", 7); 
$fax = get_field( "fax", 7); 
$email = get_field( "email", 7); 


?>






	</div><!-- #main .wrapper -->
	<footer>
		<div id="footer_wrapper">
			<div class="footer_left"> 
				
				<div class="footer_header">CONTACT US</div>
				
				<div class="footer_logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo/footer_logo.png" /> </div>
				<div class="footer_address">
					<span class="address"><? echo $address_line_1;  ?></span>
					<span class="address"><? echo $address_line_2;  ?></span>
					<span class="address"><? echo $zip;  ?></span>
					<span class="phone"><span class="phone_title">P</span><? echo $phone;  ?></span>
					<span class="phone"><span class="phone_title">F</span><? echo $fax;  ?></span>
					<span class="email"><span class="phone_title">E</span><a href="mailto:<? echo $email;  ?>"><? echo $email;  ?></a></span> 
					
					
					
					 </div>
				
				
				</div>
				<div class="footer_center">
					
					<div class="footer_header">QUICK LINKS</div>
					<div class="quick_links">
						
						<?  display_custom_menu('QUICK LINKS LEFT'); ?>
						<?  display_custom_menu('QUICK LINKS RIGHT'); ?>
						
					</div>
					
					 </div>
					<div class="footer_right">
						
						<div class="footer_header">SOCIAL MEDIA FEED</div>
						
						
						
<? 
// Facebook Feed

    // Without this "ini_set" Facebook's RSS url is all screwy for reading!
    // This is the most essential line, don't forget it.
    //ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');

    // This URL is the URL to the Facebook Page's RSS feed.
    // Go to the page's profile, and on the left-hand side click "Get Updates vis RSS"
    //$rssUrl = "https://www.facebook.com/feeds/page.php?format=rss20&id=175839502464616";
    //$xml = simplexml_load_file($rssUrl); // Load the XML file

    // This creates an array called "entry" that puts each <item> in FB's
    // XML format into the array
    //$entry = $xml->channel->item;

    // This is just a blank string I create to add to as I loop through our
    // FB feed. Feel free to format however you want, or do whatever else
    // you want with the data.
   // $returnMarkup = '';

    // Now we'll loop through are array. I just have it going up to 3 items
    // for this example.
   /// for ($i = 0; $i < 1; $i++) {
    //    $returnMarkup .= "<p><a target='_blank' href='".$entry[$i]->link."'>".$entry[$i]->title."</a></p>"; // Title of the update
 

  //  }

    
	
	
	
	
	
	
	
	$page_id = '175839502464616';
$access_token = '862594907164160|_BSwhC2No6VzGgWW7wW356ExbbY';
//Get the JSON
$json_object = @file_get_contents('https://graph.facebook.com/' . $page_id . '/posts?access_token=' . $access_token);
//Interpret data
$fbdata = json_decode($json_object);

// echo '<pre>';
// print_r($fbdata);
// echo '</pre>';

 $f=0;
 $i=0;
 
  $returnMarkup = '';
foreach ($fbdata->data as $post )
{ 	
     $returnMarkup[$i]= $post->message; // Title of the update
     //echo $post->message; 
     //echo $returnMarkup[$i].'<br>';
        
        $length_date = strlen($post->created_time)-6;  
        $date_post = substr($post->created_time, 0, $length_date);
        
 
 $post_message = wp_trim_words( $post->message, $num_words = 10, $more = ' ...' );
 
 
 	$returnMarkup[$i]= "<p><a target='_blank' href='https://www.facebook.com/pages/Embassy-Grand-Convention-Centre/175839502464616'>".$post_message."</a></p>";
 	$f = $f+1;
	 $i=$i+1;
	 
	  
 	 
}
	
	
	
	
	
	
    
    
     // for ($i = 0; $i < 1; $i++) {
        // $returnMarkup .= "<h3>".$entry[$i]->title."</h3>"; // Title of the update
        // $returnMarkup .= "<p>".$entry[$i]->link."</p>"; // Link to the update
        // $returnMarkup .= "<p>".$entry[$i]->description."</p>"; // Full content
        // $returnMarkup .= "<p>".$entry[$i]->pubDate."</p>"; // The date published
        // $returnMarkup .= "<p>".$entry[$i]->author."</p>"; // The author (Page Title)
    // }
    
    
    // Finally, we return (or in this case echo) our formatted string with our
    // Facebook page feed data in it!
   // echo $returnMarkup;


// END Facebook Feed
?>
						
<?

// Twitter Feed

    // Without this "ini_set" Facebook's RSS url is all screwy for reading!
    // This is the most essential line, don't forget it.
    ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');

    // This URL is the URL to the Facebook Page's RSS feed.
    // Go to the page's profile, and on the left-hand side click "Get Updates vis RSS"
    $rssUrl_twitter = "http://twitrss.me/twitter_user_to_rss/?user=EmbassyGrandcc";
    $xml_twitter = simplexml_load_file($rssUrl_twitter); // Load the XML file

    // This creates an array called "entry" that puts each <item> in FB's
    // XML format into the array
    $entry_twitter = $xml_twitter->channel->item;

    // This is just a blank string I create to add to as I loop through our
    // FB feed. Feel free to format however you want, or do whatever else
    // you want with the data.
    $returnMarkup_twitter = '';

    // Now we'll loop through are array. I just have it going up to 3 items
    // for this example.
    for ($i = 0; $i < 1; $i++) {
        $returnMarkup_twitter .= "<p><a target='_blank' href='".$entry_twitter[$i]->link."'>".$entry_twitter[$i]->title."</a></p>"; // Title of the update
 

    }

    
    
    
     // for ($i = 0; $i < 1; $i++) {
        // $returnMarkup .= "<h3>".$entry[$i]->title."</h3>"; // Title of the update
        // $returnMarkup .= "<p>".$entry[$i]->link."</p>"; // Link to the update
        // $returnMarkup .= "<p>".$entry[$i]->description."</p>"; // Full content
        // $returnMarkup .= "<p>".$entry[$i]->pubDate."</p>"; // The date published
        // $returnMarkup .= "<p>".$entry[$i]->author."</p>"; // The author (Page Title)
    // }
    
    
    // Finally, we return (or in this case echo) our formatted string with our
    // Facebook page feed data in it!
   // echo $returnMarkup;


// END Twitter Feed



?>		
		
		
						
							
							
							<div class="footer_social_box">
								 <div class="footer_header_social"><img src="<?php bloginfo('template_directory'); ?>/images/icons/twitter.png" /></div>
								<div class="footer_data_social"><? echo $returnMarkup_twitter; ?></div>
								 </div>
	
							<div class="footer_social_box" style="border: none;">
								
								 <div class="footer_header_social"><img src="<?php bloginfo('template_directory'); ?>/images/icons/facebook.png" /></div>
								<div class="footer_data_social"><? echo $returnMarkup[0]; ?></div>
								 </div>
							
							
					
						
						
						
						</div>
					
		</div>
		
		<div class="clear"></div>
	
		
		
	</footer><!-- #colophon -->
	
	<? 
	
	$google_plus_link = get_field( "google_plus_link", 41);
	$twitter_link = get_field( "twitter_link", 41);
	$facebook_link = get_field( "facebook_link", 41);
	$youtube_link = get_field( "youtube_link", 41);
	$vimeo_link = get_field( "vimeo_link", 41);
	$insta_link = get_field( "instagram_link", 41);
		$yelp_link = get_field( "yelp_link", 41);
	
	?>
		
		<div id="copyright">
			<div class="copyright_text" >© Copyright 2014 Embassy Grand Convention Centre Brampton, Ontario |  All Rights Reserved</div>
			<div class="copyright_social_links" >
				<a href="<? echo $facebook_link; ?>" target="_blank"><img class="social_link"  src="<?php bloginfo('template_directory'); ?>/images/icons/facebook_link.png" /></a>
				<a href="<? echo $twitter_link; ?>" target="_blank"><img class="social_link"  src="<?php bloginfo('template_directory'); ?>/images/icons/twitter_link.png" /></a>
				<a href="<? echo $insta_link; ?>" target="_blank"><img class="social_link"  src="<?php bloginfo('template_directory'); ?>/images/icons/insta_link.png" /></a>
				<a href="<? echo $youtube_link; ?>" target="_blank"><img class="social_link"  src="<?php bloginfo('template_directory'); ?>/images/icons/youtube_link.png" /></a>
				<a href="<? echo $google_plus_link; ?>" target="_blank"><img class="social_link" src="<?php bloginfo('template_directory'); ?>/images/icons/google_plus_link.png" /></a>
				<a href="<? echo $vimeo_link; ?>" target="_blank"><img class="social_link"  src="<?php bloginfo('template_directory'); ?>/images/icons/vimeo_link.png" /></a>
				<a href="<? echo $yelp_link; ?>" target="_blank"><img class="social_link"  src="<?php bloginfo('template_directory'); ?>/images/icons/yelp_link.png" /></a>
				
				
				</div>
			
			 </div>
</div><!-- #page -->


<script type="text/javascript" charset="utf-8">
	
	
	
	
	jQuery(function($) {
    $('a[href$=".pdf"]').attr('target', '_blank');
    
    
    
    
    
}); 
</script>




<?php wp_footer(); ?>
</body>
</html>