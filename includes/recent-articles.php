<div class='container'>
     <div class="wp-spacer-md"></div>
<div class='row'>
<?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="col-xl-6 col-lg-6 col-md-8 mb-4 col-12 mx-auto z-index-100 float-right">
          <div class="col-12 p-3 radius-lg bg-secondary z-index-100 text-light hover-block visible">
           <div class="col-12 p-0">
               <a class="childWrapper mb-4" href="<?php the_permalink(); ?>">

               <div class="mb-3">
                 <h3  class='text-light'><?php the_title(); ?></h3>
                  <p class='text-light'><?php   $content = get_the_content();
       echo wp_trim_words( $content , '30' );
        ?></p>
              <small class="mb-0 text-light">Read More</small>


          </div>
                    </a>
            <div class="mt-1 d-flex">
                 <a class="text-light" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
                     <div class="rounded-circle text-light float-left pl-2" style="width: 40px; height: 40px; overflow:hidden"><?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?></div></a>
                                            <small class="rpwe-author text-light m-1"><a class="text-light" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php echo get_the_author_meta( 'first_name').' '.get_the_author_meta( 'last_name'); ?></a> | <a class="text-light" href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));  ?>" rel="author"><?php echo get_the_date(); ?></a></small>


     </div>
</div>
    </div>
        </div>
    <?php
    endwhile;
    wp_reset_postdata();
?>

</div>
        <div class="wp-spacer-md"></div>
    </div>
