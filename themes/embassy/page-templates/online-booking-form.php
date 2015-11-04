<?php
/**
 * Template Name: ONLINE BOOKING FORM
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

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/BeatPicker.min.css"/>
   
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.10.2.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/BeatPicker.min.js"></script>





	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.10.2.min.js"></script>
<script>
jQuery(document).ready(function() {	
	$('#google_map').hover(function(){
	$('#google_map_opacity').fadeOut('slow');
	$('#google_map_logo').fadeOut('slow');
	
}).mouseleave(function() {
	$('#google_map_opacity').fadeIn('slow');
	$('#google_map_logo').fadeIn('slow');
});

});

</script>


<div class="banner_contact">

	<?
	
	$src = wp_get_attachment_image_src(get_post_thumbnail_id(67), 'full', false, ''); 
	echo '<img src="'.$src[0].'">';

	?>

</div>





<div class="our_online">
	
	
 



	
	
		<div class="grid_our_online">
<div  class="grid_outer" style="width: 1196px;  ">
<div class="grid_inner" style="width: 1208px; ">
		 
		 <h1 class="color_white">ONLINE BOOKING FORM</h1>
<hr class="line_online" />






 <?
 
   $page_id = 67; // Enter your post, page or custom post type id here
$page_data = get_page( $page_id ); //gets all page data
$content = apply_filters('the_content', $page_data->post_content); //filters just the post content
$title = $page_data->post_title; // Get title
echo $content; // Output Content
 
 
 ?>
 
 	
<div id="online_booking">
	
	
	<form id="online_booking" action="/contact/send-online-booking/" method="post"> 
				<input type="text" name="fn" id="fn" placeholder="*FIRST NAME" required><input type="text" name="ln" id="ln" placeholder="*LAST NAME" required>
				<input type="text" name="email" id="email" placeholder="EMAIL"><input type="text" name="phone" id="phone" placeholder="*PHONE #" required>
				
				
				
				<select class="reached" name="reached">
    <option value="none" disabled="disabled" selected="selected">BEST TIME TO BE REACHED: Please select</option>
    <option value="BEST TIME TO BE REACHED			9:00am – 12:00pm">BEST TIME TO BE REACHED			9:00am – 12:00pm</option>
    <option value="BEST TIME TO BE REACHED			12:00pm-5:00pm">BEST TIME TO BE REACHED			12:00pm-5:00pm</option>
    <option value="BEST TIME TO BE REACHED			5:00pm – 8:00pm">BEST TIME TO BE REACHED			5:00pm – 8:00pm</option>
</select>
				
			
							<select class="event_type" name="event_type" required>
    <option value="none" disabled="disabled" selected="selected" >*EVENT TYPE: Please select</option>
<option value="EVENT TYPE Wedding">Wedding</option>
<option value="EVENT TYPE Bridal Shower">Bridal Shower</option>
<option value="EVENT TYPE Baby Shower">Baby Shower</option>
<option value="EVENT TYPE Communion">Communion</option>
<option value="EVENT TYPE Baptism">Baptism</option>
<option value="EVENT TYPE Funeral">Funeral</option>
<option value="EVENT TYPE Corporate Event">Corporate Event</option>
<option value="EVENT TYPE Product Launch">Product Launch</option>
<option value="EVENT TYPE Birthday Party">Birthday Party</option>
<option value="EVENT TYPE Anniversary">Anniversary</option>
<option value="EVENT TYPE Holiday Party">Holiday Party</option>
<option value="EVENT TYPE Gala">Gala</option>
<option value="EVENT TYPE Fundraiser">Fundraiser</option>
<option value="EVENT TYPE AGM">AGM</option>
<option value="EVENT TYPE Team Building">Team Building</option>
<option value="EVENT TYPE Reception">Reception</option>
    
</select>
			
			
			<input required type="text" name="ed" id="ed"  placeholder="*EVENT DATE" data-beatpicker="true" data-beatpicker-position="['right','bottom']" >



							<select class="ge" name="ge" required>
    <option value="none" disabled="disabled" selected="selected" >*GUESTS ESTIMATE: Please select</option>
    <option value="GUESTS ESTIMATE 50">GUESTS ESTIMATE 50</option>
    <option value="GUESTS ESTIMATE 100">GUESTS ESTIMATE 100</option>
    <option value="GUESTS ESTIMATE 150">GUESTS ESTIMATE 150</option>
    <option value="GUESTS ESTIMATE 200">GUESTS ESTIMATE 200</option>
    <option value="GUESTS ESTIMATE 300">GUESTS ESTIMATE 300</option>
    <option value="GUESTS ESTIMATE 400">GUESTS ESTIMATE 400</option>
    <option value="GUESTS ESTIMATE 600">GUESTS ESTIMATE 600</option>
    <option value="GUESTS ESTIMATE 800">GUESTS ESTIMATE 800</option>
    <option value="GUESTS ESTIMATE 1200">GUESTS ESTIMATE 1200</option>
    <option value="GUESTS ESTIMATE 1500">GUESTS ESTIMATE 1500</option>
    <option value="GUESTS ESTIMATE 2000">GUESTS ESTIMATE 2000</option>
    
</select>
				
				
				<input type="text" name="subject" id="subject" placeholder="SUBJECT">
				<br><textarea name="message" id="message" placeholder="MESSAGE"></textarea>
				
				
								<select class="hear" name="hear">
    <option value="none" disabled="disabled" selected="selected">HOW DID YOU HEAR ABOUT US?: Please select</option>
    <option value="HOW DID YOU HEAR ABOUT US?		Signage">Signage</option>
    <option value="HOW DID YOU HEAR ABOUT US?		Website">Website</option>
    <option value="HOW DID YOU HEAR ABOUT US?		Facebook">Facebook</option>
    <option value="HOW DID YOU HEAR ABOUT US?		Twitter">Twitter</option>    
    <option value="HOW DID YOU HEAR ABOUT US?		Instagram">Instagram</option>    
    <option value="HOW DID YOU HEAR ABOUT US?		Friends">Friend</option>

    <option value="HOW DID YOU HEAR ABOUT US?		Family">Family</option>
    <option value="HOW DID YOU HEAR ABOUT US?		Magazine">Magazine</option>
        <option value="HOW DID YOU HEAR ABOUT US?		Television">Television</option>
                <option value="HOW DID YOU HEAR ABOUT US?		Radio">Radio</option>
                    <option value="HOW DID YOU HEAR ABOUT US?		Google Search">Google Search</option>
    <option value="HOW DID YOU HEAR ABOUT US?		Google Ad">Google Ad</option>

</select>
				
				
				
				<p class="optional">* Required Fields</p>
				
				
				
				<div class="captcha_left">
					
						<div class="captcha_code"><img id="captchaimg" name="captchaimg" src="<?php bloginfo('template_directory'); ?>/captcha_code_file.php?rand=387223787&quot;"></div>
					<div class="captcha_enter_code_title">Enter the code above here:</div>
					<div class="input_code_here"><input type="text" class="clear" placeholder="" name="letters_code" id="letters_code"></div>
					<div class="cant_see"><small style="color: #6d6e70; display: block; padding-left: 10px;">
Can't read the image? Click <a href="javascript: refreshCaptcha();" style="color:#888888;">here</a> to refresh.</small></div>
					
					
					
					
				</div>
				<div class="send_button">
				 
					
					
					<button type="submit" id="send_message_1">SEND MESSAGE</button> 
				</div>
					<div class="clear"></div>
				
				
  
				
				
			</form>
	<div class="clear"></div>
	
	
	
</div>
	
<p class="hrs48">After the form above has been completed one of our staff will respond to this message within the next 48 hours.</p>
		 
</div> <!-- end of grid inner -->
</div> <!-- end of grid outer -->
</div> <!-- end of grid -->
	<div class="clear"></div>
	
	
		 <h1 class="color_white">LOCATION</h1>
<hr class="line_our_contact" />

<p class="text">Click on the map for directions.</p>



<div style="position: relative;" id="google_map">
	<div id="google_map_opacity" style="display: block; opacity: 0.527584;"></div>
	<div id="google_map_logo" style="display: block; opacity: 0.65948;"><img height="277" src="http://embassygrand.ca/wp-content/themes/embassy/images/logo/google_map_logo.png"></div>
	
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2881.2344583649024!2d-79.65771699999999!3d43.767991699999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3ca5cead0785%3A0x54bf8d9942596fa1!2s8800+The+Gore+Rd%2C+Brampton%2C+ON+L6P!5e0!3m2!1sen!2sca!4v1411409797194"  frameborder="0" style="border:0"></iframe>

</div>

	
	
	
	
	<div class="hours_opertions">
		
		
				 <h1 class="color_white">HOURS OF OPERATION</h1>
<hr class="line_hours_operations" />
	
	
	<div>
		
		<div class="day">
<span class="week_d">Monday</span>
<span class="week_d">Tuesday</span>
<span class="week_d">Wednesday</span>
<span class="week_d">Thursday</span>
<span class="week_d">Friday</span>
<span class="week_d">Saturday</span>
<span class="week_d">Sunday</span>



</div>
		<div class="hours">

<span class="week_d_hours">9:00 am - 5:00 pm</span>
<span class="week_d_hours">9:00 am - 5:00 pm*</span>
<span class="week_d_hours">9:00 am - 5:00 pm*</span>
<span class="week_d_hours">9:00 am - 5:00 pm*</span>
<span class="week_d_hours">9:00 am - 5:00 pm</span>
<span class="week_d_hours">10:00 am - 4:00 pm</span>
<span class="week_d_hours">10:00 am - 3:00 pm</span>

<span class="appointment">* After 5:00pm by appointment only</span>





</div>
		<div class="operations_image"><img src="http://embassygrand.ca/wp-content/themes/embassy/images/operation_hours_image.png" /></div>
			<div class="clear"></div>
	</div>	
		
		
	</div>
	
</div>






<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}

function refreshCaptcha0()
{
	var img = document.images['captchaimg0'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}

</script>  









<?php get_footer(); ?>