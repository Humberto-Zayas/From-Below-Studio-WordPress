jQuery(document).ready(function($) {

	var loginlink = $(".login-link");
	var loginsection = $(".login-section");
	var divblock42 = $(".div-block-42");
	console.log(divblock42[1]);

	loginlink.click(function(){
		
		loginsection.css("display", "block");
		$(".text-span-26").click(function(){
			console.log('yo');
			loginsection.css("display", "none");
			loginsection.css("opacity", "1");
		})
	});

	
});	