<div class="position-relative">
    <div class="container reveal-children-left mb-4">
        <div class="col-lg-6 col-12 text-primary">
            <h5 class="display-6 mb-2">Helpful articles & resources</h5>
            <p class="mb-4">At Embrace, we believe in the power of natural wellness. Our brand, represented by the
                serene imagery of ocean and sand, symbolizes the calming and rejuvenating qualities.</p>
            <div>
				<a href="/category/all_articles/">
                <button class="btn btn-primary">View all articles</button>
</a>
            </div>
        </div>
    </div>
    <div class="wrapper reveal-children align-items-top">
        <?php  $args = array(
    'posts_per_page' => 5,
    'post_type' => 'post'
    
     // Additional arguments to return current post/page
); ?>
        <?php $post_query = new WP_Query($args); ?>
        <?php while($post_query->have_posts() ):
             $post_query->the_post();
            ?>
        <?php 
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <div class="box ">
            <div class="box_wrapper embrace-radius position-relative overflow-hidden">

                <div class="position-absolute h-100 w-100 shadow"
                    style="background: url('<?php echo $url; ?>'); background-repeat: no-repeat;
                     background-size: cover; height: 100%; width: 100%; opacity: 1; filter: brightness(1) blur(0px) saturate(1); top: 0px; background-position: center;">
                </div>
                <div class="gradient-bottom-primary position-absolute top-0 left-0 w-100 h-100"></div>
                <div class="image_spacer"> </div>
                <div class="text-area position-relative text-light">
                    <h6 class="mb-2 display-7"><?php the_title(); ?></h6>
                    <a href="<?php the_permalink(); ?>"><button class="btn btn-light-link">Veiw all
                            services</button></a>
                </div>

            </div>
        </div>
        <?php endwhile; ?>


    </div>


    <div class="container reveal-children-left py-4">
        <div class="col-lg-6 col-12 text-primary">
            <div>
                <button class="prev btn btn-back">back</button>
                <button class="next btn btn-primary-outline">next</button>
            </div>
        </div>
    </div>
</div>