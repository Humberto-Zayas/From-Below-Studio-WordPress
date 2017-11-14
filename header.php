<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since From Below Studio Theme 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	 <script type="text/javascript">WebFont.load({
  google: {
    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Oswald:200,300,400,500,600,700","Varela Round:400","Dosis:200,regular,600"]
  }
});</script>
 <script type="text/javascript">
   $(window).load(function(){
      $('.loading').fadeOut();
   });
 </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <style type="text/css">
    .loading { display: block }
  </style>
</head>
<div class="loading">
  <img src="<?php bloginfo('template_url');?>/images/volume-bar-loading-4.gif" class="image-30">
  <h3 style="width: 100%; text-align: center; margin-top:50px; color: white" class="image-30 loading-text">Loading the Session</h3>
</div>
<body class="body" <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<div id="content" class="site-content">
			  <div class="navbar-fbs-fixed w-nav" data-animation="default" data-collapse="medium" data-duration="400">
    <div class="w-container"><a class="brand w-nav-brand" href="#"><img alt="From Below Studio - New Jersey Recording Studio and Mixing Services" class="fbs-logo-fixed" src="<?php bloginfo('template_url');?>/images/fbs-logo-demo.png" ></a>
      <nav class="nav-menu-2 w-nav-menu" role="navigation"><a class="nav-link w-nav-link" href="#hero">HOME</a><a class="nav-link w-nav-link" href="#service-section">SERVICES</a><a class="nav-link w-nav-link" href="#pricing-section">PRICING</a><a class="nav-link w-nav-link" href="#about">ABOUT</a><a class="nav-link w-nav-link" data-ix="contact-reveal" href="#">CONTACT</a><a class="nav-link w-nav-link" data-ix="contact-reveal" href="tel:609-469-4340">CALL: 609-469-4340</a></nav>
      <div class="menu-button-2 w-nav-button">
        <div class="icon-2 w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="navbar-fbs-static w-nav" data-animation="default" data-collapse="medium" data-duration="400" data-ix="navbar-init-load-reveal">
    <div class="container w-container"><a class="w-nav-brand" href="#"><img alt="From Below Studio - New Jersey Recording Studio and Mixing Services" class="image" sizes="100px" src="<?php bloginfo('template_url');?>/images/fbs-logo-demo.png" ></a>
      <nav class="nav-menu w-nav-menu" role="navigation"><a class="nav-link w-nav-link" href="#hero">HOME</a><a class="nav-link w-nav-link" href="#service-section">SERVICES</a><a class="nav-link w-nav-link" href="#pricing-section">PRICING</a><a class="nav-link w-nav-link" href="#about">ABOUT</a><a class="nav-link w-nav-link" data-ix="contact-reveal-3" href="#">CONTACT</a><a class="nav-link w-nav-link" href="tel:609-469-4340">CALL: 609-469-4340</a></nav>
      <div class="menu-button w-nav-button">
        <div class="icon w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
