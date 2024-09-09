<?php 

function wpb_locations() { 

         /* $return = '<div class="position-relative col-xl-6 col-lg-6 col-md-12 col-12 mb-3">'
.'<h3 class="text-primary">Formby Salon</h3>'
// .'<div class="col-6 p-0">'
.'<p class="">'
.'Tel: +44 (0)1704 542002'
.'</p>' 
.'<p class="">'
.'Fax: +44 (0)1704 543144'
.'</p>' 
.'<p class="">'
.'law@brownturnerross.com'
.'</p>' 
//.'</div>'
.'</div>';
//.'</div>';
  */  
              $return = '<div class="position-relative col-xl-6 col-lg-6 col-md-12 col-12 mb-3">'
.'<h3 class="text-primary">New Crosby Salon</h3>'
// .'<div class="col-6 p-0">'
.'<p class="">'
.'79 Liverpool Road'
.'</p>'
.'<p class="">'
.'Crosby L23 5TD'
.'</p>'                   
.'<p class="">'
.'07711128172'
.'</p>' 
//.'</div>'
//.'</div>'
.'</div>';

    
 return $return; 

}
add_shortcode('wpb_locations', 'wpb_locations');

