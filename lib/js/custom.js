/*== Custom Javascript - by Sanjay Jadon - usingcss3.com
======================================================== */
$(window).scroll(function(e){
	if($(window).scrollTop() > 0){
		$(".header").addClass("fixed-header");
	} else{
		$(".header").removeClass("fixed-header");
	}
});

$(document).ready(function(e) {
		
    if($(window).scrollTop() > 0){
		$(".header").addClass("fixed-header");
	}
	
	$(".search-box .search-icon").click(function(e){
		$(this).siblings(".search-input").slideToggle();
		if($(window).width() < 1081){
			$(".navigation").css("right", "-201px");
			$(".toggle-mobile-btn").removeClass("open");
		}
	});
	
	$(".toggle-mobile-btn").click(function(e){
		if($(this).hasClass("open")){
			$(this).removeClass("open");
			$(".navigation").css("right", "-201px");
		}else{
			$(this).addClass("open");
			$(".search-input").fadeOut();
			$(".navigation").css("right", "0");
		}
	});
});

$(window).on("resize load", function(){
	if($(window).width() > 1080){
		$(".navigation").removeAttr("style");
		$(".toggle-mobile-btn").removeClass("open");
	}
});