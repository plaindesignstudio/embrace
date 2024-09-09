<div class="container">



    <?php $the_query = new WP_Query(array( 'post_type' => 'page', 'post__in' => $args['service_id'] )); ?>
    <?php $i = 1; ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <?php $list_order = null ?>
    <?php if ($i % 2 == 0) {
        $list_order = 'order-md-2';
        }  ?>
    <div class="row justify-content-around" id="service-<?php echo $post->ID ?>">


        <div class="col-xl-5 col-lg-4 col-md-6 col-12 scrollSpeed <?php echo $list_order ?> z-index-100"
            data-from='{"yPercent": "8"}' data-to='{"yPercent": "-15"}' data-trigger="service-<?php echo $post->ID ?>">
            <div class="table-container" style="min-height: 550px;">
                <div class="centre-content position-relative reveal-children">
                    <div class="wp-spacer-xl"></div>
                    <div class="wp-spacer-xl"></div>
                    <div class="position-absolute h-100 w-100 embrace-radius shadow"
                        style="background:
url('<?php echo $url ?>'); background-repeat: no-repeat;
background-size: cover; height: 100%; width: 100%; opacity: 1; filter: brightness(1) blur(0px) saturate(1); top: 0px; background-position: center;">
                    </div>
                    <div class="wp-spacer-xl"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-8 col-md-6 col-12 order-md-1 z-index-100 my-4">
            <div class="table-container" style="min-height: 10vh">
                <div class="centre-content position-relative reveal-children-left">

                    <h3 class="display-6 text-primary font-weight-bold"><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <a href="<?php echo get_permalink($post->ID); ?>"><button class="btn-accent">Find Out
                            More</button></a>

                </div>
            </div>
        </div>
    </div>
    <?php $i++; ?>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>

    <?php if($args['service_link']){ ?>

    <div class="pt-3 pb-5 mt-4 col-md-6 col-12 text-center mx-auto reveal-children">
        <p class="text-uppercase text-accent lead">More about our services</p>
        <div><small class="mb-4">Our mission is to provide personalised care that goes beyond conventional medicine,
                offering
                a custom
                approach to each individual’s unique needs and life balance. We take pride in being a beacon of hope for
                those seeking new options and a balanced approach to well-being.</small></div>
        <a href="/services/"><button class="btn btn-primary-link mt-4">Veiw all services</button></a>
    </div>
    <?php
}else{ ?>
    <div class="wp-spacer-sm"></div>
    <?php }?>
</div>