$(document).ready(function(){

	$(document).on("click", "nav > i", function(){
		var nav = $("nav > #showNav > ul").is(":visible");
		if (nav) {
			$("nav > #showNav > ul").slideToggle();
		}else{
			$("nav > #showNav > ul").slideToggle();
		};
	});

	$(window).resize(function(){
		if ($(window).width() <= 980) {
			$("nav > #showNav > ul").hide();
		}else{
			$("nav > #showNav > ul").show();
		};
	});

});