<?php if ( has_post_thumbnail() ){


$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>




<div class="full-height-div position-relative bg-light overflow-hidden" style="min-height: 70vh; overflow: hidden;">
    <div class="table-container position-fixed" style="min-height: 70vh">

        <!-- <div class="w-100 h-100 div-overlay-bg" style="opacity: 1">
            <div class="bg-light fade-in position-absolute m-0"
                style="background:
<?php  echo 'url('. $url.');' ?> background-repeat: no-repeat; background-size: cover; height: 100%; width: 100%; overflow: hidden; opacity: 0.8; filer: brightness(1) blur(0px); background-positon: center; object-fit: cover;">
            </div>
        </div> -->


        <div class="centre-content">
            <div class="container">
                <div class="z-index-100">
                    <div class="row">
                        <div class="wp-spacer-sm"></div>
                        <div class="scrollSpeed" data-trigger="powetopTrigger" data-from='{"yPercent": "0"}'
                            data-to='{"yPercent": "-200", "rotate": "0"}'>
                            <div class='col-xl-8 col-lg-8 col-md-8 col-11 radius-lg z-index-100'>
                                <div class="wp-spacer-xl"></div>
                                <h1 class="mr-1 ml-1 font-weight-bold text-primary" style="z-index: 100">
                                    <?php the_title(); ?></h1>
                                <div class="align-content-center" style="display: inline-flex">
                                    <?php
    global $post;
$author_id = $post->post_author;
   // $author_id = get_the_author_meta( 'ID' );
                                  ?>

                                    <a class="text-primary align-content-center"
                                        href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>"
                                        rel="author">
                                        <div class="rounded-circle text-dark float-left mr-4"
                                            style="width: 40px; height: 40px; overflow:hidden">
                                            <?php echo get_avatar( $author_id, 40 ); ?></div>
                                    </a>
                                    <small class="rpwe-author text-primary pt-2 align-content-center">
                                        <a class="text-primary"
                                            href=" <?php echo esc_url( get_author_posts_url( $author_id ) ); ?>"
                                            rel="author"><?php echo get_the_author_meta( 'first_name', $author_id).' '.get_the_author_meta( 'last_name', $author_id ); ?></a>
                                    </small>
                                    <small class=" p-1 pt-2 text-primary align-content-center">|</small>
                                    <small class="pt-2 text-primary align-content-center"><a class="text-primary"
                                            href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));  ?>"
                                            rel="author"><?php echo get_the_date(); ?></a>
                                    </small>

                                </div>


                            </div>
                        </div>
                        <div class='d-none col-md-4 reveal-up col-lg-4 col-12 p-0 z-index-100'>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>


<?php } else { ?>

<div class=" full-height-div bg-content position-relative" style="min-height: 50vh; overflow: hidden;">
    <div class="table-container" style="min-height: 50vh;">
        <div class="w-100 h-100 div-overlay-bg bg-content" style="opacity: 1">
        </div>
        <div class="centre-content">
            <div class="container-fluid">
                <div class="position-relative z-index-100">
                    <div class="row">
                        <div class="wp-spacer-xl"></div>
                        <div class="wp-spacer-md"></div>
                        <div class='col-12 mx-auto'>
                            <div class='col-md-10 col-lg-10 col-12 mx-auto'>
                                <div class="" style="top: 0px; z-index: 0; transform: matrix(1, 0, 0, 1, 0, 0);"
                                    data-trigger="titleTrigger" data-scroll-speed="+100">
                                    <h1 class="mr-1 ml-1 text-secondary font-weight-bold text-center"
                                        style="z-index: 100"><?php the_title(); ?></h1>
                                </div>
                            </div>
                        </div>
                        <div class='d-none col-md-4 reveal-up col-lg-4 col-12 p-0 z-index-100'>
                        </div>
                    </div>
                    <div class="wp-spacer-xl"></div>
                </div>
            </div>
        </div>
    </div>


</div>


<?php }?>