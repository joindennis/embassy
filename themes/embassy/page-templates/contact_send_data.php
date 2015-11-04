<?php 
session_start();
//echo $_POST['letters_code'];
// echo "<br>";
// echo $_POST['letters_code2'];
// strcasecmp($_SESSION['letters_code2'], $_POST['letters_code2']);

//die($_SESSION['6_letters_code']);

	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		  echo '<script type="text/javascript">window.location = "/status/error/"</script>';
	exit;} 

else {echo '';}
	

?>
<?php
/**
 * Template Name: CONTACT SEND DATA
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



<?php

$fields_firstname=$_POST['fn'];
$fields_lastname=$_POST['ln'];
$fields_email=$_POST['email'];
$fields_phone=$_POST['phone'];
$selectOption_reached = $_POST['reached'];
$selectOption_event_type = $_POST['event_type'];
$selectOption_ge = $_POST['ge'];

$fields_ed=$_POST['ed'];
$fields_subject=$_POST['subject'];
$fields_message=$_POST['message'];
$selectOption_hear = $_POST['hear'];


 


//$to  = "zeppieri.janice@gmail.com";
//$to  = "dennis.khakimov@gmail.com"; 
$to  = "contactus@embassygrand.com"; 

 



$subject = "Embassy Contact Us Form";

$message = '

<html>

   <head>

        <title>Embassy Contact Us Form</title>

   </head>

    <body>

       <br>

        Embassy Contact Us Form:<br><br>

First Name: '.$fields_firstname.'<br>
Last Name: '.$fields_lastname.'<br>            
Email: '.$fields_email.'<br> 
Phone: '.$fields_phone.'<br>
 
Message: '.$fields_message.'<br> 
 
        
<br><br><br>
    </body>

</html>';        


$headers  = "Content-type: text/html; charset=UTF-8 \r\n";

$headers .= "From: http://embassygrand.ca <noreply@embassygrand.ca>\r\n";

if (

(($fields_firstname !='') ||
($fields_email !='')

)
)


{

mail($to, $subject, $message, $headers);

echo '<script type="text/javascript">window.location = "/status/success/"</script>';

exit;

}


else {

    echo '<script type="text/javascript">window.location = "/status/error/"</script>';

exit;}   

?> 



<?php get_footer(); ?>