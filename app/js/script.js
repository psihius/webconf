/*jslint browser: true, devel: true, multistr: true */
/*global $, jQuery, alert */

(function ($) {
	'use strict';
	// var touchOrClick = function (e) {
	// 	if ('ontouchstart' in document.documentElement) {
	// 		return 'touchstart';
	// 	} else {
	// 		return 'click';
	// 	}
	// };

	function changeNavItemOnScroll(event){
		var curWindowTop = $(window).scrollTop(),
			$mainnavItems = $('.js-mainnavItem'),
			siteHeaderHeight = $('.js-siteHeader').outerHeight();
		$mainnavItems.each(function () {
			var $item = $(this);
			var $section = $($item.attr("href"));
			if($section.length){
				if ($section.position().top - siteHeaderHeight <= curWindowTop && $section.position().top + $section.outerHeight() - siteHeaderHeight > curWindowTop) {
					$mainnavItems.removeClass("active");
					$item.addClass("active");
				}
				else{
					$item.removeClass("active");
				}
			}
		});
	}

	$(document).ready(function () {

		var $mainnavItems = $(".js-mainnavItem");

		$mainnavItems.hammer()
			.on("tap", function(){
				$mainnavItems.filter(".active").removeClass("active");
				$(this).addClass("active");
			});

		$('.js-scrollTo, .js-mainnavItem').hammer().on("tap", function () {
			var to = $(this).attr("href");
			$.smoothScroll({
				scrollTarget: to,
				offset: -60,
				speed: 1000,
			});
			$(".js-mainnavCloser").hammer().trigger("tap");
			$(to).trigger("highlight");
			return false;
		});
		$('.js-speaker').on("highlight", function(){
			$('.js-speaker').removeClass("active");
			$(this).addClass("active");
		});
		$("#contactForm")
			.submit(function (e) {
				e.preventDefault();

				var $form = $(this),
					$allInputs = $form.find(":input"),
					$submit = $form.find(".js-contactFormSubmit"),
					submitTextDefault = $submit.text();

				$.ajax({
					type: "POST",
					url: $form.attr("action"),
					data: $form.serialize(),
					error: function (xhr, textStatus, errThrown) {
						console.log(errThrown);
					},
					success: function (data) {
						console.log(data);
						data = JSON.parse(data);

						$allInputs.filter(".error").removeClass("error");

						if(data.error) {
							$.each(data.error, function(index, name){

								$allInputs.filter("[name=" + name + "]")
									.addClass("error");
							});
							$submit
								.addClass("error")
								.attr('disabled','disabled')
								.delay(500).queue(function(next){
									$(this).text(data.message);
									next();
								})
								.delay(3000).queue(function(next){
									$(this)
										.removeClass("error")
										.text(submitTextDefault)
										.removeAttr('disabled');
									next();
								});

						} else {
							$form[0].reset();
							$submit
								.addClass("success")
								.attr('disabled','disabled')
								.delay(500).queue(function(next){
									$(this).text(data.success);
									next();
								})
								.delay(3000).queue(function(next){
									$(this)
										.removeClass("success")
										.text(submitTextDefault)
										.removeAttr('disabled');
									next();
								});
						}

					}
				});

			})
			.find(":input").on("keypress", function(){
				$(this).removeClass("error");
			});

		var heroHeight = $("#hero").outerHeight(),
			$siteHeader = $(".js-siteHeader"),
			siteHeaderHeight = $siteHeader.outerHeight();

		$(window).on("resize", function(){
			heroHeight = $("#hero").outerHeight();
			$(window).trigger("scroll");
		});

		$(window).on("scroll", function(){

			var curWindowTop = $(this).scrollTop();

			if(curWindowTop >= heroHeight - siteHeaderHeight) {
				$siteHeader.addClass("sticky");
			} else {
				$siteHeader.removeClass("sticky");
			}
			changeNavItemOnScroll();
		});
		$(window).trigger("scroll");

		$(".js-mainnavOpener").hammer().on("tap", function(){
			$(".js-mainnavList").addClass("active");
			$(".js-mainnavCloser").addClass("active");
			$(this).removeClass("active");
			$(".js-siteHeader").addClass("active");
			$(".js-siteHeaderLogo").removeClass("active");
			$(".js-siteHeaderLang").addClass("active");
		});
		$(".js-mainnavCloser").hammer().on("tap", function(){
			$(".js-mainnavList").removeClass("active");
			$(".js-mainnavOpener").addClass("active");
			$(this).removeClass("active");
			$(".js-siteHeader").removeClass("active");
			$(".js-siteHeaderLogo").addClass("active");
			$(".js-siteHeaderLang").removeClass("active");
		});
	});

}(jQuery));
