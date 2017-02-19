$(document).ready(function(){

	$(window).on("load",function(){
		var amount=Math.max.apply(Math,$(".content-1 li").map(function(){return $(this).outerWidth(true);}).get());
		$(".content-1").mCustomScrollbar({
			axis:"x",
			theme:"inset",
			advanced:{
				autoExpandHorizontalScroll:true
			},
			scrollButtons:{
				enable:true,
				scrollType:"stepped"
			},
			keyboard:{scrollType:"stepped"},
			snapAmount:amount,
			mouseWheel:{scrollAmount:amount}
		});
	});

	$('.cabaret_gallery').click(function(){
		$('html, body').animate({
            scrollTop: $(".scroll_slider").offset().top
        }, 1000);
	});

	//light gallery and scroll slider

	$('.gall').lightGallery();

	$(window).on("load",function(){
		var amount=Math.max.apply(Math,$("#content-1 li").map(function(){return $(this).outerWidth(true);}).get());
		$("#content-1").mCustomScrollbar({
			axis:"x",
			theme:"inset",
			advanced:{
				autoExpandHorizontalScroll:true
			},
			scrollButtons:{
				enable:true,
				scrollType:"stepped"
			},
			keyboard:{scrollType:"stepped"},
			snapAmount:amount,
			mouseWheel:{scrollAmount:amount}
		});
		
		
	});
	$(".gallery_tour").mCustomScrollbar({
	    axis:"x",
	    theme: 'inset',
	    scrollButtons:{enable:true},

	});



			
	function setSliderWrapper()
	{
	    var count = 0;

	    $('.gallery_tour .slide').each(function(){
	        $('.img',this).each(function(){
	            count += $(this).outerWidth()+10;
	        });

	        $(this).css('width',count);
	        count = 0;
	    });
	}		
	setSliderWrapper();

	//end light gallery and scroll slider
});