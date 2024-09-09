<?php
/**
* A Simple Category Template
*/

get_header(); ?>
<div class="z-index-100" id="postTrigger">

    <div class="full-height-div bg-light position-relative" style="min-height: 10vh; overflow: hidden;">
        <div class="table-container" style="min-height: 10vh; overflow: hidden;">
            <div class="centre-content">
                <div class='container-fluid'>
                    <div class='row'>
                        <div class='col-md-12 col-xl-12 col-lg-12 col-12 p-0 mx-auto z-index-100'>
                            <div class="container">
                                <div class="wp-spacer-lg display-md"></div>
                                <div class="wp-spacer-lg hide-lg"></div>
                                <div class='col-12'>
                                    <?php echo get_the_archive_title() ?>
                                </div>
                                <?php if ( category_description() ) : ?>
                                <div class="archive-meta col-md-12 col-lg-8"><?php echo category_description(); ?></div>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class='col-md-4  col-lg-4 col-12 p-0 mx-auto z-index-100'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

    global $post;

    $children = get_pages( array( 'child_of' => $post->ID ) );

?>

<div class="full-height z-index-100" style="min-height: 50vh;" id="postTrigger">
    <div class="wp-spacer-sm"></div>
    <div class="container">
        <div class="row">
            <div class='col-md-8 col-lg-8 col-xl-8 col-12 p-0'>
                <?php get_template_part('includes/section', 'content') ?>


            </div>

            <div id="sidebarTrigger"
                class='col-md-4 reveal-up col-lg-4 col-xl-4 mx-auto col-12 z-index-100 position-relative'>
                <div class="wp-spacer-sm"></div>
                <div class="table-container p-0" style="min-height: 0vh">

                    <div class="w-100 h-100 p-0 position-relative" style="opacity: 1;">

                        <?php get_template_part('includes/contact', 'sidebar') ?>

                        <div class='z-index-100 p-2 d-none reveal-children-left rounded mb-4 position-relative'>
                            <h4 class="text-primary">Category</h4>
                            <?php
				get_template_part( 'template-parts/article/article', 'widgets' ); ?>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="wp-spacer-md"></div>
</div>


<?php get_footer(); ?>