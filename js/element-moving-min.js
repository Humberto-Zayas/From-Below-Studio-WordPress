jQuery(document).ready(function($){var e=$(".woocommerce-info-wrapper"),r=$(".woocommerce-form-login"),t=$(".checkout_coupon");$(e).insertAfter("#order_review_heading"),e.length>1?($(r).insertAfter(e[0]),$(t).insertAfter(e[1])):$(t).insertAfter(e);var o=$(".wc_bookings_field_duration"),n=$(".wc_bookings_field_start_date"),i="<h1 style='margin: 20px 0 20px; color: #ffffffc4;'>Rate: $35/Hour</h1>";$(o).insertAfter(".wc-bookings-date-picker"),$(i).insertAfter(".wc-bookings-date-picker"),$(i).insertBefore(".wc_bookings_field_start_date"),$("<span class='checkmark'></span>").insertAfter("input[name='payment_method']")});