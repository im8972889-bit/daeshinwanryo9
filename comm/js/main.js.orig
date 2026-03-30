
$(document).ready(function(){


$('.team_roll').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
	dots: false,
	autoplay: true,
	autoplaySpeed:5000,
	speed: 1000,
	responsive: [
    {
      breakpoint: 681,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 461,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

});



(function($){
	$(document).ready(function(){
		$('#wrap').fullpage({
        anchors: ['firstPage', 'secondPage', '3rdPage', '4rhPage',  '5thPage', '6thPage', 'lastPage'],
        menu: '#menu',
        slidesNavigation: true,
        licenseKey: '9123D5AF-1F444BF8-AE5D6283-103772B3',
        scrollHorizontally: true,
        scrollHorizontallyKey: 'QU5ZX0dHQ2MyTnliMnhzU0c5eWFYcHZiblJoYkd4NVkxZg==', //see https://goo.gl/xkUmHS

			autoScrolling: true,
			navigation: true,
			css3:false,
			navigationTooltips: ['MAIN', 'FOREST', 'EXPERTISE', 'SOLUTION', 'TEAM', 'NEWS',''],		
		
		});

		$('#moveSectionUp').click(function(e){
			e.preventDefault();
			$.fn.fullpage.moveSectionUp();
		});

		$('.moveSectionDown').click(function(e){
			e.preventDefault();
			$.fn.fullpage.moveSectionDown();
		});
		// move top 
		$('.topBtn > a').click(function () {
			$.fn.fullpage.moveTo(1, 1);
		});
		setInterval(function(){
			$('.section.active').addClass("action");
		});



	});
})(jQuery);