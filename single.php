<?php get_header(); ?>

<div id="titleTrigger"></div>

<?php get_template_part('includes/banner', 'postcontent') ?>

<?php

    global $post;

    $children = get_pages( array( 'child_of' => $post->ID ) );

?>

<div class="full-height bg-content position-relative z-index-100" style="min-height: 50vh;" id="postTrigger">

    <div class="container">
        <div class="row">
            <div class='col-md-12 col-lg-12 col-xl-8 col-12 pt-3'>
                <?php if (have_posts()) : while (have_posts()) :the_post(); ?>


                <?php the_content(); ?>

                <?php endwhile; endif; ?>
            </div>

            <div class='col-md-12 reveal-up col-lg-12 col-xl-4 mx-auto col-12 z-index-100 p-4'>
                <div class="table-container p-0" style="min-height: 0vh">

                    <div class="w-100 h-100 p-0" style="opacity: 1;">

                        <?php get_template_part('includes/contact', 'sidebar') ?>

                        <?php if ( is_page() && count( $children ) > 0 ) : ?>

                        <div class='col-12 p-0 rounded mb-4'>
                            <?php echo do_shortcode("[wpb_childpages_list]"); ?>
                        </div>

                        <?php endif; ?>
                        <div class='p-0 rounded mb-4'>
                            <?php get_template_part( 'template-parts/article/single', 'widgets' ); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="wp-spacer-md"></div>
</div>


<?php get_footer(); ?>