<?php 
/**
 * This is the template that displays everything in the <head> section of the website
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="container">

  <div id="masthead" class="header-main">
    <div class="header-main__logo-containr">
      Some Image Goes Here
    </div><!-- .header-main_logo-container -->
    <nav class="nav-main">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav><!-- .nav-main -->
    <div class="hamburger-btn">
      <div class="line-1"></div>
      <div class="line-2"></div>
      <div class="line-3"></div>
    </div><!-- .hamburger-btn -->
  </div><!-- .header-main -->