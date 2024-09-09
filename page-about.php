<?php get_header(); ?>

<?php
 // Template Name: About Us
?>

 <div id="titleTrigger"></div>
  <?php get_template_part('includes/banner', 'content') ?>



       <?php

    global $post;

    $children = get_pages( array( 'child_of' => $post->ID ) );

?>


<div class="container">
    <div class="row">
<div class="wp-spacer-md"></div>

<!-- Illustrations -->
<div id="vicTrigger" class="full-height-div mobile-text-center mb-3" style="min-height: 75vh">
 <img class="scrollSpeed position-absolute z-index-100" data-trigger="vicTrigger" data-from='{"yPercent": "100"}' data-to='{"yPercent": "10"}' style="bottom: 20%; left: -10%; max-width: 100px; min-width: 50px;" width="20%"  src="<?php bloginfo('template_directory'); ?>/assets/images/banner/quote-marks.svg">
  <div class="table-container" style="min-height: 75vh">
 <div class="wp-spacer-md"></div>
 <div class="centre-content">
<div class="container z-index-100">
<div class="row">
  <div class="col-xl-4 col-lg-4 col-md-12 col-12 h-100 top-0 mb-2 p-0 position-relative z-index-100" style="min-height: 500px;">
           <div class="position-absolute h-100 w-100 radius-lg  shadow" style="background:
 url('<?php bloginfo('template_directory'); ?>/assets/images/banner/vicky-speech-matters.jpg'); background-repeat: no-repeat;
    background-size: cover; height: 100%; width: 100%; opacity: 1; filter: brightness(1) blur(0px) saturate(1); top: 0px; background-position: center;">
          </div>

                       </div>
       <divS class="mx-auto col-xl-6 col-lg-6 col-md-12 col-12 z-index-100">
 <div class="table-container reveal-up" style="min-height: 10vh">
   <img class="scrollSpeed position-absolute" data-trigger="vicTrigger" data-from='{"yPercent": "100"}' data-to='{"yPercent": "-20", "rotate": "20"}'  style="top:-20%; min-width: 200px; width: 20%; right: -20%;" src="<?php bloginfo('template_directory'); ?>/assets/images/banner/semi-circle.svg">
     <div class="centre-content position-relative">
     <h3 class="font-weight-bold display-4 text-secondary">Victoria Allanson</h3>
     <h5 class="font-weight-bold text-primary">BSc Hons, BA Hons, MRCSLT</h5>
     <p>I am a specialist speech and language therapist with several years experience working in the NHS. I have a wide range of experience in working with adults, including those with neurological conditions (stroke, Parkinson’s), mental health, autism, learning disability and dementia. I have specialist training in stammering, alternative and augmentative communication and autism diagnosis.</p>
      <p>I am really person centred and love working with people to achieve their goals.</p>
       <p>I live on the Wirral and work across Liverpool, South Sefton, Wirral, West Cheshire, Knowsley and Halton. I can offer virtual consultations if you are out of area.</p>

     </div>

         </div>
 </div>


      <div class="wp-spacer-sm"></div>
         </div>
    </div>
</div>
</div>
</div>
          <!-- Sophie -->
          <div id="sophiaTrigger" class="full-height-div mb-3 mobile-text-center" style="min-height: 75vh">


            <div class="table-container" style="min-height: 75vh">
           <div class="wp-spacer-md"></div>
           <div class="centre-content">
          <div class="container z-index-100">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 col-12 h-100 top-0 mb-2 p-0 position-relative z-index-100" style="min-height: 500px;">
                     <div class="position-absolute h-100 w-100 radius-lg  shadow" style="background:
           url('<?php bloginfo('template_directory'); ?>/assets/images/banner/sophia-about-us-team.jpeg'); background-repeat: no-repeat;
              background-size: cover; height: 100%; width: 100%; opacity: 1; filter: brightness(1) blur(0px) saturate(1); top: 0px; background-position: center;">
                    </div>

                                 </div>
                 <div class="mx-auto col-xl-6 col-lg-6 col-md-12 col-12 z-index-100">
           <div class="table-container reveal-up" style="min-height: 10vh">
               <div class="centre-content position-relative">
                   <img class="scrollSpeed position-absolute" data-trigger="sophiaTrigger" data-from='{"yPercent": "100"}' data-to='{"yPercent": "30", "rotate": "90"}'  style="top: -30%; right: -10%; min-width: 100px;" width="20%"  src="<?php bloginfo('template_directory'); ?>/assets/images/banner/triangle.svg">
               <h3 class="font-weight-bold display-4 text-secondary">Sophia Riozzi</h3>
               <h5 class="font-weight-bold text-primary">BSc Hons, MRCSLT</h5>
               <p>I am a specialist Speech and Language Therapist with over seven years experiences working within the NHS. I have experience of working with an adult caseload in community, rehab and acute settings.</p>
               <p>I have extensive knowledge and skills with a range of client groups, including brain injury; stroke; Dementia; Parkinson’s; MND; MS.</p>
               <p>I also have experience with stammer and voice.</p>
               <p>I am committed to working with clients and their families, building a good working relationship to help you achieve your communication goals.</p>
                  <p>I live in Liverpool and work across Liverpool, South Sefton, Wirral, West Cheshire, Knowsley and Halton. I can offer virtual consultations if you are out of area.</p>
               </div>

                   </div>
           </div>


                <div class="wp-spacer-sm"></div>
                   </div>
              </div>
          </div>
          </div>
        </div>

 <div class='mx-auto col-12 z-index-100'>

       <div class="table-container p-0" style="min-height: 0vh">

                        <?php if ( is_page() && count( $children ) > 0 ) : ?>
        <div class='col-12 rounded mb-4 ' data-scroll-speed="-75">

            <div class="position-absolute" style="width: 100px; right: -10%; top: -10%; opacity: 0.2">
                 <div data-trigger="logoTrigger" data-scroll-speed="+100">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/banner/circles-right.svg">
            </div>
            </div>
                  <?php echo do_shortcode("[wpb_childpages_slider]"); ?>


        </div>

                  <?php endif; ?>
    <div class="w-100 h-100 p-0" style="opacity: 1;">

   <?php get_template_part('includes/contact', 'sidebar') ?>

                        <?php if ( is_page() && count( $children ) > 0 ) : ?>
        <div class='col-12 rounded mb-4 ' data-scroll-speed="-75">
                  <?php echo do_shortcode("[wpb_childpages_list page_limit=5]"); ?>

                    <div class="position-absolute bottom-0" style="width: 100px; right: 1%; opacity: 0.2">
                 <div data-trigger="logoTrigger" data-scroll-speed="+100">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/banner/circles-right.svg">
            </div>
            </div>
        </div>

                  <?php endif; ?>
             <div class='p-0 rounded mb-4' data-scroll-speed="-75">
      <?php
				get_template_part( 'template-parts/article/single', 'widgets' );
?>
         </div>
        </div>


    </div>
        </div>
    </div>
    <div class="wp-spacer-md"></div>
    </div>


<?php get_footer(); ?>
