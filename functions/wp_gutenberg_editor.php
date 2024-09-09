<?php 

/**
 * Gutenberg customisation
 */

 add_theme_support( 'align-wide' );
 add_theme_support( 'editor-styles' );
 add_editor_style( 'gutenberg-styles.css' );
 
 function embrace_custom_colours() {
    // Disable Custom Colors
    add_theme_support( 'disable-custom-colors' );
   
    // Editor Color Palette
    add_theme_support( 'editor-color-palette', array(

      /*$content: #ffffff;
$primary: #1E5F94;
$dark: #000000;
$light: #EFF8FF;
$secondary: #46B3DE;
$grey: #EFEFEF;*/


        array(
           'name'	=> "Primary",
           'slug'	=> 'primary',
           'color'	=> '#034A54',
        ),

        array(
           'name'	=> "Secondary",
           'slug'	=> 'secondary',
           'color'	=> '#F2D79C',
        ),

        array(
         'name'	=> "Light",
         'slug'	=> 'light',
         'color'	=> '#FFFBF3',
      ),

      array(
         'name'	=> "Accent",
         'slug'	=> 'accent',
         'color'	=> '#D16203',
      ),

        array(
           'name'	=> "Dark",
           'slug'	=> 'dark',
           'color'	=> '#1D1D1B',
        ),

        array(
         'name'	=> "White",
         'slug'	=> 'white',
         'color'	=> '#FFF',
      ),
        array(
           'name'	=> "Charcoal",
           'slug'	=> 'charcoal',
           'color'	=> '#414141',
        ),
        array(
           'name'	=> "White Translucent",
           'slug'	=> 'white-translucent',
           'color'	=> 'rgba(255,255,255,0.5)',
        ),
     ) );
     
     
    // Custom gradients
   //   add_theme_support(
   //  'editor-gradient-presets',
   //      array(
   //         array(
   //            'name'     => 'Statewide',
   //            'slug'     => 'statewide-brand-colours',
   //            'gradient' => 'linear-gradient(135deg, #337ED8 0%, #49DEA9 100%)',
   //         )
   //      )
   //   );
 }
 add_action( 'after_setup_theme', 'embrace_custom_colours' );
 
 /* Add the styles for these colours to the head */
 
 add_action('wp_head', 'embrace_custom_colours');
 
 function embrace_custom_colours_styles(){
     
     $customColours = get_theme_support( 'editor-color-palette' )[0];
     $customGradients = get_theme_support( 'editor-gradient-presets' )[0];
     
     echo "<style>";
     
     foreach($customColours as $colour){ ?>
.has-<?= $colour['slug']; ?>-background-color { background-color: <?= $colour['color']; ?>; }
.has-<?= $colour['slug']; ?>-color,
.wp-block-button__link.has-<?= $colour['slug']; ?>-color:hover,
.wp-block-button__link.has-<?= $colour['slug']; ?>-color:active,
.wp-block-button__link.has-<?= $colour['slug']; ?>-color:focus,
.wp-block-button__link.has-<?= $colour['slug']; ?>-color:visited { color: <?= $colour['color']; ?>; }
<?php }
     
     foreach($customGradients as $grad){ ?>
.has-<?= $grad['slug']; ?>-gradient-background { background: <?= $grad['gradient']; ?>; }
<?php }
     
     echo "</style>";
     
 };
 
 /* Autoplay videos inside media-text blocks */
 
 function custom_autoplay_block( $block_content, $block ) {
    if ( $block['blockName'] === 'core/media-text' ) {
       $block_content = str_replace( '<video controls', '<video autoplay loop muted playsline', $block_content );
    }
 
    return $block_content;
 }
 add_filter( 'render_block', 'custom_autoplay_block', 10, 2 );
 
 // Scroll to form success message on reload
 add_filter( 'gform_confirmation_anchor', '__return_true' );
 
 // Custom excerpt length
 function mytheme_custom_excerpt_length( $length ) {
     return 30;
 }
 add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );