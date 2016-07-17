jQuery(document).ready(function($){

	var $menuBtn = $('.menu-btn');
	
	$menuBtn.click(function(){
		$('.main-menu').toggleClass('menu-open');
		$(this).toggleClass('active');
	});	

	$('.testimonial-slides').slick({
		autoplay: true,
		dots: true,
		draggable: true,
		arrows: false
	});

	$('.service-nav-btn').click(function(){
		var $myService = $(this).attr('data-loc'),
			$currentService = $($('#' + $myService));
		$('html, body').stop().animate({scrollTop: $currentService.offset().top -150}, 1000);
	});


	$('.hero-slides').slick({
		autoplay: true,
		dots: false,
		speed: 400,
		arrows: false,
		autoplaySpeed: 5000,
		fade: true
	});

	$('.service-slides').each(function(idx,item){

		if($(this).hasClass('home-staging')){
			$('.home-staging').slick({
				autoplay: false,
				arrows: true,
				speed: 200,
				prevArrow:$('#home-staging .prev-btn'),
				nextArrow:$('#home-staging .next-btn')
			});
		}else if($(this).hasClass('transitioning')){
			$('.transitioning').slick({
				autoplay: false,
				arrows: true,
				speed: 200,
				prevArrow:$('#transitioning .prev-btn'),
				nextArrow:$('#transitioning .next-btn')
			});
		}else if($(this).hasClass('relocating')){
			$('.relocating').slick({
				autoplay: false,
				arrows: true,
				speed: 200,
				prevArrow:$('#relocating .prev-btn'),
				nextArrow:$('#relocating .next-btn')
			});
		}else if($(this).hasClass('consulting')){
			$('.consulting').slick({
				autoplay: false,
				arrows: true,
				speed: 200,
				prevArrow:$('#consulting .prev-btn'),
				nextArrow:$('#consulting .next-btn')
			});
		}else if($(this).hasClass('speaking')){
			$('.speaking').slick({
				autoplay: false,
				arrows: true,
				speed: 200,
				prevArrow:$('#speaking .prev-btn'),
				nextArrow:$('#speaking .next-btn')
			});
		}else if($(this).hasClass('event-management')){
			$('.event-management').slick({
				autoplay: false,
				arrows: true,
				speed: 200,
				prevArrow:$('#event-management .prev-btn'),
				nextArrow:$('#event-management .next-btn')
			});
		}
	});
	
});