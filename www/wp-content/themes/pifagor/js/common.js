$(function() {

	$(".toggle-mnu").click(function() {
		$(this).toggleClass("on");
		$(".main-mnu").slideToggle();
		return false;
	});

	if ($('.col-left-mnu').html() == undefined){
		$('.col-content').css("width", "100%");
	}



});//ready