<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<div class="sticky top-0 z-custom">
<div class="flex justify-center font-buluc items-center nav-bar-buluc">
<?php
if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
} 
?>
<div id="menu_buluc" class="lg:container mx-auto">
<?php wp_nav_menu( array( 'container_class' => 'main-nav center', 'theme_location' => 'header-menu' ) );?>
</div>
<div class="humburger_menu">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
</div>
</div>
<div class="hamburger-mobile transition-opacity	duration-500">
<h1 class="nume font-sans"><span class="punct">&#8226;</span>buluc</h1>
<?php wp_nav_menu( array( 'container_class' => 'main-nav-mobile  center', 'theme_location' => 'header-menu' ) );?>
</div>

