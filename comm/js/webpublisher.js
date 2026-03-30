var scrollTop,			// 스크롤 높이
	 gnbTop,				// GNB Top
	 lnbTop,				// LNB Top

	 win_w,				// 윈도우 넓이 - 메인
	 win_h,				// 윈도우 높이 - 메인

	 lyNums = 0,			// 레이어에 사용
	 lyOne = 0;			// 레이어에 사용

var pgCode, depth_1, depth_2, depth_3, depth_4;



$(window).load(function(){
	// 오픈시 지워야함
	$("body").append('');


	// 왼쪽메뉴열기_모바일
	$("body").on("click ", ".btnMenu_m", function(){
		winH = $(window).height();
		var gh = $("#gnb").height();
		$("#menuArea").fadeIn(300);
		$("#wrap").addClass("noScroll");
		TweenLite.to($("#menuArea .menuList"), 0.3, {right:0, delay:0.3});
		$("body").append("<div id='grayLayer'><a href='#'></a></div>");
		$("#grayLayer").show();

	});

	// 왼쪽메뉴닫기_모바일
	$("body").on("click ", "#menuArea .btnMenu_mClose", function(){
		
		$("#menuArea").fadeOut(300);
		$("#wrap").removeClass("noScroll");
		TweenLite.to($("#menuArea .menuList"), 0.3, {right:-600});
		$("#grayLayer").remove();

	});

	// 
	$("body").on("click ", ".inner_t", function(){

		$("#menuArea").fadeOut(300);
		$("#wrap").removeClass("noScroll");
		TweenLite.to($("#menuArea .menuList"), 0.3, {right:-600});
		$("#grayLayer").remove();

	});


	// wrap클릭시 메뉴닫기
	$("body").on("click ", "#grayLayer", function(){

		$("#menuArea").fadeOut(300);
		$("#wrap").removeClass("noScroll");

		TweenLite.to($("#menuArea .menuList"), 0.3, {right:-600});
		$("#grayLayer").remove();
	});


	// 왼쪽 하위 메뉴
	$("body").on("click ", "#menuArea .menuList>.list>li", function(){
		var idx = $("#menuArea .menuList>.list>li").index($(this));
		$("#menuArea .menuList>.list>li").each(function(index){
			if(idx == index){
				if(!$(this).hasClass("active")){
					$(this).addClass("active");
					$(this).find(".sMenu").slideDown(300);
				}else{
					$(this).removeClass("active");
					$(this).find(".sMenu").slideUp(300);
				}
			}else{
				$(this).removeClass("active");
				$(this).find(".sMenu").slideUp(300);
			}
		});
	});


	$(window).on('throttledresize', function(){
		$(".depth3Menu .depth3sub").attr("style", ""); //
	}).resize();

});


