 jQuery(document).ready(function($) {
 // moving coupon code field
  
  // get all elements with .woocommerce-info-wrapper class ie: returning customer login & coupon code
  var wooinfo = $(".woocommerce-info-wrapper");

  // get the form login and checkout logins
  var formlogin = $(".woocommerce-form-login");
  var coupon = $(".checkout_coupon");

  // move all wooinfo elements to appropriate spot
  $(wooinfo).insertAfter('#order_review_heading');

  //check for # of wooinfo's and order accordingly
  if (wooinfo.length > 1) {
    $(formlogin).insertAfter(wooinfo[0]);
    $(coupon).insertAfter(wooinfo[1]);
  } else {
    $(coupon).insertAfter(wooinfo);
  }
 
  // $(showlogin).insertAfter('#order_review_heading');
  //jquery move elements
  
// moving booking hours

  var bookingduration = $(".wc_bookings_field_duration");
  
  var bookingsfield = $(".wc_bookings_field_start_date");
  var text = "<h1 style='margin: 20px 0 20px; color: #ffffffc4;'>Rate: $35/Hour</h1>";

  $(bookingduration).insertAfter('.wc-bookings-date-picker');
  $(text).insertAfter('.wc-bookings-date-picker');
  $(text).insertBefore('.wc_bookings_field_start_date');

  //custom radiomark span addition for payment page

  var spanAdd = "<span class='checkmark'></span>";

  $(spanAdd).insertAfter("input[name='payment_method']");

});