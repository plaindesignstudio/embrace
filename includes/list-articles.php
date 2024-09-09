<div class='container'>
    <div class="wp-spacer-sm"></div>
    <div class='row'>
        <?php if ( have_posts() ) {
            $i = 0;
	while ( have_posts() ) {
		the_post(); 
        $list_cols = "col-xl-4 col-lg-6 col-md-6";
        $image_cols = "col-12";
        $text_cols = "col-12";
        $body_text_color = "text-white";
        $title_text_color = "text-white";
        $title_size = null;
        $background_color = "bg-primary";
        if($i === 0){
        $list_cols = "col-12";
        $image_cols = "col-xl-9 col-lg-9 col-md-6 col-12"; 
        $text_cols = "col-xl-3 col-lg-3 col-md-6 col-12";
        $body_text_color = "text-dark";
        $title_text_color = "text-primary";
        $title_size = null;
        $background_color = "bg-white";
        } 
        ?>
        <div class="<?php echo $list_cols.' '.$body_text_color; ?> z-index-100 float-right mb-2">
            <div class="radius-lg  <?php echo $background_color; ?> overflow-hidden h-100">
                <div class="row">
                    <?php if ( has_post_thumbnail() ): ?>
                    <div class="<?php echo $image_cols ?>">

                        <?php // $url = the_post_thumbnail( 'large' );
                   $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                   ?>
                        <div class="w-100 position-relative h-100 radius-md overflow-hidden" style="min-height: 300px; overflow: hidden;">
                            <div class="position-absolute bg-content top-0 left-0 m-0"
                                style="background:
url('<?php echo $featured_img_url ?>'); background-repeat: no-repeat;
  background-size: cover; height: 100%; width: 100%; overflow: hidden; filter: brightness(0.9) blur(0px); top: 0px; background-position: center">

                            </div>
                        </div>
                    </div>

                    <?php endif; ?>
                    <div class="<?php echo $text_cols ?> p-2 z-index-100 <?php echo $body_text_color; ?> visible">
                    <div class="table-container position-relative" style="min-height: 10vh;">
        <div class="centre-content">
                        <div class="p-2">
                            <a class="childWrapper mb-4" href="<?php the_permalink(); ?>">

                                <div class="">
                                    <h4 class='mb-2 fs-2 <?php echo $title_text_color ?>'><?php the_title(); ?></h4>
                                    <div class="mt-1 d-flex">
                                        <?php  $author_url = get_author_posts_url( get_the_author_meta('ID') );
		                              $author_display_name = get_the_author(); ?>
                                        <a class="<?php echo $body_text_color; ?>" href="<?php echo $author_url ?>" rel="author">
                                            <div class="rounded-circle <?php echo $body_text_color; ?> float-left pl-2"
                                                style="width: 40px; height: 40px; overflow:hidden"><img alt=""
                                                    src="https://secure.gravatar.com/avatar/140645635fe9ac190fb45cc839600c05?s=40&amp;d=mm&amp;r=g"
                                                    srcset="https://secure.gravatar.com/avatar/140645635fe9ac190fb45cc839600c05?s=80&amp;d=mm&amp;r=g 2x"
                                                    class="avatar avatar-40 photo" height="40" width="40" loading="lazy"
                                                    decoding="async"></div>
                                        </a>
                                        <small class="rpwe-author <?php echo $body_text_color; ?> m-1"><a class="<?php echo $body_text_color; ?>"
                                                href="<?php echo $author_url ?>"
                                                rel="author"><?php echo $author_display_name ?></a> | <a
                                                class="<?php echo $body_text_color; ?>"
                                                href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));  ?>"
                                                rel="author"><?php the_date(); ?></a></small>


                                    </div>
                                </div>
                        </div>
                        </a>
                    </div>
                </div>
                </div>
                </div>

            </div>
        </div>
        <?php
        $i++;
   }}
   // wp_reset_postdata();
?>

    </div>
    <div class="wp-spacer-md"></div>
</div>