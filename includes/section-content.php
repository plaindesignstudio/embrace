<div class='container'>
    <div class='row reveal-children'>




        <?php
// Check if there are any posts to display
if ( have_posts() ) : ?>


        <?php

// The Loop
while ( have_posts() ) : the_post(); ?>
        <div class="col-12 z-index-100 float-right mb-3 ">
            <div class="col-12 p-2 h-100 bg-content z-index-100 text-primary visible">

                <a class="childWrapper mb-4" href="<?php the_permalink(); ?>">


                    <?php if ( has_post_thumbnail() ): ?>
                    <?php // $url = the_post_thumbnail( 'large' );
                   $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium');
                   ?>
                    <!-- <img src="<?php echo $featured_img_url ?>" class="embrace-radius shadow mb-3"
                        style="max-height: 400px" /> -->

                    <div class="mb-3 h-100 w-100 embrace-radius shadow"
                        style="background: url('<?php echo $featured_img_url ?>') center center / cover no-repeat; height: 100%; width: 100%; min-height: 300px; opacity: 1; filter: brightness(1) blur(0px) saturate(1); top: 0px; translate: none; rotate: none; scale: none; transform: translate(0px, 0px); visibility: inherit;">
                    </div>
                    <?php endif; ?>
                    <h2 class='text-primary'><?php the_title(); ?></h2>
                    <div class=" mb-3">
                        <p class='text-dark'><?php   $content = get_the_content();
       echo wp_trim_words( $content , '30' );
        ?></p>


                    </div>
                </a>
                <div class="mt-1 d-flex">
                    <a class="text-dark"
                        href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"
                        rel="author">
                        <div class="rounded-circle text-dark float-left pl-2"
                            style="width: 40px; height: 40px; overflow:hidden">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?></div>
                    </a>
                    <small class="rpwe-author align-content-center text-primary m-1"><a class="text-secondary"
                            href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"
                            rel="author"><?php echo get_the_author_meta( 'first_name').' '.get_the_author_meta( 'last_name'); ?></a>
                        | <a class="text-primary"
                            href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));  ?>"
                            rel="author"><?php echo get_the_date(); ?></a></small>


                </div>

            </div>
        </div>


        <?php endwhile;
  get_the_posts_pagination( array(
     'mid_size'  => 2,
     'prev_text' => __( 'Back', 'textdomain' ),
     'next_text' => __( 'Onward', 'textdomain' ),
 )  );
else: ?>
        <p>Sorry, no posts matched your criteria.</p>


        <?php endif; ?>
    </div>
</div>
<div class="header-buffer"></div>