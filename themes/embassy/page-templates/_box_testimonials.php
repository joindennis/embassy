<div class="testimonials">



		  <div class="slider third_slider">
      <ul class="slides">
       
<?

$pages = get_pages( array('child_of' => 116, 'parent' => 116, 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC') );

for ($x = 0; $x < count($pages); $x++) {
if ($x != -1)
echo ' <li class="slide"><figure>';

$src = wp_get_attachment_image_src(get_post_thumbnail_id($pages[$x]->ID), 'full', false, ''); 

echo '<div class="slider_testimonials">
<div class="testimonial">'.$pages[$x]->post_content.'</div>
<div class="person">'.$pages[$x]->post_title.'</div></div>';
echo ' </figure></li>';

}

?> 
     
</ul>
</div><!-- @end .slider -->	

   <a id="view_history" href="reviews/">READ MORE REVIEWS</a>   
</div>