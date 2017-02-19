$(document).ready(function(){

	window.width = $(window).width();
	var offsetUs = $(".us_place").offset().top;
	setInterval(function(){
		offsetUs = $(".us_place").offset().top;
	},10);
	var userLogPlace = 0;

	$("body").click(function(){
		$(".welcome_user_abs").css({
			"display":"none",
		});
		userLogPlace = 0;
	});

	$(window).scroll(function(){

		var scrollTop = $(window).scrollTop();

		if(scrollTop >= 128){
			$(".center_right").css({
				"position":"fixed",
				"top":"0px",
			});

			$(".header_right").css({
				"position":"fixed",
				"top":"0px",
				"left":"-30px",
			});
		}else{
			$(".center_right").css({
				"position":"relative",
			});

			$(".header_right").css({
				"position":"absolute",
				"bottom":"0px",
				"left":"-10px",
			});
		};

		if(scrollTop >= 200){
			$(".back_to_top").css({
				"display":"block",
			});
		}else{
			$(".back_to_top").css({
				"display":"none",
			});
		};
	});

	$("#contact").click(function(){
		$('body').animate({
		    scrollTop: offsetUs - 100
		}, 1000);
	});

	$(".back_to_top").click(function(){
		$("body").animate({
			scrollTop:0,
		}, 1000);
	});

	$(".fa-search").before().click(function(){
		$(this).css({
			"display":"none",
		});
		$(".fa-times").css({
			"display":"block",
		});
		$(".search").css({
			"display":"block",
		});
	});

	$(".fa-times").before().click(function(){
		$(this).css({
			"display":"none",
		});
		$(".fa-search").css({
			"display":"block",
		});
		$(".search").css({
			"display":"none",
		});
	});


// user page

	$(".nH").css({
		"background-color":"#169DF3",
       	"color":"#ffffff",
    });

	$(".a").click(function(){
		$(".nH").css({
			"background-color":"#f5f5f5",
        	"color":"#333333",
	    });
        $(".new_head").css({
        	"background-color":"#f5f5f5",
        	"color":"#333333",
        })
        $(this).parent().parent().css({
        	"background-color":"#169DF3",
        	"color":"#ffffff",
        });
	});

// user page

// user login
	
	$(".welcome_user").click(function(e){
		e.stopPropagation();
		if(userLogPlace == 0){
			$(".welcome_user_abs").css({
				"display":"block",
			});
			userLogPlace++;
		}else if(userLogPlace == 1){
			$(".welcome_user_abs").css({
				"display":"none",
			});
			userLogPlace = 0;
		}
	});

// user login

});