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
      
      <?php echo do_shortcode('[instagram-feed]');?>
    
    
      <div class="text-block-11">© From Below Studio <?php echo date('Y');?></div>
     <!--  <div class="text-block-12">Made by Humberto Zayas</div> -->
    </div>
</div>
<?php else:?>
  <div style="padding: 9em 0;" class="footer">
    <div class="fbs-container">

    
    
      <div class="text-block-11">© From Below Studio <?php echo date('Y');?></div>
      <!-- <div class="text-block-12">Made by Humberto Zayas</div> -->
    </div>
</div>
<?php endif;?>
		</div><!-- .site-content -->

		

	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
<script type="text/javascript">
  // Works on desktop browser only
  // IE 11 and Edge Browser Fixed Element Jump on Scroll - quickfix
if (navigator.userAgent.match(/Trident\//) || navigator.userAgent.match(/Edge\//)) {
    document.body.addEventListener("mousewheel", function(evt) {
        evt.preventDefault();
        var wd = evt.wheelDelta;
        var csp = window.pageYOffset;
        window.scrollTo(0, csp - wd);
    });
}
</script>
</body>
</html>
