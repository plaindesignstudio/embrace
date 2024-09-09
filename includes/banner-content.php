<?php if ( has_post_thumbnail() ){
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>




<div id="titlebannerTrigger" class="full-height-div position-relative bg-light"
    style="min-height: 75vh; overflow: hidden;">
    <div class="table-container" style="min-height: 75vh">


        <div class="centre-content">
            <div class="container">
                <div class="col-xl-6 col-lg-4 col-md-12 col-12 p-0 z-index-100">
                    <div class="table-container" style="min-height: 350px;">
                        <div class="centre-content position-relative reveal-children-right">
                            <div class="position-absolute h-100 w-100 embrace-radius shadow"
                                style="background:url('<?php bloginfo('template_directory'); ?>/assets/images/banner/talking-speech-therapist.jpg'); background-repeat: no-repeat; background-size: cover; height: 100%; width: 100%; opacity: 1; filter: brightness(1) blur(0px) saturate(1); top: 0px; background-position: center;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 mx-auto col-lg-8 col-md-12 col-12 z-index-100 my-4">
                    <div class="table-container" style="min-height: 10vh">
                        <div class="centre-content position-relative reveal-children-left py-3">
                            <!-- <div class="wp-spacer-md"></div> -->
                            <h1 class="display-4 text-secondary font-weight-bold">About Embrace</h1>
                            <p class="z-index-100">
                                At Embrace, we believe in the power of natural wellness. Our brand, represented by
                                the serene imagery of ocean and sand, symbolizes the calming and rejuvenating
                                qualities we strive to bring to our clients’ lives. Specializing in alternative
                                holistic approaches, we focus on identifying the root causes of health issues, with
                                a particular emphasis on hormones, thyroid, adrenal, gut health, and detoxification.
                            </p>
                            <p class="z-index-100">
                                Our mission is to provide personalized care that goes beyond conventional medicine,
                                offering a custom approach to each individual’s unique needs and life balance. We
                                take pride in being a beacon of hope for those seeking new options and a balanced
                                approach to well-being.
                            </p>
                            <a href="<?php echo site_url(); ?>/contact"><button class="btn btn-light-link">Find Out
                                    More</button></a>
                            <!-- <div class="wp-spacer-md"></div> -->
                        </div>
                    </div>
                </div>
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