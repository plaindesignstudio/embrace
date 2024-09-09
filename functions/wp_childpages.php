<?php

function wpb_list_child_pages($atts, $content=null) {

    // Initialize variable and check for shortcode content
    if( $content ) {
        $return = $content;
    }

    // Shortcode attribute: title="Lorem Ipsum"
    if(isset($atts['child_of'])){
        $postId =  $atts['child_of'];
    } else {
        global $post;
        $postId = $post->ID;
    }

    if(isset($atts['page_limit'])){
        $limit =  $atts['page_limit'] - 1;
    }


   // $children = get_pages( array( 'child_of' => $postId ));

   $children = get_pages( array(
        'post_status' => 'publish',
        'order'=> 'ASC',
        'orderby' => 'title',
        'parent' => $postId
    ));


    if( count( $children ) == 0 ) {

        return false;

    } else {

      $return = '<div class="row">';

        $i = 0;

    foreach( $children as $childpage )
    {

        if ( has_post_thumbnail( $childpage->ID) ) {

        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $childpage->ID ), 'single-post-thumbnail' );

        } else {
         $image = 'none';
        }

        $link = get_permalink( $childpage->ID );

        $return .= '<div class="col-xl-6 col-lg-6 col-md-12 mb-4 col-12 mx-auto z-index-100 float-right">'
            .'<div class="col-12 p-2 h-100 radius-lg bg-content z-index-100 text-primary hover-block visible">'
                .'<div class="col-12 p-0">'
                  .'<div class="w-100 h-100 opacity-gradient-dark z-index-100" style="min-height: 100px; overflow: hidden">'
                   .'<a href="' . $link . '">'
                     .'<div class="w-100 radius-md h-100 mb-2 opacity-gradient-dark overflow-hidden z-index-100" style="min-height: 200px;">'
                       .'<div class="bgImage bg-secondary position-absolute top-0 fade-in m-0" data-trigger="titleTrigger" style="background: url(' . "$image[0]" . '); background-repeat: no-repeat;
                         background-size: cover; background-position: center; filter: brightness(1) opacity(1); height: 110%; width: 110%;">'
                      .'</div>'
                      .'</div>'
                     .'<h3 class="mb-1">'.$childpage->post_title.'</h3>'
                     .'<p class="text-dark">'. $childpage->post_excerpt .'</p>'
                     .'<button class="btn btn-primary mb-1">find out more</button>'
                   .'</a>'
                 .'</div>'
               .'</div>'
              .'</div>'
            .'</div>';

        if(isset($atts['page_limit'])){

          if ($i++ == $limit) break;

        }else{

           $i++;

        }

    }

 $return .= '</div>';

 return $return;
    }
}
add_shortcode('wpb_childpages', 'wpb_list_child_pages');


function wpb_childpages_list($atts, $content=null) {

    // Initialize variable and check for shortcode content
    if( $content ) {
        $return = $content;
    }

    // Shortcode attribute: title="Lorem Ipsum"
    if(isset($atts['child_of'])){
        $postId =  $atts['child_of'];
    } else {
        global $post;
        $postId = $post->ID;
    }

    if(isset($atts['page_limit'])){
        $limit =  $atts['page_limit'] - 1;
    }
   //$children = get_pages( array( 'child_of' => $postId, 'depth' => 1 ));
   $childpages = get_pages( array(
        'post_status' => 'publish',
        'order'=> 'ASC',
        'orderby' => 'title',
        'parent' => $postId
    ));


    if( count( $childpages ) == 0 ) {

        return false;

    } else {
      $return = '<div class="container-fluid mt-4"><div class="row">';
     $return .= '<h4>Categories</h4>';

        $i = 0;

    foreach( $childpages as $childpage )
    {

           if ( has_post_thumbnail( $childpage->ID) ) {

        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $childpage->ID ), 'single-post-thumbnail' );

        } else {
         $image = 'none';
        }

        $link = get_permalink( $childpage->ID );



         // $return .= '<div class="position-relative w-100 mb-3">';

   $return .='<div class="h-100 w-100 opacity-gradient-dark z-index-100">'
       .'<a href="' . $link . '">'
   .'<div class="w-100 h-100 opacity-gradient-dark z-index-100">'
   //.'</div>'
. '<div class="mx-auto z-index-100  text-primary p-2">'
.'<h6 class="mb-0 text-text">'.$childpage->post_title.'</h6>'
. '</a>'
.'</div>'
.'</div>'
.'</div>';

        if(isset($atts['page_limit'])){

          if ($i++ == $limit) break;

        }else{

           $i++;

        }

    }

$return .= '</div>';
 $return .= '</div>';

 return $return;
   }
}
add_shortcode('wpb_childpages_list', 'wpb_childpages_list');


function wpb_list_child_pages_slider($atts, $content=null) {

    // Initialize variable and check for shortcode content
    if( $content ) {
        $return = $content;
    }

    // Shortcode attribute: title="Lorem Ipsum"
    if(isset($atts['child_of'])){
        $postId =  $atts['child_of'];
    } else {
        global $post;
        $postId = $post->ID;
    }

    if(isset($atts['page_limit'])){
        $limit =  $atts['page_limit'] - 1;
    }


    // Get our custom posts
    // 'category' is the category ID or a comma separated list of ID numbers
  /*
   if($posts == null){

        $posts = 0;

    } else {

        $posts = $posts;
    }
*/


   // $children = get_pages( array( 'child_of' => $postId ));

        $childpages = get_pages( array(
        'post_status' => 'publish',
        'order'=> 'ASC',
        'orderby' => 'title',
        'parent' => $postId,
    ));


    if( count( $childpages ) == 0 ) {

        return false;

    } else {
      $return = '<div class="container-fluid"><div class="row">';


     $return .= '<div id="controls'.$postId.'" class="carousel slide w-100" data-ride="carousel-'.$postId.'">';

     $return .= '<div class="carousel-inner">';

        $i = 0;

    foreach( $childpages as $childpage )
    {

           if ( has_post_thumbnail( $childpage->ID) ) {

        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $childpage->ID ), 'single-post-thumbnail' );

        } else {
         $image = 'none';
        }

        $link = get_permalink( $childpage->ID );

        if($i == 0){

          $return .= '<div class="childWrapper carousel-item active" style="min-height: 300px;">';

        } else {

          $return .= '<div class="childWrapper carousel-item" style="min-height: 300px;">';
        }


      $return .= '<a href="' . $link . '">'
   .'<div class="w-100 h-100 opacity-gradient-primary z-index-100">'
   .'</div>'
    .'<div class="bgImage bg-primary top-0 fade-in position-absolute m-0" data-trigger="titleTrigger" style="background: url('.$image[0].'); background-repeat: no-repeat;
  background-size: cover; background-position: center; filter: brightness(1) opacity(1); height: 110%; width: 110%;">'
   .'</div>'
. '<div class="col-xl-8 col-lg-8 col-sm-8 bottom-0 mb-3 position-absolute mx-auto z-index-100  text-light bg-primary p-2">'
.'<h5 class="text-light">'.$childpage->post_title.'</h5>'
.'<div class="col-6 p-0">'
.'<small class="text-light mb-0">'
.'find out more'
.'</small>'
.'</div>'
.'</div>'
. '</a>'
// .'</div>'
.'</div>';

 //$return .='<img class="d-block w-100" src="..." alt="First slide">
 //   </div>';

        if(isset($atts['page_limit'])){

          if ($i++ == $limit) break;

        }else{

           $i++;

        }

    }

$return .= '<a class="carousel-control-prev" href="#controls'.$postId.'" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#controls'.$postId.'" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>';

$return .= '</div></div></div> </div>';

 return $return;
    }
}

add_shortcode('wpb_childpages_slider', 'wpb_list_child_pages_slider');


Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

        function widget($args, $instance) {

                if ( ! isset( $args['widget_id'] ) ) {
                $args['widget_id'] = $this->id;
            }

            $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );

            /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
            $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

            $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
            if ( ! $number )
                $number = 5;
            $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

            /**
             * Filter the arguments for the Recent Posts widget.
             *
             * @since 3.4.0
             *
             * @see WP_Query::get_posts()
             *
             * @param array $args An array of arguments used to retrieve the recent posts.
             */
            $r = new WP_Query( apply_filters( 'widget_posts_args', array(
                'posts_per_page'      => $number,
                'no_found_rows'       => true,
                'post_status'         => 'publish',
                'ignore_sticky_posts' => true
            ) ) );

            if ($r->have_posts()) :
            ?>
            <?php echo $args['before_widget']; ?>
            <?php if ( $title ) {
                echo $args['before_title'] . $title . $args['after_title'];
            } ?>
            <div class=''>
            <?php while ( $r->have_posts() ) : $r->the_post(); ?>
               <?php /* <div class="row p-3 mb-3">
                    <a href="<?php the_permalink(); ?>"><div><?php the_post_thumbnail('medium'); ?></div><div class=""><h5><?php get_the_title() ? the_title() : the_ID(); ?></h5></div></a>
                </div> */ ?>


                   <?php $post_thumbnail_id = get_post_thumbnail_id( ); ?>

                           <?php if ($post_thumbnail_id ) { ?>
                     <div class="col-12 p-0 m-0  p-3 mb-3 reveal-up position-relative" style="min-height: 200px;">
                        <a href="<?php the_permalink(); ?>">
         <?php $url = get_the_post_thumbnail_url(); ?>
                    <div class="col-11 bg-primary image-background fade-in position-absolute m-0 shadow" style="opacity: 1;  right: 0px; overflow: hidden">
            <div class="bg-light image-background w-90 fade-in position-absolute m-0 shadow-sm" style="background: url('<?php echo($url); ?>');   background-repeat: no-repeat;
 background-size: cover;
  background-position: center; right: 0;filter: saturate(0.7)opacity(1);
  ">
         </div>
                    </div>
                               <div class='col-sm-8 text-light col-8 mb-3 fade-to-right p-2 z-index-100 bg-primary position-absolute bottom-0' data-scroll-speed="+50" >
                                   <div class="">
    <p  class='text-title'><?php get_the_title() ? the_title() : the_ID(); ?></p>
                                   </div>
          </div>

                </a>
                </div>
                        <?php } else { ?>


                    <?php } ?>




            <?php endwhile; ?>
            </div>
            <?php echo $args['after_widget']; ?>
            <?php
            // Reset the global $the_post as this query will have stomped on it
            wp_reset_postdata();

            endif;
        }
}

/*
function my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');
*/
