<?php if ( has_post_thumbnail() ){
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<div class="full-height-div bg-light text-primary" style="min-height: 50vh">

    <div class="table-container" style="min-height: 50vh">

        <div class="centre-content">
            <div class="container pt-5 z-index-100">
                <div class="row pt-4">
                    <div class="wp-spacer-md display-md"></div>

                    <div class="col-xl-6 col-lg-5 col-md-12 col-12 z-index-100">
                        <div class="table-container" style="min-height: 350px;">
                            <div class="centre-content position-relative reveal-children-right">
                                <div class="position-absolute h-100 w-100 embrace-radius shadow"
                                    style="background:
url('<?php echo $url ?>'); background-repeat: no-repeat;
background-size: cover; height: 100%; width: 100%; opacity: 1; filter: brightness(1) blur(0px) saturate(1); top: 0px; background-position: center;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 mx-auto col-lg-7 col-md-12 col-12 z-index-100 my-5">
                        <div class="table-container" style="min-height: 10vh">
                            <div class="centre-content position-relative reveal-children-left">

                                <p class="lead text-uppercase mb-1 text-accent">Service from embrace</p>
                                <h1 class="text-primary display-4 font-weight-bold"><?php the_title(); ?></h1>
                                <?php the_excerpt(); ?>
                                <a href="<?php echo site_url(); ?>/contact"><button class="btn btn-light-link">Find Out
                                        More</button></a>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="wp-spacer-lg  display-md"></div>
            </div>
        </div>
    </div>
</div>


<?php } else { ?>

<div id="logoTrigger position-absolute top-0"></div>

<div class="full-height-div" style="min-height: 50vh">


    <div class="table-container" style="min-height: 50vh">
        <div class="centre-content">
            <div class="wp-spacer-xl" id="iconswrapper"> </div>
            <div data-trigger="logoTrigger" data-scroll-speed="+100">

                <div class="container z-index-100">
                    <div class="row">

                        <div class="col-xl-8 mx-auto text-center col-lg-10 col-md-12 col-12 z-index-100">

                            <h1 class="display-3 font-weight-bold"><?php the_title(); ?></h1>


                        </div>

                    </div>
                </div>

            </div>

            <div class="wp-spacer-sm"></div>



        </div>
    </div>
</div>

<?php }?>