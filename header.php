<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>
    <div class="menu">
    <h1>Fleurs d'oranger & chats errants</h1>
    </div>

<input id="toggle" type="checkbox"></input>

<label for="toggle" class="hamburger">
  <div class="top-bun"></div>
  <div class="meat"></div>
  <div class="bottom-bun"></div>
</label>

<div class="nav">
  <div class="nav-wrapper">
  <div class="menu">
    <h1>Fleurs d'oranger & chats errants</h1>
    </div>
  <img class="mini_logo" src="<?php echo get_template_directory_uri() . '-child/assets/images/mini_logo.png'; ?> " alt="logo">
  
  <img class="Orchid" src="<?php echo get_template_directory_uri() . '-child/images-menu/Orchid.png'; ?> " alt="Orchid">
  <img class="cat" src="<?php echo get_template_directory_uri() . '-child/images-menu/cat.png'; ?> " alt="cat">
  <img class="Flower" src="<?php echo get_template_directory_uri() . '-child/images-menu/Flower.png'; ?> " alt="Flower">
  <img class="cat2" src="<?php echo get_template_directory_uri() . '-child/images-menu/cat2.png'; ?> " alt="cat2">
  <img class="Sunflower" src="<?php echo get_template_directory_uri() . '-child/images-menu/Sunflower.png'; ?> " alt="Sunflower">
  <img class="Random-Flower" src="<?php echo get_template_directory_uri() . '-child/images-menu/Random-Flower.png'; ?> " alt="Random-Flower">
  <img class="cat3" src="<?php echo get_template_directory_uri() . '-child/images-menu/cat3.png'; ?> " alt="cat3">
  <img class="Hibiscus" src="<?php echo get_template_directory_uri() . '-child/images-menu/Hibiscus.png'; ?> " alt="Hibiscus">
  
  <p>STUDIO KOUKAKI</p>
  
  <nav>
      <a href="#">Histoire</a><br>
      <a href="#">Personnages</a><br>
      <a href="#">Lieu</a><br>
      <a href="#">Studio Koukaki</a>
    </nav>
  </div>
</div>