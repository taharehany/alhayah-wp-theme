jQuery(function ($) {
	"use strict";

	//show nav link underline 
	$(".nav-link").on("mouseleave", function () {
		$(this).addClass("change")
	});
	$(".nav-link").on("mousemove", function () {
		$(this).removeClass("change")
	});

	// fixed header
	$(window).scroll(function () {
		let scroll = $(window).scrollTop();

		if (scroll > 1) {
			$("header").addClass("fixed");
		} else {
			$("header").removeClass("fixed");
		}
	});

	//main slider owl
	$('.main-slider-carousel').owlCarousel({
		loop: true,
		autoplay: true,
		autoplayTimeout: 10000,
		items: 1,
		nav: true,
		rtl: true,
		dots: false,
		dotsEach: 3,
		smartSpeed: 1000,
		autoplaySpeed: true,
		navText: ["<i class='bi bi-arrow-right'></i>", "<i class='bi bi-arrow-left'></i>"],
		responsive: {
			0: {
				items: 1,
			},
			768: {
				items: 1,
			},
			992: {
				items: 1,
			}
		}
	});

	//clients slider owl
	$(".clients-carousel").owlCarousel({
		loop: true,
		autoplay: true,
		autoplayTimeout: 3000,
		items: 5,
		nav: false,
		dots: false,
		rtl: true,
		margin: 50,
		navText: ["<i class='bi bi-arrow-left'></i>", "<i class='bi bi-arrow-right'></i>"],
		responsive: {
			0: {
				items: 2,
			},
			400: {
				items: 3,
			},
			575: {
				items: 3,
			},
			768: {
				items: 4,
			},

			992: {
				items: 5,
			}
		}
	});

	//to top button
	$(window).scroll(function () {
		if ($(this).scrollTop() >= 500) {
			$('#toTop').fadeIn(100);
		} else {
			$('#toTop').fadeOut(100);
		}
	});

	$("#toTop").click(function () {
		$("html, body").animate({
			scrollTop: 0
		}, 0);
	});


	//lazyload images
	$("img").Lazy({
		scrollDirection: "vertical",
		effect: "fadeIn",
		visibleOnly: false,
	});
});
jQuery(window).on("load", function () {
	jQuery('.loader').delay(1000).fadeOut(200);
});