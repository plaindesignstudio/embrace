<?php get_header(); ?>

<?php 
 // Template Name: Full Width
?>

<?php get_template_part('includes/banner', 'content') ?>

<div class="full-height bg-content text-light position-relative">
<div class="container-fluid p-0">
               <div class="z-index-100  position-absolute " style="width: 200px; left: 1%; opacity: 0.1; top:-30%;">
                 <div data-trigger="toppage" data-scroll-speed="+100"> 
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/banner/circles.svg">
            </div>
            </div>


<?php if (have_posts()) : while (have_posts()) :the_post(); ?>

    <?php the_content(); ?> 

<?php endwhile; endif; ?>

</div>
    </div>


<?php get_footer(); ?>