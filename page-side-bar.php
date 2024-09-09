<?php get_header(); ?>

<?php
 // Template Name: Side Bar
?>

 <div id="titleTrigger"></div>
  <?php get_template_part('includes/banner', 'content') ?>



       <?php

    global $post;

    $children = get_pages( array( 'child_of' => $post->ID ) );

?>

<div class="full-height bg-content z-index-100" style="min-height: 50vh;" id="postTrigger">

<div class="container">
    <div class="row">
<div class="wp-spacer-md"></div>
        <div class='col-md-12 col-lg-8 col-xl-8 col-12'>
<?php if (have_posts()) : while (have_posts()) :the_post(); ?>


    <?php the_content(); ?>

<?php endwhile; endif; ?>
    </div>

 <div class='col-md-12 reveal-up col-lg-4 col-xl-4 mx-auto col-12 z-index-100'>
       <div class="table-container p-0" style="min-height: 0vh">

    <div class="w-100 h-100 p-0" style="opacity: 1;">

   <?php get_template_part('includes/contact', 'sidebar') ?>
        </div>


    </div>
        </div>
    </div>
</div>
    <div class="wp-spacer-md"></div>
    </div>


<?php get_footer(); ?>
