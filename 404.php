<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since From Below Studio Theme 1.0
 */

get_header(); ?>
<div class="home" data-ix="navbar-desktop-scrolled-reveal" id="hero">
	<div class="_404-section">
    <div class="fbs-container">
      <div class="text-block-36">🐔Clucked!</div>
      <h1 class="heading-13">Sorry, the content or page you were looking for was not found...</h1>
      <div class="text-block-9-centered">But you can try searching for it or contacting us.</div>
      <!-- <form action="/search" class="w-form"><input type="search" class="search-input w-input" maxlength="256" name="query" placeholder="Search…" id="search" required=""><input type="submit" value="Search" class="fbs-button hide w-button"></form> -->
      <?php get_search_form(); ?>
      <!-- <div class="fbs-button"><span class="text-span-32"></span> Search</div>
      <div class="fbs-button">Back Home</div> -->
      <div class="text-block-9-centered">Reach out for promo and more: </div>
      <div class="_404-social"><a target="_blank" href="https://facebook.com/frombelowstudio" class="link-14"></a> | <span class="link-13"></span><a target="_blank" href="https://twitter.com/frombelowstudio" target="_blank" class="link-13"></a> | <a target="_blank" href="https://instagram.com/frombelowstudio" target="_blank" class="link-15"></a></div>
    </div>
  </div>
</div>
<?php // contact form
  include(get_template_directory() . "/template-parts/partials/contact-form-template.php"); 
?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
