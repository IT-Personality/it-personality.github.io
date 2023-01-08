(function($) {
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});
	$('.hero-slider').owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		mouseDrag: false,
		animateOut: 'fadeOut',
    	animateIn: 'fadeIn',
		items: 1,
		autoplay: true
	});
	var dot = $('.hero-slider .owl-dot');
	dot.each(function() {
		var index = $(this).index() + 1;
		if(index < 10){
			$(this).html('0').append(index);
			$(this).append('<span>.</span>');
		}else{
			$(this).html(index);
			$(this).append('<span>.</span>');
		}
	});
	$('.news-ticker').marquee({
	    duration: 8000,
	    delayBeforeStart: 0,
	    direction: 'left',
	    duplicated: true
	});

})(jQuery);

var $btnTop = $('.btn-top img')
$(window).on("scroll", function(){
	if ($(window).scrollTop() >= 20){
		$btnTop.fadeIn();
	}else{
		$btnTop.fadeOut();
	}
});
$btnTop.on("click", function(){
	$("html,body").animate({
		scrollTop:0
	}, 600)
});
document.getElementById('not_found_page').onclick = function (){alert("Временно не доступно")}

