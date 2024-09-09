<div class="full-height-div bg-light overflow-hidden">
    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

    <div class="table-container">


        <div class="container-fluid z-index-100 h-100">
            <div class="row h-100">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 z-index-100 align-self-center px-5 reveal-children-right">
                    <div class="wp-spacer-xl" id="iconswrapper"> </div>

                    <h1 class="display-4 text-primary font-weight-bold">Time to Embrace<br><span>Health &
                            Fitness</span></h1>
                    <?php the_excerpt(); ?>
                    <a href="<?php echo site_url(); ?>/about-us"><button class="btn-primary-outline mx-auto">About
                            Us</button></a>
                    <div class="wp-spacer-lg"> </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 z-index-100 bg-primary h-100 position-relative">
                    <div class="w-100 h-100 div-overlay-bg" style="opacity: 1">
                        <div class="bg-light fade-in position-absolute m-0"
                            style="background: <?php  echo 'url('. $url.');' ?> background-repeat: no-repeat; background-size: cover; height: 100%; width: 100%; overflow: hidden; opacity: 1; filer: brightness(1) blur(0px); background-positon: center; object-fit: cover;">
                        </div>
                    </div>
                    <div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>