<?php 


function getcategories($post_id=null) { 
    $post_categories = wp_get_post_categories( $post_id );
    // $cats = array();
     
    $cattags = "";
     foreach($post_categories as $c){
         $cat = get_category( $c );
         
         $catid = site_url().'/category/'.$cat->slug;
         
         $cattags .= "<a href='".$catid."' class='text-secondary pr-2'>";
         $cattags .= $cat->name;
         $cattags.= "</a>";
         //$cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
     }
    return $cattags;
}


function cat_post($atts=null) { 
    
   // Shortcode attribute: title="Lorem Ipsum"
    if(isset($atts['cat'])){
        $catname =  $atts['cat'];
        $idObj = get_category_by_slug($atts['cat']); 
        $current_cat_id = $idObj->term_id;
       } else {
        $catname =  '';
        $current_cat_id = '';
       }
    
        
    if(isset($atts['posts_per_page'])){
        $showposts =  $atts['posts_per_page'];   
     }else {
        $showposts = -1;
    }
    
global $post;
    
$args = array('cat' => $current_cat_id, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page'=>$showposts);
    
$my_posts = get_posts( $args );
    
    if( ! empty( $my_posts ) ){
        $return = "";
   foreach($my_posts as $p) {
       
          if ( has_post_thumbnail( $p->ID) ) {
              
                  //$categories = array_values( $categories );
       
       $link = get_permalink( $p->ID );
       $excerpt = get_the_excerpt( $p->ID, 100 );
       
        $return .= '<div class="col-xl-6 col-lg-5 col-md-8 mb-4 col-12 mx-auto z-index-100 float-right">';
        $return .='<div class="col-12 p-4 h-100 radius-lg bg-content z-index-100 text-primary reveal-up hover-block visible">';
           $return .= "<small class='text-secondary'>";
           
          $return .=  getcategories($p->ID);
           
           $return .="</small>"
            .'<a href="' . $link . '">';
            $return .='<h4 class="font-weight-bold text-primary">'.$p->post_title.'</h4>'
.'<div class="col-12 p-0">';
                
     $image = wp_get_attachment_image_src(get_post_thumbnail_id( $p->ID ), 'single-post-thumbnail');
           
    $return .='<div class="w-100 h-100 opacity-gradient-dark z-index-100" style="min-height: 100px; overflow: hidden">';
    $return .='<div class="w-100 rounded h-100 mb-4 opacity-gradient-dark overflow-hidden z-index-100" style="min-height: 200px;">'
    .'<div class="bgImage bg-secondary position-absolute top-0 fade-in m-0" data-trigger="titleTrigger" style="background: url('.$image[0].'); background-repeat: no-repeat;
  background-size: cover; background-position: center; filter: brightness(1) opacity(1); height: 110%; width: 110%;">'
   .'</div>'
    .'</div>';

 $return .='<p class="text-primary">'
     . $excerpt
     .'</p>'
     .'<button class="btn btn-light mb-3">'
.'find out more'
.'</button></a>'             
.'</div>'
     .'</div>';
$return .='</div>';
$return .='</div>';
   }    else {
        } 
  }  
    }    
    else {
        }
return $return;
    
}
add_shortcode('categorypost', 'cat_post');