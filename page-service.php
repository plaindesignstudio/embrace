<?php get_header(); ?>

<?php
 // Template Name: Service page
?>

<div id="titleTrigger"></div>
<?php get_template_part('includes/banner', 'service') ?>

<!-- <div class="full-height text-light position-relative">
    <div class="container-fluid p-0"> -->

<?php if (have_posts()) : while (have_posts()) :the_post(); ?>

<?php the_content(); ?>

<?php endwhile; endif; ?>

<!-- </div>
</div> -->


<?php get_footer(); ?>