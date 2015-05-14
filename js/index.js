$(document).ready(function(){

	$('nav > #showNav > ul').hide();
	$(document).on("click", "nav > i", function(){
		var nav = $("nav > #showNav > ul").is(":visible");
		if (nav) {
			$("nav > #showNav > ul").slideToggle();
		}else{
			$("nav > #showNav > ul").slideToggle();
		};
	});
});