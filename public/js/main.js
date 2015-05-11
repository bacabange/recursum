$(document).on("ready", function () {
	$('.thumbnail .caption h4').equalHeights();	
	$(".recurso img")
		.on('click', function () {
			$(".caption-img").hide();
			var caption = $(this).siblings(".caption-img");
			caption.height($(".recurso img").height()+10);
			caption.fadeIn();
			caption.mouseleave(function () {
				$(this).hide();
			});
		});
});