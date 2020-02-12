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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
  

  // // moving coupon code field
  
  // // get all elements with .woocommerce-info-wrapper class ie: returning customer login & coupon code
  // var wooinfo = $(".woocommerce-info-wrapper");

  // // get the form login and checkout logins
  // var formlogin = $(".woocommerce-form-login");
  // var coupon = $(".checkout_coupon");

  // // move all wooinfo elements to appropriate spot
  // $(wooinfo).insertAfter('#order_review_heading');

  // //check for # of wooinfo's and order accordingly
  // if (wooinfo.length > 1) {
  //   $(formlogin).insertAfter(wooinfo[0]);
  //   $(coupon).insertAfter(wooinfo[1]);
  // } else {
  //   $(coupon).insertAfter(wooinfo);
  // }
 
  // // $(showlogin).insertAfter('#order_review_heading');
  //jquery move elements
  

</script>
</body>
</html>
