<?php 

// function that runs when shortcode is called
function wpb_demo_shortcode($service) { 


  ob_start();
  $service_list = $service['service_id'];
  $service_link = $service['service_link'];
  //$my_array1 = str_split($service_list); 
  $myArray = explode(',', $service_list);
  $trimmed_myArray = array_map('trim',$myArray);
 
  $servicesList = get_template_part('includes/service', 'list', array( 
    'service_id' => $trimmed_myArray,
    'service_link' => $service_link
    ));
  
  $servicesList  = ob_get_clean();
  //Output needs to be return
  return $servicesList;
  }

  // function that runs when shortcode is called
function wpb_articles_carousel_shortcode() { 

  ob_start();
  
  $carousel =  get_template_part('includes/articles', 'carousel' );
    
  $carousel  = ob_get_clean(); // store buffered output content.

  return $carousel; // Return the content.
  // Output needs to be return
  //return $service_list;
  }

  // register shortcode
  add_shortcode('services', 'wpb_demo_shortcode');
  add_shortcode('articles_carousel', 'wpb_articles_carousel_shortcode');