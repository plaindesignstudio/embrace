<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>
</div>
</div>


<?php wp_footer(); ?>
<!-- Footer -->
<div class="w-100 bg-content d-none">
<div class="container text-center"> <div class="row">
    <div class="wp-spacer-sm"></div>
<?php//  echo do_shortcode("[wpb_locations]"); ?>
    <div class="wp-spacer-sm"></div>
    </div>
    </div>
</div>
<footer class="page-footer font-small position-relative bg-primary w-100">
  <!-- Footer Links -->
  <div class="body-footer container-fluid text-center p-4 text-primary bg-primary text-md-left">
        <div class="row">
      <?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );
?>
      </div>
    </div>

<div class="page-footer font-small mb-0 p-2">
      <p class="text-center col-12 p-0 m-0 text-light"><small><?php get_template_part( 'template-parts/footer/site', 'info' ); ?> Created by <a class="text-content" href="https://www.plaindesignstudio.co.uk/">Plain Design Studio</a></small></p>
</div>
</footer>
<!-- Footer -->
