<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>

<title><?php echo bloginfo('name'),wp_title(); ?></title>
</head>
    

    
<body <?php body_class(); ?> class="bg-content">

    
<div>
    

    
	<div id="content" class="site-content">
<?php get_template_part( 'navigation', 'navigatio.php' ); ?>  
        <div class="postion-relative">