<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since From Below Studio Theme 1.0
 */

get_header(); ?>

<?php// if (is_page(array('Cart', 'Checkout'))):?>
<!-- <div id="primary" class="fbs-container"> -->
<?php// else:?>
<div id="primary" class="content-area">
<?php// endif;?>
	<main id="main" class="site-main" role="main">
    <div class="booking-session-section">
    <div class="fbs-container">
      <div class="text-block-36-copy">Book Your Recoring Session</div>
      <h1 class="heading-13">Choose your session engineer</h1>
      <div class="booking-columns w-row">
        <div class="w-col w-col-2"></div>
        <div class="w-col w-col-4"><img src="images/500x500.png" alt="" class="engineer-1">
          <h1 class="heading-13-copy">Book With Avi</h1>
          <p class="text-block-13">$35/Hour—Minimum 2 hours</p>
          <div data-ix="contact-reveal-6" class="fbs-button"><span class="text-span-12"></span>  BOOK YOUR SESSION</div>
        </div>
        <div class="w-col w-col-4"><img src="images/500x500.png" alt="" class="engineer-1">
          <h1 class="heading-13-copy">Book With Max</h1>
          <p class="text-block-13">$50/Hour—Minimum 2 hours</p>
          <div data-ix="contact-reveal-6" class="fbs-button"><span class="text-span-12"></span>  BOOK YOUR SESSION</div>
        </div>
        <div class="w-col w-col-2"></div>
      </div>
      <div class="_404-social"> |  | </div>
    </div>
  </div>

	</main><!-- .site-main -->

	<?php //get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
