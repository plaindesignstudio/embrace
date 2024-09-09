<?php get_header(); ?>

<div id="logoTrigger position-absolute top-0"></div>

<!-- SpeechMatters TOP BANNER -->
<?php get_template_part('includes/banner', 'home') ?>

<!-- About us -->
<div class="full-height-div bg-primary text-light" style="min-height: 50vh">

    <div class="table-container" style="min-height: 50vh">

        <div class="centre-content">
            <div class="container z-index-100">
                <div class="row">
                    <div class="wp-spacer-md"></div>

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
                                <h2 class="display-4 text-secondary font-weight-bold">About Embrace</h2>
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
                <div class="wp-spacer-md"></div>
            </div>
        </div>
    </div>
</div>

<!-- Our Values Loops -->
<div class="bg-light overflow-hidden py-5" id="fourblockTrigger">
    <div class="container">

        <div class="row reveal-children-left text-primary">
            <h4>Our Values</h4>
            <hr />
            <div class="col-4">
                <h5>Root Cause Solutions for Lasting Health </h5>
                <p>We dive deep to identify and address the root causes of your health issues, ensuring sustainable and
                    long-term wellness. Our approach goes beyond symptoms to achieve real, lasting results.</p>
            </div>
            <div class="col-4">
                <h5>Root Cause Solutions for Lasting Health </h5>
                <p>We dive deep to identify and address the root causes of your health issues, ensuring sustainable and
                    long-term wellness. Our approach goes beyond symptoms to achieve real, lasting results.</p>
            </div>
            <div class="col-4">
                <h5>Root Cause Solutions for Lasting Health </h5>
                <p>We dive deep to identify and address the root causes of your health issues, ensuring sustainable and
                    long-term wellness. Our approach goes beyond symptoms to achieve real, lasting results.</p>
            </div>
            <div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light">
    <?php echo do_shortcode('[services service_id="16, 18" service_link="true"]'); ?>
</div>

<!-- Articles Carousel-->
<div class="bg-light py-4">
    <?php // get_template_part('includes/articles', 'carousel') ?>
    <?php echo do_shortcode('[articles_carousel]'); ?>
</div>



<?php get_footer(); ?>