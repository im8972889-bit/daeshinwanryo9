
jQuery(window).ready(function(){
//GNB fixed
var didScroll; 
var lastScrollTop = 0; 
var delta = 5; 
var navbarHeight = $('header').outerHeight(); 

$(window).scroll(function(event){ 
	didScroll = true;
}); 

setInterval(function() { 
	if (didScroll) { 
		hasScrolled(); 
		didScroll = false; 
	} 
}, 250); 

function hasScrolled() { 
	var st = $(this).scrollTop(); 
	// Make sure they scroll more than delta 
	if(Math.abs(lastScrollTop - st) <= delta) return; 
	// If they scrolled down and are past the navbar, add class .nav-up. 
	// This is necessary so you never see what is "behind" the navbar. 
	if (st > lastScrollTop && st > navbarHeight){ 
		// Scroll Down 
		$('#header').addClass('fixed'); 
	} else if (st == 0){ 
		$('#header').removeClass('fixed'); 
	} else { 
		// Scroll Up 
		if(st + $(window).height() < $(document).height()) { 
			$('#header').addClass('fixed'); 
		}
	} 
	lastScrollTop = st;
}
//GNB fixed
});


$(document).ready(function(){


$('.partners_roll').slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 1,
	dots: false,
	autoplay: true,
	autoplaySpeed:5000,
	speed: 1000,
	responsive: [
    {
      breakpoint: 981,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 681,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 481,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
  ]
});


	$(function(){
		$(".plusBtn").click(function(){
			$(this).parent(".w1280").addClass("show");
		});
	});

	$(function(){
		$(".cont").click(function(){
			$(this).prev(".w1280").removeClass("show");
		});
	});


	$(function(){
		$(".partnersBtn").click(function(){
			$(this).parent(".expertise_in").toggleClass("on");
		});
	});


	  /*$('.counter').counterUp({
			delay: 100,
			time: 1500
		});*/




$(window).resize(function(){ 
	if (window.innerWidth < 680) { 
		counterUp();
	}
}).resize();

function counterUp(){
        $(".counter").each(function () {
            var count = $(this);
            var countTo = count.attr('data-count');
            $({countNum:count.text()}).animate({
                    countNum:countTo,
                },
                {
                    duration:3000,
                    easing:'linear',
                    step:function(){
                        count.text(Math.floor(this.countNum));
                    },
                    complete:function(){
                        count.text(this.countNum);
                    }
                });
        });    
}





		$('.wefollowed_roll').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: false,
			autoplay: true,
			autoplaySpeed:5000,
			speed: 1000,
			adaptiveHeight : true,
		});




});


var visualSwiper = new Swiper('.swiper-container', {
	speed: 1000,
	slidesPerView: 1,
	spaceBetween: 0,
	loop: false,
	watchSlidesProgress: true, 
	draggable:true,
	autoplay:false,
  mousewheel: true,
	pagination: {
		el: ".swiper-pagination",
		type: "fraction",	
	},
	navigation : {
		nextEl : '.swiper-button-next', // 다음 버튼 클래스명
		prevEl : '.swiper-button-prev', // 이번 버튼 클래스명
	},
	breakpoints: {
    681: {
      mousewheel: false,
    }
  },
	on: {
		init: function () {
			$('.swiper-slide-active').addClass('action');
		},
		slideChange: function () {
			$('.swiper-slide').removeClass('action');
			$('.swiper-slide').eq(this.activeIndex).addClass('action');
		},
	}

});

//var menu = ['FOREST IS', 'WE ARE HERE', 'WE FOLLOWED']
var menu = ['FOREST IS', 'WE ARE HERE']

var pagingSwiper = new Swiper('.swiper-container', {
		pagination: {
			el: ".swiper-pagination-txt",
			clickable: true,
			renderBullet: function (index, className) {
			return '<span class="' + className + '">' + (menu[index]) + '</span>';
		  },
	 },
	 	on: {
		init: function () {
			$('.swiper-slide-active').addClass('action');
		},
		slideChange: function () {
			$('.swiper-slide').removeClass('action');
			$('.swiper-slide').eq(this.activeIndex).addClass('action');
		},
	}
});


visualSwiper.controller.control = pagingSwiper;
pagingSwiper.controller.control = visualSwiper;






