$(document).ready(function(){

	$("nav").css("height", $(window).height());
		$(window).resize(function(){
			$("nav").css("height", $(window).height());
		});

	$('nav > ul').hide();
	$(document).on("click", "nav > i", function(){
		var nav = $("nav > ul").is(":visible");
		if (nav) {
			$("nav > ul").fadeToggle();
			}else{
			$("nav > ul").fadeToggle();
		};
	});
});