!function($){"use strict";function changeNavItemOnScroll(event){var curWindowTop=$(window).scrollTop(),$mainnavItems=$(".js-mainnavItem"),siteHeaderHeight=$(".js-siteHeader").outerHeight();$mainnavItems.each(function(){var $item=$(this),$section=$($item.attr("href"));$section.position().top-siteHeaderHeight<=curWindowTop&&$section.position().top+$section.outerHeight()-siteHeaderHeight>curWindowTop?($mainnavItems.removeClass("active"),$item.addClass("active")):$item.removeClass("active")})}var touchOrClick=function(e){return"ontouchstart"in document.documentElement?"touchstart":"click"};$(document).ready(function(){var $mainnavItems=$(".js-mainnavItem");$mainnavItems.on(touchOrClick(),function(){$mainnavItems.filter(".active").removeClass("active"),$(this).addClass("active")}),$(".js-scrollTo, .js-mainnavItem").on(touchOrClick(),function(){var to=$(this).attr("href");return $.smoothScroll({scrollTarget:to,offset:-60,speed:1e3}),$(".js-mainnavCloser").trigger(touchOrClick()),!1}),$("#contactForm").submit(function(e){e.preventDefault();var $form=$(this),$allInputs=$form.find(":input"),$submit=$form.find(".js-contactFormSubmit"),submitTextDefault=$submit.text();$.ajax({type:"POST",url:$form.attr("action"),data:$form.serialize(),error:function(xhr,textStatus,errThrown){console.log(errThrown)},success:function(data){console.log(data),data=JSON.parse(data),$allInputs.filter(".error").removeClass("error"),data.error?($.each(data.error,function(index,name){$allInputs.filter("[name="+name+"]").addClass("error")}),$submit.addClass("error").attr("disabled","disabled").delay(500).queue(function(next){$(this).text(data.message),next()}).delay(3e3).queue(function(next){$(this).removeClass("error").text(submitTextDefault).removeAttr("disabled"),next()})):($form[0].reset(),$submit.addClass("success").attr("disabled","disabled").delay(500).queue(function(next){$(this).text(data.success),next()}).delay(3e3).queue(function(next){$(this).removeClass("success").text(submitTextDefault).removeAttr("disabled"),next()}))}})}).find(":input").on("keypress",function(){$(this).removeClass("error")});var heroHeight=$("#hero").outerHeight(),$siteHeader=$(".js-siteHeader"),siteHeaderHeight=$siteHeader.outerHeight();$(window).on("resize",function(){heroHeight=$("#hero").outerHeight(),$(window).trigger("scroll")}),$(window).on("scroll",function(){var curWindowTop=$(this).scrollTop();curWindowTop>=heroHeight-siteHeaderHeight?$siteHeader.addClass("sticky"):$siteHeader.removeClass("sticky"),changeNavItemOnScroll()}),$(window).trigger("scroll"),$(".js-mainnavOpener").on(touchOrClick(),function(){$(".js-mainnavList").addClass("active"),$(".js-mainnavCloser").addClass("active"),$(this).removeClass("active"),$(".js-siteHeader").addClass("active"),$(".js-siteHeaderLogo").removeClass("active"),$(".js-siteHeaderLang").addClass("active")}),$(".js-mainnavCloser").on(touchOrClick(),function(){$(".js-mainnavList").removeClass("active"),$(".js-mainnavOpener").addClass("active"),$(this).removeClass("active"),$(".js-siteHeader").removeClass("active"),$(".js-siteHeaderLogo").addClass("active"),$(".js-siteHeaderLang").removeClass("active")})})}(jQuery);
//# sourceMappingURL=script.map