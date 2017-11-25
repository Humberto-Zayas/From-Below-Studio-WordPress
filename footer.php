<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since From Below Studio Theme 1.0
 */
?>
<?php if (is_front_page()):?>
<div class="footer">
    <div class="fbs-container">
      
      <h1 class="heading-13">FOLLOW <a href="https://instagram.com/frombelowstudio" target="_blank" class="link-10">@FROMBELOWSTUDIO</a> ON INSTAGRAM</h1>
      <div class="text-block-13">From Below Studio is a New Jersey based recording and mixing studio. We have special offers and promo codes and pricing on our Instagram feed. <span><a target="_blank" href="https://instagram.com/frombelowstudio" class="link-11">Follow here</a></span> to get the latest news and updates!</div>
      <?php echo do_shortcode('[instagram-feed]');?>
    
    
      <div class="text-block-11">© From Below Studio 2017</div>
      <div class="text-block-12">Made by Humberto Zayas</div>
    </div>
</div>
<?php else:?>
  <div style="padding: 9em 0;" class="footer">
    <div class="fbs-container">

    
    
      <div class="text-block-11">© From Below Studio 2017</div>
      <div class="text-block-12">Made by Humberto Zayas</div>
    </div>
</div>
<?php endif;?>
		</div><!-- .site-content -->

		

	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
