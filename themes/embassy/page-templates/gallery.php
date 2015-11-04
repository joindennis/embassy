<?php
/**
 * Template Name: GALLERY
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

 
  

 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jquery.ad-gallery.css">


  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" type="text/css"/> 
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/colorbox.css" type="text/css"/> 
  
  
  
     
 	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.10.2.min.js"></script>
 	
 	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.ad-gallery.js"></script>
 	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.colorbox.js"></script>
    

<script type="text/javascript">
  $(function() {
    $('img.image1').data('ad-desc', 'Whoa! This description is set through elm.data("ad-desc") instead of using the longdesc attribute.<br>And it contains <strong>H</strong>ow <strong>T</strong>o <strong>M</strong>eet <strong>L</strong>adies... <em>What?</em> That aint what HTML stands for? Man...');
    $('img.image1').data('ad-title', 'Title through $.data');
    $('img.image4').data('ad-desc', 'This image is wider than the wrapper, so it has been scaled down');
    $('img.image5').data('ad-desc', 'This image is higher than the wrapper, so it has been scaled down');
    var galleries = $('.ad-gallery').adGallery();
   
    setTimeout(function() {
      galleries[0].removeImage(1);
    }, 4000);
    
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
      }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
          galleries[0].settings.description_wrapper = false;
        }
        return false;
      }
    );
  });
  </script>
<div class="photo_gallery">



<div class="embassy_gallery_about">
	
	
<div class="grid_gallery_page">
<div  class="grid_outer" style="width: 1196px; height: 281px;">
<div class="grid_inner" style="width: 1208px; height: 273px;">
<p>		 
<?

$gallery_text = get_field( "gallery_text", $post->ID ); 

echo $gallery_text;

?>
 </p>


		 
</div> <!-- end of grid inner -->
</div> <!-- end of grid outer -->
</div> <!-- end of grid -->
	<div class="clear"></div>
	
	<h1 class="photogallery">PHOTO GALLERY</h1>	
 

	
	
</div>




<div class="embassy_gallery">

 


    <div id="gallery" class="ad-gallery">
      <div class="ad-image-wrapper">
      </div>
      <div class="ad-controls">
      </div>
      <div class="ad-nav">
        <div class="ad-thumbs">
          <ul class="ad-thumb-list">
          
           
           
           
           	 <?
	 
	 
 

 

echo '<div class="baguetteBoxOne gallery">';


	$gallery = get_post_gallery( 53, false );

if ($gallery) {


$ids = explode( ",", $gallery['ids'] );
 


foreach( $ids as $id ) {
$link = wp_get_attachment_url( $id );

	
	
$image = wp_get_attachment_image( $id, "thumbnail"); 



 $doc=new DOMDocument();
$doc->loadHTML($image);
$xml=simplexml_import_dom($doc); // just to make xpath more simple
$images=$xml->xpath('//img');

//print_r($images);


foreach ($images as $img) {
    //$img['alt']
}
 

if ($images[0]['alt'] == "") {
	$images[0]['alt']='';
}



 

//echo '<a title="'.$images[0]['alt'].'" href="'.$link.'">'.$image.'</a>';

echo '    <li>
              <a href="'.$link.'">
                <img src="'.$images[0]['src'].'" title="'.$images[0]['alt'].'" alt="'.$images[0]['alt'].'" class="image10">
              </a>
            </li>';

    

 



} 

}



echo '</div>';



?>
            
            
            
            
         
          </ul>
        </div>
      </div>
    </div>

    <div id="descriptions">

    </div>
























</div>
<div class="title_video_gallery">
 <h1 class="gallery color_white">VIDEO GALLERY</h1>	
</div>
<div class="embassy_gallery_video">
	
	
<div class="temporary_video_gallery">


<div class="w_box" style="display: inline; float: left; height: 425px; margin-left: 0; width: 425px;">
		
		<div class="w_header"><a href="http://player.vimeo.com/video/107886547" class="vimeo cboxElement"><img src="http://embassygrand.ca/wp-content/uploads/2014/10/weddings.jpg"></a></div>
		 
		
		
	</div>
	
	
	<div class="w_box" style="display: inline; float: left; height: 425px; margin-left: 0; width: 425px;">


<div class="w_header"><a href="http://player.vimeo.com/video/107888159" class="vimeo cboxElement"><img src="http://embassygrand.ca/wp-content/uploads/2014/10/events.jpg"></a></div>
 



</div>

<div class="w_box" style="display: inline; float: left; height: 425px; margin-left: 0; width: 425px;">


<div class="w_header"><a href="http://player.vimeo.com/video/106434237" class="vimeo cboxElement"><img src="http://embassygrand.ca/wp-content/uploads/2014/10/food.jpg"></a></div>
 



</div>


</div>
	
	
</div>


<div class="embassy_gallery_divider"></div>





<script>
	
	$(document).ready(function(){
  $('.slider4').bxSlider({
    slideWidth: 319,
    minSlides: 2,
    maxSlides: 4,
    moveSlides: 1,
    slideMargin: 0
  });
});
</script>

	<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>



<?php get_footer(); ?>