$(document).ready(function(){

	$('nav > ul').hide();
	$(document).on("click", "nav > i", function(){
		var nav = $("nav > ul").is(":visible");
		if (nav) {
			$("nav > ul").slideToggle();
		}else{
			$("nav").css("background-color", "black");
			$("nav > ul").slideToggle();
		};
	});
});