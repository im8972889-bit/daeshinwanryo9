<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">
<head><script>
(function(){
  // 1. 기본 reload 차단
  const noop = function(){ console.log("Blocked reload"); };
  window.location.reload = noop;
  
  // 2. Sanity Live / Next.js Fast Refresh 웹소켓 & EventSource 끊김에 의한 무한 새로고침 차단
  window.EventSource = function(){ return { close:noop, addEventListener:noop, removeEventListener:noop, readyState:2 }; };
  window.WebSocket = function(){ return { send:noop, close:noop, addEventListener:noop, removeEventListener:noop, readyState:1 }; };

  // 3. location.replace / assign 을 통한 강제 이동 차단
  const _replace = window.location.replace;
  const _assign = window.location.assign;
  window.location.replace = function(url){ if(url !== window.location.href) _replace.call(window.location, url); };
  window.location.assign = function(url){ if(url !== window.location.href) _assign.call(window.location, url); };

  // 폼 submit 전송 차단 (백엔드로 데이터 전송 방지)
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('form').forEach(function(form) {
      form.removeAttribute('action');
      form.addEventListener('submit', function(e) { e.preventDefault(); }, true);
    });
  });
})();
</script>
<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Description" CONTENT="대한민국 최초 Valuation & Financial Advisory Service 전문 회계법인">
<meta name="keywords" CONTENT="회계법인,숲,회계법인 숲,FOREST 회계법인,회계법인숲,FOREST ACCOUNTING CORPORATION,FOREST,forest,accounting,가치평가,재무실사,M&A">
<meta name="Classification" CONTENT="공인회계사,교육및출판업무">
<meta name="viewport" content="width=device-width">
<meta name="robots" content="index,follow" />
<link rel="canonical" href="/">
<link rel="shortcut icon" href="/img/favicon.ico" /><link rel="apple-touch-icon" href="/img/logo.png" />
<meta name="naver-site-verification" content="4e2bd1527db81c3fd972dc994a4698f5d5b81bfc" />
<meta property="og:type" content="website">  
<meta property="og:title" content="회계법인 숲">
<meta property="og:image" content="/img/logo_k.gif">
<meta property="og:description" content="대한민국 최초 Valuation & Financial Advisory Service 전문 회계법인">
<meta property="og:url" content="https://www.forestac.co.kr">
<meta property="al:web:url" content="https://www.forestac.co.kr">
<title>회계법인 숲</title>
<link rel="canonical" href="/">
<link rel="stylesheet" type="text/css" href="/comm/css/jquery.simpleLens.css">
<link rel="stylesheet" type="text/css" href="/comm/css/jquery.simpleGallery.css">

<link rel="stylesheet" href="../assets/code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">	<!-- 툴팁 css -->
<script src="../assets/code.jquery.com/jquery-1.12.4.js"></script>	<!-- 기본 제이쿼리 -->	
<script src="../assets/code.jquery.com/ui/1.12.1/jquery-ui.js"></script>	<!-- 툴팁 제이쿼리 -->
<script type='text/javascript' src='/comm/js/script.js?v=1774840725'></script>
<script type="text/javascript" src="/comm/js/slick.min.js"></script> 
<script type="text/javascript" src="/comm/js/TweenMax.min.js"></script>
<script type="text/javascript" src="/comm/js/webpublisher.js"></script> 
<script type="text/javascript" src="/comm/js/jquery.malihu.PageScroll2id.min.js"></script>


<script src="../assets/cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script type="text/javascript" src="/comm/js/jquery.counterup.js"></script>

<link rel="stylesheet"  href="/comm/css/swiper.css"  />
<script type="text/javascript" src="/comm/js/swiper.min.js"></script>


<!-- @@ 익스플로러 실행시 엣지 자동 전환 -->
<script type="text/javascript">
$(document).ready(function () {
	if(/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) {
		window.location = 'microsoft-edge:' + window.location;
		setTimeout(function() {
		  window.location = 'https://go.microsoft.com/fwlink/?linkid=2135547';
		}, 1);
	  }
});
</script>


<link rel="stylesheet" type="text/css" href="/comm/css/sub.css?v=1774840725" />
<script defer type="text/javascript" src="/comm/js/sub.js"></script> 

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../assets/google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99019478-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- # 툴팁 제이쿼리 실행 # -->
<script>
$(function() {
	$("img.icon_buy").tooltip();
});

</script>
</head>
<body>
<!-- wrap -->
<div id="wrap">
  
	   <div id="header" class="on">
         <div class="header_in">
            <h1>
							<a href="/" title="회계법인숲">
							  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 449.44 124.9" style="enable-background:new 0 0 449.44 124.9;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#FFFFFF;}
	.st1{fill:#FFFFFF;stroke:#FFFFFF;stroke-miterlimit:10;}
</style>
<path class="st0" d="M78.97,124.9h65.26L72.13,0L0,124.9h65.25v-15.44h-5.47l12.35-21.38l12.33,21.38h-5.49V124.9z M72.11,57.94  l-29.73,51.49H26.41l45.72-79.16l45.68,79.16h-15.96L72.11,57.94z"/>
<rect x="169.91" y="0" class="st0" width="1" height="124.9"/>
<polygon class="st0" points="207.89,4.53 227.91,4.53 227.91,9.61 213.19,9.61 213.19,18.89 226.01,18.89 226.01,23.92   213.19,23.92 213.19,37.51 207.89,37.51 "/>
<path class="st0" d="M232.3,21.06c0-2.29,0.44-4.45,1.31-6.48c0.88-2.02,2.08-3.82,3.62-5.39c1.54-1.57,3.33-2.8,5.37-3.69  c2.04-0.89,4.22-1.34,6.54-1.34c2.29,0,4.46,0.45,6.5,1.34c2.04,0.89,3.83,2.12,5.39,3.69c1.55,1.57,2.78,3.37,3.67,5.39  c0.89,2.02,1.34,4.18,1.34,6.48c0,2.33-0.45,4.51-1.34,6.54c-0.89,2.04-2.11,3.83-3.67,5.37c-1.56,1.54-3.35,2.74-5.39,3.6  c-2.04,0.86-4.21,1.29-6.5,1.29c-2.36,0-4.54-0.43-6.57-1.29c-2.02-0.86-3.8-2.05-5.34-3.58c-1.54-1.52-2.75-3.31-3.62-5.35  C232.74,25.62,232.3,23.42,232.3,21.06 M237.74,21.06c0,1.63,0.29,3.16,0.88,4.58c0.59,1.42,1.41,2.66,2.47,3.74  c1.06,1.07,2.28,1.91,3.67,2.51c1.39,0.6,2.9,0.9,4.53,0.9c1.57,0,3.04-0.3,4.42-0.9c1.37-0.6,2.57-1.44,3.6-2.51  c1.03-1.07,1.83-2.32,2.42-3.74c0.59-1.42,0.88-2.94,0.88-4.58c0-1.66-0.3-3.2-0.91-4.62c-0.6-1.42-1.42-2.67-2.45-3.76  c-1.03-1.09-2.24-1.93-3.62-2.54c-1.39-0.6-2.88-0.91-4.48-0.91c-1.6,0-3.1,0.3-4.48,0.91c-1.39,0.6-2.6,1.45-3.65,2.54  c-1.04,1.09-1.85,2.35-2.42,3.78C238.02,17.9,237.74,19.43,237.74,21.06"/>
<path class="st0" d="M282.35,4.53c1.81,0,3.47,0.23,4.98,0.7c1.51,0.47,2.79,1.15,3.85,2.06c1.06,0.91,1.88,2.01,2.47,3.33  c0.59,1.31,0.88,2.82,0.88,4.51c0,1.3-0.2,2.6-0.59,3.89c-0.39,1.3-1.03,2.47-1.92,3.51c-0.89,1.04-2.06,1.89-3.51,2.54  c-1.45,0.65-3.25,0.97-5.39,0.97h-4.76v11.46h-5.3V4.53H282.35z M283.07,20.97c1.18,0,2.16-0.19,2.94-0.57  c0.78-0.38,1.4-0.85,1.83-1.43c0.44-0.57,0.75-1.18,0.95-1.83c0.2-0.65,0.3-1.26,0.3-1.83c0-0.54-0.09-1.14-0.27-1.79  c-0.18-0.65-0.49-1.27-0.93-1.86c-0.44-0.59-1.04-1.08-1.79-1.47c-0.75-0.39-1.71-0.59-2.85-0.59h-4.89v11.37H283.07z M288.78,24.1  l8.42,13.41h-6.11l-8.6-13.27L288.78,24.1z"/>
<polygon class="st0" points="303.41,4.53 325.28,4.53 325.28,9.61 308.71,9.61 308.71,18.39 323.47,18.39 323.47,23.47   308.71,23.47 308.71,32.43 325.92,32.43 325.92,37.51 303.41,37.51 "/>
<path class="st0" d="M350.51,11.24c-1.18-0.6-2.43-1.12-3.76-1.56c-1.33-0.44-2.6-0.66-3.8-0.66c-1.63,0-2.92,0.36-3.87,1.09  c-0.95,0.72-1.43,1.72-1.43,2.99c0,0.91,0.32,1.7,0.97,2.38c0.65,0.68,1.5,1.27,2.54,1.77c1.04,0.5,2.14,0.97,3.28,1.43  c1,0.36,1.98,0.79,2.97,1.29c0.98,0.5,1.86,1.11,2.65,1.83c0.78,0.72,1.4,1.62,1.86,2.69c0.45,1.07,0.68,2.39,0.68,3.96  c0,1.72-0.43,3.3-1.29,4.73c-0.86,1.43-2.11,2.57-3.74,3.42c-1.63,0.85-3.61,1.27-5.93,1.27c-1.39,0-2.74-0.15-4.05-0.45  c-1.31-0.3-2.56-0.72-3.74-1.25c-1.18-0.53-2.26-1.12-3.26-1.79l2.36-4.12c0.72,0.54,1.55,1.04,2.49,1.5  c0.94,0.45,1.9,0.82,2.9,1.09c1,0.27,1.93,0.41,2.81,0.41c0.94,0,1.86-0.16,2.79-0.48c0.92-0.32,1.69-0.82,2.31-1.52  c0.62-0.69,0.93-1.62,0.93-2.76c0-0.94-0.26-1.74-0.79-2.4c-0.53-0.66-1.23-1.25-2.11-1.74c-0.88-0.5-1.83-0.94-2.85-1.34  c-1.03-0.39-2.07-0.83-3.12-1.31c-1.06-0.48-2.05-1.08-2.97-1.79c-0.92-0.71-1.67-1.58-2.24-2.6c-0.57-1.03-0.86-2.29-0.86-3.8  c0-1.81,0.42-3.38,1.27-4.71c0.84-1.33,2.02-2.39,3.51-3.17c1.5-0.78,3.22-1.21,5.19-1.27c2.32,0,4.31,0.28,5.96,0.84  c1.65,0.56,3.1,1.23,4.37,2.02L350.51,11.24z"/>
<polygon class="st0" points="357.08,4.53 379.13,4.53 379.13,9.61 370.62,9.61 370.62,37.51 365.37,37.51 365.37,9.61 357.08,9.61   "/>
<path class="st1" d="M205.07,77.81l10.08-24.89h0.13l10.08,24.89h-1.85l-8.77-22.27l1.14-0.64l-9.17,22.91H205.07z M209.94,68.37  h10.58l0.47,1.54h-11.45L209.94,68.37z"/>
<path class="st1" d="M247.06,76.23c-0.52,0.31-1.11,0.62-1.78,0.91c-0.67,0.29-1.41,0.52-2.22,0.69c-0.81,0.17-1.68,0.25-2.62,0.25  c-1.81,0-3.46-0.32-4.94-0.96c-1.48-0.64-2.74-1.51-3.8-2.62c-1.05-1.11-1.86-2.39-2.44-3.83c-0.57-1.44-0.86-2.98-0.86-4.62  c0-1.75,0.3-3.37,0.91-4.87c0.6-1.5,1.46-2.81,2.55-3.93c1.1-1.12,2.37-1.99,3.83-2.62c1.46-0.63,3.03-0.94,4.74-0.94  c1.25,0,2.43,0.17,3.53,0.5c1.1,0.34,2.09,0.77,2.99,1.31l-0.71,1.51c-0.78-0.49-1.67-0.91-2.65-1.24c-0.99-0.33-2.03-0.5-3.12-0.5  c-1.41,0-2.74,0.27-4,0.82c-1.25,0.55-2.36,1.31-3.31,2.28c-0.95,0.97-1.7,2.11-2.23,3.41c-0.54,1.3-0.81,2.7-0.81,4.2  c0,1.43,0.24,2.79,0.72,4.06c0.48,1.28,1.18,2.4,2.08,3.36c0.91,0.96,2,1.72,3.28,2.27c1.28,0.55,2.7,0.82,4.27,0.82  c1.16,0,2.23-0.16,3.21-0.49c0.97-0.33,1.84-0.73,2.6-1.23L247.06,76.23z"/>
<path class="st1" d="M270.27,76.23c-0.52,0.31-1.11,0.62-1.78,0.91c-0.67,0.29-1.41,0.52-2.22,0.69c-0.81,0.17-1.68,0.25-2.62,0.25  c-1.81,0-3.46-0.32-4.94-0.96c-1.48-0.64-2.74-1.51-3.8-2.62c-1.05-1.11-1.86-2.39-2.44-3.83c-0.57-1.44-0.86-2.98-0.86-4.62  c0-1.75,0.3-3.37,0.91-4.87c0.6-1.5,1.46-2.81,2.55-3.93c1.1-1.12,2.37-1.99,3.83-2.62c1.46-0.63,3.04-0.94,4.74-0.94  c1.25,0,2.43,0.17,3.53,0.5c1.1,0.34,2.09,0.77,2.99,1.31l-0.71,1.51c-0.78-0.49-1.67-0.91-2.65-1.24c-0.99-0.33-2.03-0.5-3.12-0.5  c-1.41,0-2.74,0.27-4,0.82c-1.25,0.55-2.36,1.31-3.31,2.28c-0.95,0.97-1.7,2.11-2.23,3.41c-0.54,1.3-0.81,2.7-0.81,4.2  c0,1.43,0.24,2.79,0.72,4.06c0.48,1.28,1.18,2.4,2.08,3.36c0.91,0.96,2,1.72,3.28,2.27c1.28,0.55,2.7,0.82,4.27,0.82  c1.16,0,2.23-0.16,3.21-0.49c0.97-0.33,1.84-0.73,2.6-1.23L270.27,76.23z"/>
<path class="st1" d="M274.84,65.92c0-1.68,0.31-3.25,0.94-4.72c0.63-1.47,1.5-2.76,2.62-3.9c1.12-1.13,2.41-2.01,3.88-2.65  c1.47-0.64,3.04-0.96,4.72-0.96c1.68,0,3.26,0.32,4.74,0.96c1.48,0.64,2.78,1.52,3.9,2.65c1.12,1.13,2,2.43,2.64,3.9  c0.64,1.47,0.96,3.04,0.96,4.72c0,1.68-0.32,3.25-0.96,4.72c-0.64,1.47-1.52,2.76-2.64,3.88c-1.12,1.12-2.42,1.99-3.9,2.62  c-1.48,0.63-3.06,0.94-4.74,0.94c-1.68,0-3.25-0.3-4.72-0.91c-1.47-0.6-2.76-1.46-3.88-2.55c-1.12-1.1-1.99-2.38-2.62-3.86  C275.15,69.28,274.84,67.67,274.84,65.92 M276.52,65.96c0,1.46,0.27,2.82,0.81,4.1c0.54,1.28,1.29,2.4,2.25,3.36  c0.96,0.96,2.08,1.72,3.34,2.27c1.26,0.55,2.61,0.82,4.05,0.82c1.48,0,2.86-0.27,4.13-0.82c1.28-0.55,2.4-1.3,3.36-2.27  c0.96-0.96,1.72-2.08,2.27-3.36c0.55-1.28,0.82-2.65,0.82-4.13c0-1.46-0.27-2.83-0.82-4.12c-0.55-1.29-1.3-2.42-2.27-3.39  c-0.96-0.97-2.08-1.74-3.36-2.3c-1.28-0.56-2.64-0.84-4.1-0.84c-1.48,0-2.85,0.29-4.13,0.86c-1.28,0.57-2.39,1.35-3.34,2.33  c-0.95,0.98-1.69,2.12-2.22,3.41C276.78,63.16,276.52,64.52,276.52,65.96"/>
<path class="st1" d="M306.82,69.75c0,1.39,0.29,2.59,0.86,3.59c0.57,1.01,1.35,1.79,2.33,2.33c0.99,0.55,2.11,0.82,3.36,0.82  c1.28,0,2.41-0.27,3.41-0.82c1-0.55,1.78-1.33,2.35-2.33c0.57-1.01,0.86-2.21,0.86-3.59V53.96h1.61v15.89c0,1.72-0.36,3.2-1.09,4.43  c-0.73,1.23-1.71,2.17-2.96,2.82c-1.24,0.65-2.64,0.97-4.18,0.97c-1.54,0-2.94-0.32-4.18-0.97c-1.24-0.65-2.22-1.59-2.94-2.82  c-0.72-1.23-1.08-2.71-1.08-4.43V53.96h1.65V69.75z"/>
<polygon class="st1" points="349.01,78.38 330.19,57.19 330.63,56.85 330.67,77.81 329.05,77.81 329.05,53.46 329.15,53.46   347.96,74.82 347.53,74.96 347.49,53.96 349.07,53.96 349.07,78.38 "/>
<polygon class="st1" points="354.75,53.96 370.37,53.96 370.37,55.54 363.35,55.54 363.35,77.81 361.7,77.81 361.7,55.54   354.75,55.54 "/>
<rect x="376.04" y="53.96" class="st1" width="1.65" height="23.85"/>
<polygon class="st1" points="405.23,78.38 386.42,57.19 386.86,56.85 386.89,77.81 385.28,77.81 385.28,53.46 385.38,53.46   404.19,74.82 403.76,74.96 403.72,53.96 405.3,53.96 405.3,78.38 "/>
<path class="st1" d="M430.9,76.13c-0.4,0.27-0.89,0.52-1.46,0.76c-0.57,0.23-1.18,0.44-1.83,0.62c-0.65,0.18-1.32,0.32-2,0.42  c-0.68,0.1-1.33,0.15-1.93,0.15c-1.88,0-3.58-0.31-5.09-0.92c-1.51-0.62-2.8-1.47-3.88-2.55c-1.08-1.09-1.9-2.35-2.47-3.79  c-0.57-1.44-0.86-3.01-0.86-4.69c0-1.81,0.32-3.48,0.96-5.01c0.64-1.52,1.52-2.84,2.64-3.95c1.12-1.11,2.42-1.97,3.9-2.57  c1.48-0.6,3.05-0.91,4.7-0.91c1.25,0,2.43,0.16,3.54,0.47c1.11,0.31,2.11,0.74,3.01,1.28l-0.6,1.48c-0.52-0.31-1.1-0.59-1.75-0.82  c-0.65-0.23-1.32-0.42-2-0.55c-0.68-0.13-1.36-0.2-2.03-0.2c-1.52,0-2.93,0.27-4.23,0.81c-1.3,0.54-2.43,1.29-3.39,2.25  c-0.96,0.96-1.71,2.09-2.25,3.39c-0.54,1.3-0.81,2.71-0.81,4.23c0,1.48,0.25,2.85,0.76,4.12c0.5,1.27,1.22,2.37,2.15,3.33  c0.93,0.95,2.04,1.69,3.34,2.22c1.3,0.53,2.74,0.79,4.33,0.79c0.94,0,1.92-0.11,2.96-0.34c1.03-0.22,1.92-0.55,2.65-0.97v-6.62  h-5.38v-1.58h7.02V76.13z"/>
<path class="st1" d="M224.29,116.54c-0.52,0.31-1.11,0.62-1.78,0.91c-0.67,0.29-1.41,0.52-2.22,0.69c-0.81,0.17-1.68,0.25-2.62,0.25  c-1.81,0-3.46-0.32-4.94-0.96c-1.48-0.64-2.74-1.51-3.8-2.62c-1.05-1.11-1.86-2.39-2.44-3.83c-0.57-1.44-0.86-2.98-0.86-4.62  c0-1.75,0.3-3.37,0.91-4.87c0.6-1.5,1.46-2.81,2.55-3.93c1.1-1.12,2.37-1.99,3.83-2.62c1.46-0.63,3.04-0.94,4.74-0.94  c1.25,0,2.43,0.17,3.53,0.5c1.1,0.34,2.09,0.77,2.99,1.31l-0.71,1.51c-0.78-0.49-1.67-0.91-2.65-1.24c-0.99-0.34-2.03-0.5-3.12-0.5  c-1.41,0-2.74,0.27-4,0.82c-1.25,0.55-2.36,1.31-3.31,2.28c-0.95,0.97-1.7,2.11-2.23,3.41c-0.54,1.3-0.81,2.7-0.81,4.2  c0,1.43,0.24,2.79,0.72,4.06c0.48,1.28,1.18,2.4,2.08,3.36c0.91,0.96,2,1.72,3.27,2.27c1.28,0.55,2.7,0.82,4.27,0.82  c1.16,0,2.23-0.16,3.21-0.49c0.97-0.33,1.84-0.73,2.6-1.23L224.29,116.54z"/>
<path class="st1" d="M228.85,106.23c0-1.68,0.31-3.25,0.94-4.72c0.63-1.47,1.5-2.77,2.62-3.9c1.12-1.13,2.41-2.02,3.88-2.65  c1.47-0.64,3.04-0.96,4.72-0.96c1.68,0,3.26,0.32,4.74,0.96c1.48,0.64,2.78,1.52,3.9,2.65c1.12,1.13,2,2.43,2.64,3.9  c0.64,1.47,0.96,3.04,0.96,4.72c0,1.68-0.32,3.25-0.96,4.72c-0.64,1.47-1.52,2.76-2.64,3.88c-1.12,1.12-2.42,1.99-3.9,2.62  c-1.48,0.63-3.06,0.94-4.74,0.94c-1.68,0-3.25-0.3-4.72-0.91c-1.47-0.61-2.76-1.46-3.88-2.55c-1.12-1.1-1.99-2.39-2.62-3.86  C229.17,109.59,228.85,107.98,228.85,106.23 M230.53,106.26c0,1.46,0.27,2.82,0.81,4.1c0.54,1.28,1.29,2.4,2.25,3.36  c0.96,0.96,2.08,1.72,3.34,2.27c1.26,0.55,2.61,0.82,4.05,0.82c1.48,0,2.86-0.27,4.13-0.82c1.28-0.55,2.4-1.3,3.36-2.27  c0.96-0.96,1.72-2.08,2.27-3.36c0.55-1.28,0.82-2.65,0.82-4.13c0-1.46-0.27-2.83-0.82-4.12c-0.55-1.29-1.3-2.42-2.27-3.39  c-0.96-0.97-2.08-1.74-3.36-2.3c-1.28-0.56-2.64-0.84-4.1-0.84c-1.48,0-2.85,0.29-4.13,0.86c-1.28,0.57-2.39,1.35-3.34,2.33  c-0.95,0.99-1.69,2.12-2.22,3.41C230.8,103.47,230.53,104.83,230.53,106.26"/>
<path class="st1" d="M264.76,94.27c0.9,0,1.79,0.13,2.67,0.39c0.88,0.26,1.69,0.66,2.42,1.21c0.73,0.55,1.32,1.25,1.76,2.1  c0.45,0.85,0.67,1.87,0.67,3.06c0,0.9-0.13,1.76-0.4,2.6c-0.27,0.84-0.7,1.6-1.31,2.27c-0.61,0.67-1.39,1.21-2.35,1.61  c-0.96,0.4-2.15,0.6-3.56,0.6h-3.7v10.01h-1.64V94.27H264.76z M264.56,106.53c1.19,0,2.17-0.17,2.96-0.5  c0.78-0.34,1.4-0.77,1.85-1.31c0.45-0.54,0.77-1.13,0.96-1.76c0.19-0.64,0.29-1.26,0.29-1.86c0-0.72-0.13-1.39-0.39-2.02  c-0.26-0.63-0.63-1.18-1.12-1.66c-0.49-0.48-1.09-0.86-1.78-1.14c-0.69-0.28-1.47-0.42-2.32-0.42h-4.03v10.68H264.56z   M267.99,107.27l6.62,10.85h-1.92l-6.65-10.82L267.99,107.27z"/>
<path class="st1" d="M286.09,94.27c1.48,0,2.77,0.25,3.88,0.76c1.11,0.5,1.97,1.25,2.59,2.25c0.62,1,0.92,2.25,0.92,3.75  c0,0.9-0.14,1.76-0.42,2.6c-0.28,0.84-0.73,1.6-1.34,2.27c-0.62,0.67-1.4,1.21-2.35,1.61c-0.95,0.4-2.1,0.6-3.44,0.6h-3.7v10.01  h-1.65V94.27H286.09z M285.92,106.53c1.16,0,2.13-0.18,2.91-0.55c0.77-0.37,1.38-0.84,1.81-1.41c0.44-0.57,0.75-1.17,0.94-1.8  c0.19-0.63,0.29-1.21,0.29-1.75c0-0.76-0.12-1.46-0.37-2.08c-0.25-0.63-0.61-1.17-1.09-1.63c-0.48-0.46-1.07-0.82-1.76-1.07  c-0.69-0.26-1.49-0.39-2.38-0.39h-4.03v10.68H285.92z"/>
<path class="st1" d="M297.68,106.23c0-1.68,0.31-3.25,0.94-4.72c0.63-1.47,1.5-2.77,2.62-3.9c1.12-1.13,2.41-2.02,3.88-2.65  c1.47-0.64,3.04-0.96,4.72-0.96c1.68,0,3.26,0.32,4.74,0.96c1.48,0.64,2.78,1.52,3.9,2.65c1.12,1.13,2,2.43,2.64,3.9  c0.64,1.47,0.96,3.04,0.96,4.72c0,1.68-0.32,3.25-0.96,4.72c-0.64,1.47-1.52,2.76-2.64,3.88c-1.12,1.12-2.42,1.99-3.9,2.62  c-1.48,0.63-3.06,0.94-4.74,0.94c-1.68,0-3.25-0.3-4.72-0.91c-1.47-0.61-2.76-1.46-3.88-2.55c-1.12-1.1-1.99-2.39-2.62-3.86  C297.99,109.59,297.68,107.98,297.68,106.23 M299.36,106.26c0,1.46,0.27,2.82,0.81,4.1c0.54,1.28,1.29,2.4,2.25,3.36  c0.96,0.96,2.08,1.72,3.34,2.27c1.26,0.55,2.61,0.82,4.05,0.82c1.48,0,2.86-0.27,4.13-0.82c1.28-0.55,2.4-1.3,3.36-2.27  c0.96-0.96,1.72-2.08,2.27-3.36c0.55-1.28,0.82-2.65,0.82-4.13c0-1.46-0.27-2.83-0.82-4.12c-0.55-1.29-1.3-2.42-2.27-3.39  c-0.96-0.97-2.08-1.74-3.36-2.3c-1.28-0.56-2.64-0.84-4.1-0.84c-1.48,0-2.85,0.29-4.13,0.86s-2.39,1.35-3.34,2.33  c-0.95,0.99-1.69,2.12-2.22,3.41C299.62,103.47,299.36,104.83,299.36,106.26"/>
<path class="st1" d="M333.59,94.27c0.9,0,1.79,0.13,2.67,0.39c0.88,0.26,1.69,0.66,2.42,1.21c0.73,0.55,1.32,1.25,1.76,2.1  c0.45,0.85,0.67,1.87,0.67,3.06c0,0.9-0.13,1.76-0.4,2.6c-0.27,0.84-0.7,1.6-1.31,2.27c-0.6,0.67-1.39,1.21-2.35,1.61  c-0.96,0.4-2.15,0.6-3.56,0.6h-3.7v10.01h-1.64V94.27H333.59z M333.39,106.53c1.19,0,2.17-0.17,2.96-0.5  c0.78-0.34,1.4-0.77,1.85-1.31c0.45-0.54,0.77-1.13,0.96-1.76c0.19-0.64,0.29-1.26,0.29-1.86c0-0.72-0.13-1.39-0.39-2.02  c-0.26-0.63-0.63-1.18-1.12-1.66c-0.49-0.48-1.09-0.86-1.78-1.14c-0.69-0.28-1.47-0.42-2.32-0.42h-4.03v10.68H333.39z   M336.81,107.27l6.62,10.85h-1.92l-6.65-10.82L336.81,107.27z"/>
<path class="st1" d="M347.33,118.12l10.08-24.89h0.13l10.08,24.89h-1.85L357,95.85l1.14-0.64l-9.17,22.91H347.33z M352.2,108.68  h10.58l0.47,1.54h-11.45L352.2,108.68z"/>
<polygon class="st1" points="369.43,94.27 385.05,94.27 385.05,95.85 378.03,95.85 378.03,118.12 376.38,118.12 376.38,95.85   369.43,95.85 "/>
<rect x="390.72" y="94.27" class="st1" width="1.65" height="23.85"/>
<path class="st1" d="M398.45,106.23c0-1.68,0.31-3.25,0.94-4.72c0.63-1.47,1.5-2.77,2.62-3.9c1.12-1.13,2.41-2.02,3.88-2.65  c1.47-0.64,3.04-0.96,4.72-0.96c1.68,0,3.26,0.32,4.74,0.96c1.48,0.64,2.78,1.52,3.9,2.65c1.12,1.13,2,2.43,2.64,3.9  c0.64,1.47,0.96,3.04,0.96,4.72c0,1.68-0.32,3.25-0.96,4.72c-0.64,1.47-1.52,2.76-2.64,3.88c-1.12,1.12-2.42,1.99-3.9,2.62  c-1.48,0.63-3.06,0.94-4.74,0.94c-1.68,0-3.25-0.3-4.72-0.91c-1.47-0.61-2.76-1.46-3.88-2.55c-1.12-1.1-1.99-2.39-2.62-3.86  C398.76,109.59,398.45,107.98,398.45,106.23 M400.13,106.26c0,1.46,0.27,2.82,0.81,4.1c0.54,1.28,1.29,2.4,2.25,3.36  c0.96,0.96,2.08,1.72,3.34,2.27c1.26,0.55,2.61,0.82,4.05,0.82c1.48,0,2.86-0.27,4.13-0.82c1.28-0.55,2.4-1.3,3.36-2.27  c0.96-0.96,1.72-2.08,2.27-3.36c0.55-1.28,0.82-2.65,0.82-4.13c0-1.46-0.27-2.83-0.82-4.12c-0.55-1.29-1.3-2.42-2.27-3.39  s-2.08-1.74-3.36-2.3c-1.28-0.56-2.64-0.84-4.1-0.84c-1.48,0-2.85,0.29-4.13,0.86c-1.28,0.57-2.39,1.35-3.34,2.33  c-0.95,0.99-1.69,2.12-2.22,3.41C400.39,103.47,400.13,104.83,400.13,106.26"/>
<polygon class="st1" points="448.87,118.69 430.06,97.5 430.49,97.16 430.53,118.12 428.92,118.12 428.92,93.77 429.02,93.77   447.83,115.13 447.39,115.27 447.36,94.27 448.94,94.27 448.94,118.69 "/>
</svg>
							</a>
						</h1>
            <ul class="topUtil">
               <!-- <li class="sitemap menuBtn"><a href="/other/sitemap.php">사이트맵</a></li> -->
               <li class="btnMenu_m menuBtn"><a>메뉴</a></li>
            </ul>   
         </div>
      </div>


<!--[s] 모바일 menuArea -->
<div id="menuArea" class="header_mobile" style="display:none;">
	<div class="menuList">
		<h2><a href="/" target="_self"><img src="/img/menu_logo.svg" alt="회계법인숲"/></a></h2>
		<ul class="list">
			<li><a href="/sub/forest.php">FOREST</a></li>
			<li><a href="/sub/expertise.php">EXPERTISE</a></li>
			<li><a href="/sub/solution.php">SOLUTION</a></li>
			<li><a href="/sub/team.php">TEAM</a></li>
			<li><a href="/sub/news.php">NEWS</a></li>
			<li><a href="/sub/contact.php">CONTACT</a></li>
		</ul>
		<div class="mail">
			<dl>
				<dt>MAIL</dt>
				<dd>FORESTAC@forestac.co.kr</dd>
			</dl>
		</div>
		<button type="button" class="btnMenu_mClose" title="메뉴닫기"></button>
	</div>
</div>
<!--[e] 모바일 menuArea -->

  

  
  
  <!-- Contents -->
  <div id="contents">

    



  




	










<div class="expertise_cont sub_effect">
	<div class="subTit_area center">
		<h2 class="subTit">CUTTING-EDGE EXPERTISE</h2>
		<!-- <div class="txt">회계법인숲 문구변경예정 2~3줄 회계법인숲 문구변경예정 2~3줄  회계법인숲 문구변경예정 2~3줄  회계법인숲 문구변경예정 2~3줄<br/> 회계법인숲 문구변경예정 2~3줄  회계법인숲 문구변경예정 2~3줄  회계법인숲 문구변경예정 2~3줄  회계법인숲 문구변경예정 2~3줄<br/> 회계법인숲 문구변경예정 2~3줄 회계법인숲 문구변경예정 2~3줄 회계법인숲 문구변경예정 2~3줄</div>	 -->
		<p>최근 국내외 산업은 다양하게 발전하고 빠르게 변화하고 있습니다. 이러한 변화의 흐름 속에서 가장 중요한 것은 유연하게 사고하고 폭넓은 경험을 갖춘 준비된 전문가와 함께하는 것입니다.&nbsp;<span style="font-family: SCoreDream, " noto="" sans="" kr",="" "josefin="" sans",="" "malgun="" gothic",="" sans-serif;"="">FOREST는 전통적인 제조업부터 트렌디한 4차산업에 이르기까지 모든 Biz에서의 경험과 전문성을 보유하고 있으며, 국내외 유수 기업에 양질의 재무자문 서비스를 제공하고 있습니다. FOREST</span><span style="font-family: SCoreDream, " noto="" sans="" kr",="" "josefin="" sans",="" "malgun="" gothic",="" sans-serif;"="">는 당신과 최고의 파트너가 되어 함께 성장하고자 합니다.</span></p>
<link rel="stylesheet" type="text/css" href="/comm/css/sub.css" />
<div class="txt">&nbsp;</div>
	</div>

	<!-- 연동 -->
			<div class="expertise_list">
			<div class="expertise_in" style="background-image:url('/admin/data/bbs/expertise/2207200147516_1.png');">
				<div class="w1280"><h3 class="subStit">MEDIA & TELECOMMUNICATIONS</h3><p class="plusBtn"><span></span></p></div>
				<div class="cont">
						<div>
							<h3 class="subStit">MEDIA & TELECOMMUNICATIONS</h3>
							<div class="txt">
								미디어/통신 산업은 사람과 사람, 컨텐츠와 사람을 이어줍니다. 미디어/통신 산업은 가입자에게 다양한 형태로 방송 및 통신 서비스를 제공하는 필수재 성격의 산업입니다. 미디어/통신 산업은 최근 가입자 포화로 인한 성장성 및 각종 산업 규제 이슈에 직면하고 있습니다. 
미디어를 기반으로 포트폴리오를 다변화하고, 가장 최적의 인수합병 시너지를 창출하는 기업들의 움직임에 FOREST 역시 해당 분야의 전문가들과 다양한 방법으로 고민하고 최적의 재무적 해결책을 기업에 제공하고 있습니다.
							</div>
						</div>
				</div>
								<a class="partnersBtn">PARTNERS</a>
							</div>
			<div class="partners_in">
				<div class="partners_roll">
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220555124_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220555012_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210415235_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210507465_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220555242_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210416029_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210416177_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220555517_1.png');" alt=""/></div>
									</div>
			</div>
		</div>
			<div class="expertise_list">
			<div class="expertise_in" style="background-image:url('/admin/data/bbs/expertise/2207200148362_1.png');">
				<div class="w1280"><h3 class="subStit">PLATFORM & TECHNOLOGY</h3><p class="plusBtn"><span></span></p></div>
				<div class="cont">
						<div>
							<h3 class="subStit">PLATFORM & TECHNOLOGY</h3>
							<div class="txt">
								플랫폼/IT 산업은 시공간을 초월하여 서비스와 사람을 모아주는 생태계로서의 역할을 담당하며 가장 가파른 성장을 하고 있습니다. 단순 중개에 그쳤던 과거와 달리 각종 IT기술력에 기반하여 진화한 현재의 플랫폼은 새로운 문화를 창조하고, 새로운 산업 생태계를 형성하고 있습니다. 소비자의 Needs를 얼마나 빠르게 파악하느냐는 플랫폼 사업의 향후 성장성에 직접적인 영향을 미친다는 점에서 과거 일반적이고 전통적인 산업분석과는 다른 View와 Valuation 접근법이 필요합니다. FOREST는 플랫폼 산업을 다양하게 경험한 전문가가 기업의 성장 잠재력과 가능성을 분석하고 최적의 솔루션을 제공합니다.
							</div>
						</div>
				</div>
								<a class="partnersBtn">PARTNERS</a>
							</div>
			<div class="partners_in">
				<div class="partners_roll">
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220542072_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210426259_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220543299_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220541569_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2210260229517_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210426432_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210427079_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220542557_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220543176_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210427214_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2210260208496_1.png');" alt=""/></div>
									</div>
			</div>
		</div>
			<div class="expertise_list">
			<div class="expertise_in" style="background-image:url('/admin/data/bbs/expertise/2207200151153_1.png');">
				<div class="w1280"><h3 class="subStit">CONTENTS & ENTERTAINMENT</h3><p class="plusBtn"><span></span></p></div>
				<div class="cont">
						<div>
							<h3 class="subStit">CONTENTS & ENTERTAINMENT</h3>
							<div class="txt">
								문화가 이루어지는 모든 소재를 아우르는 Contents & Entertainment 산업은 시대의 흐름에 가장 민감하며 역동적입니다. K-Contents의 글로벌 흥행에 힘입어 온라인게임, 음악, 그래픽기술, 최근에는 메타버스와 NFT 등의 분야에 이르기까지 국내의 유수 업체들이 글로벌 시장에서 활약하고 있습니다. 
이러한 흐름은 투자자들이 Contents & Entertainment Biz에 매력을 느끼게 하기에 충분합니다. Contents의 다이나믹하고 흥미로운 성장 속에서 FOREST는 기업의 창의적인 미래를 재무적인 시각에서 바라보고, 정보이용자에게 기업의 올바른 가치를 전달하고 있습니다.
							</div>
						</div>
				</div>
								<a class="partnersBtn">PARTNERS</a>
							</div>
			<div class="partners_in">
				<div class="partners_roll">
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220532475_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210513449_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220532212_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210513552_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2210260218237_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220529331_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220525052_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210514087_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220526032_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220526236_1.png');" alt=""/></div>
									</div>
			</div>
		</div>
			<div class="expertise_list">
			<div class="expertise_in" style="background-image:url('/admin/data/bbs/expertise/2207200152281_1.png');">
				<div class="w1280"><h3 class="subStit">ADVANCED MANUFACTURING</h3><p class="plusBtn"><span></span></p></div>
				<div class="cont">
						<div>
							<h3 class="subStit">ADVANCED MANUFACTURING</h3>
							<div class="txt">
								제조업은 전세계의 산업이 어떠한 방식으로 변화하든 가장 기초가 되는 산업입니다. 최근에는 전기차, IoT, 스마트기술 등 Platform & Technology 산업과 결합하여 그 폭이 더욱 넓어지고 있습니다. 모든 산업, 모든 공간에 '제조'가 필요한 만큼 제조업은 안정적인 현금흐름을 창출합니다. 정보통신 및 기술 강국인 국내에서는 인공지능, 스마트혁신으로 인해 어떤 국가보다도 빠르게 기술 우위를 선점하고 있으며, 이를 통해 글로벌 시장을 선도하고 있습니다. FOREST는 제조업 분야에 명확한 View를 가진 다양한 전문가가 최적의 재무자문을 제공할 준비가 되어있습니다.							</div>
						</div>
				</div>
								<a class="partnersBtn">PARTNERS</a>
							</div>
			<div class="partners_in">
				<div class="partners_roll">
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2307310620016_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220510014_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220510138_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210521542_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220509085_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220509197_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210522065_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220542419_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220509311_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220250248_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2210260214114_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2210251025393_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2309260301549_1.png');" alt=""/></div>
									</div>
			</div>
		</div>
			<div class="expertise_list">
			<div class="expertise_in" style="background-image:url('/admin/data/bbs/expertise/2207200154113_1.png');">
				<div class="w1280"><h3 class="subStit">CONSUMER & COMMERCE</h3><p class="plusBtn"><span></span></p></div>
				<div class="cont">
						<div>
							<h3 class="subStit">CONSUMER & COMMERCE</h3>
							<div class="txt">
								소비자들은 누구보다 변화에 빠르게 적응하고, 새로운 방식을 요구합니다. COVID-19는 소비에 대한 사람들의 생각을 크게 변화시켰습니다. 국내 전통적인 유통 업체를 비롯하여 플랫폼을 활용한 스타트업에 이르기까지 비대면시장에서 소비자를 사로잡기 위한 마케팅이 치열합니다. 유통업 진입장벽을 형성하기 위한 커머스 기업간의 인수합병, 플랫폼 포트폴리오 확장을 위한 공격적인 투자가 현재의 소비재 산업의 현 주소이며, 그 어느 때보다 E-COMMERCE 기업의 적정한 가치 평가가 중요합니다. FOREST는 해당 산업을 두루 경험한 전문가가 가치평가의 Practice를 제공하고 있습니다							</div>
						</div>
				</div>
								<a class="partnersBtn">PARTNERS</a>
							</div>
			<div class="partners_in">
				<div class="partners_roll">
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220502586_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220502288_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220503312_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220502017_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210527081_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210527482_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210527361_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210530371_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210527206_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220502464_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2210260221334_1.png');" alt=""/></div>
									</div>
			</div>
		</div>
			<div class="expertise_list">
			<div class="expertise_in" style="background-image:url('/admin/data/bbs/expertise/2207220322597_1.png');">
				<div class="w1280"><h3 class="subStit">HEALTHCARE & BIO</h3><p class="plusBtn"><span></span></p></div>
				<div class="cont">
						<div>
							<h3 class="subStit">HEALTHCARE & BIO</h3>
							<div class="txt">
								생명 과학 기술은 사람의 건강과 수명에 직접적인 영향을 미친다는 점에서 아주 중요한 산업분야입니다. 개발단계부터 상용화단계까지 오랜 시간이 소요되며, 기술적이고 윤리적인 이슈와 밀접하게 얽혀있습니다. 임상 성공 확률, 법적 이슈, 투자자와의 관계 등 현대의 헬스케어 산업은 불확실성과 동시에 매력적인 성장 잠재력으로 큰 주목을 받고 있습니다. Value Chain이 비교적 긴 헬스케어 및 바이오 산업에서 가장 중요한 것은 각 Chain에 재무적으로 이슈가 될 사항을 적시에 파악하고 해소하는 것입니다. FOREST는 헬스케어 및 바이오 산업의 가치사슬 전 과정에서 기업과 정보이용자의 정보 간극을 해소하고, 서로의 이슈를 재무적으로 해결하는데 필요한 최적의 파트너 입니다.
							</div>
						</div>
				</div>
								<a class="partnersBtn">PARTNERS</a>
							</div>
			<div class="partners_in">
				<div class="partners_roll">
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220321281_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220321354_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220321447_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220321513_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210533183_1.png');" alt=""/></div>
									</div>
			</div>
		</div>
			<div class="expertise_list">
			<div class="expertise_in" style="background-image:url('/admin/data/bbs/expertise/2207200157266_1.png');">
				<div class="w1280"><h3 class="subStit">FINANCIAL SERVICES</h3><p class="plusBtn"><span></span></p></div>
				<div class="cont">
						<div>
							<h3 class="subStit">FINANCIAL SERVICES</h3>
							<div class="txt">
								FINANCIAL SERVICE는 자본시장에 필수불가결한 산업 분야입니다. 국내 유수의 은행, 증권사, 투자회사(PE, VC)는 기업 투자, 인수합병, 구조조정, 대체투자 등을 통해 자금이 흐르도록하며 자원을 효율적으로 배분하는 역할을 합니다. 이 과정에서 올바른 의사결정은 반드시 필요하며, 잘못된 의사결정은 금융회사 뿐 아니라 투자 주체 모두에게 큰 손실을 안기게 됩니다. FOREST는 기업실사, 중소형 M&A 자문, Price Analysis에 최적화된 Big4 출신의 전문가가 모여있는 금융회사의 최적의 파트너입니다.							</div>
						</div>
				</div>
								<a class="partnersBtn">PARTNERS</a>
							</div>
			<div class="partners_in">
				<div class="partners_roll">
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220418087_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220418208_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220418289_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210540189_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210540318_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210540502_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210541057_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210541178_1.png');" alt=""/></div>
									</div>
			</div>
		</div>
			<div class="expertise_list">
			<div class="expertise_in" style="background-image:url('/admin/data/bbs/expertise/2207200158455_1.png');">
				<div class="w1280"><h3 class="subStit">CROSS-BORDER</h3><p class="plusBtn"><span></span></p></div>
				<div class="cont">
						<div>
							<h3 class="subStit">CROSS-BORDER</h3>
							<div class="txt">
								글로벌화가 가속화됨에 기업들은 내수 시장 고객 포화에 따른 고객 다변화 및 확장을 위해 국경을 넘나드는 M&A를 진행하고 있습니다. 해외 시장에 대한 지식, 이해 당사자 간의 원활한 소통 중재 등 해외 기업과의 업무에는 전문적인 역량이 무엇보다도 중요합니다.
FOREST는 국내 기업의 해외 투자 시 재무실사, 해외 기업 가치평가, 해외사 투자 포트폴리오 관리 및 평가에 경험이 있는 전문가들이 최적의 파트너로 함께할 준비가 되어 있습니다.							</div>
						</div>
				</div>
								<a class="partnersBtn">PARTNERS</a>
							</div>
			<div class="partners_in">
				<div class="partners_roll">
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2210260219037_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210544452_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210544536_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220443569_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220443196_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210545033_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220443007_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220444382_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220443477_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2304210545169_1.png');" alt=""/></div>
											<div class="roll"><img src="/sub/img/partners_blank.png" style="background-image:url('/admin/data/bbs/partners/2207220555012_1.png');" alt=""/></div>
									</div>
			</div>
		</div>
		<!-- //연동 -->

</div>




  </div> 
  <!--//Contents -->


   

      <div id="footer" class="section">
        <div class="contact">
         <div class="contact_in w1280">
            <h4 class="eng">CONTACT</h4>
            <p class="eng">For any inquiries, please <a href="/sub/contact.php" class="eng">contact us.</a></p>
         </div>
        </div>
          <div class="footer_in w1280">
				 <p class="eng">©2022 FOREST ACCOUNTING CORPORATION. All rights resered. Design by <a href="https://web2002.co.kr/" target="_blank" class="eng">Threeeay.</a></p>
				 <a href="/other/privacy.php" class="eng">Privacy Policy</a>
          </div>
      </div>

</div>
<!-- //wrap -->








<script>
(function() {
  // 1. Next.js App Router RSC 자동 요청 차단 (전체 리로드 방지)
  var _origFetch = window.fetch;
  window.fetch = function(url, opts) {
    var urlStr = typeof url === 'string' ? url : (url && url.url) || '';
    var headers = (opts && opts.headers) || {};
    var isRSC = headers['Next-Router-State-Tree'] ||
                headers['RSC'] === '1' ||
                headers['Next-Url'] ||
                urlStr.indexOf('_rsc=') !== -1;
    if(isRSC) return Promise.resolve(new Response('', { status: 204 }));
    return _origFetch.apply(this, arguments);
  };

  // 2. 동일 URL replaceState 무시 (리로드 루프 방지)
  var _replaceState = history.replaceState;
  history.replaceState = function(state, title, url) {
    if(url && url.toString() === location.pathname + location.search) return;
    return _replaceState.apply(this, arguments);
  };

  // 3. Next.js 링크 클릭 시 일반 페이지 이동으로 강제 전환
  document.addEventListener('click', function(e) {
    var link = e.target.closest('a[href]');
    if (!link) return;
    try {
      var u = new URL(link.href);
      if (u.origin === window.location.origin) {
        e.preventDefault();
        e.stopImmediatePropagation();
        window.location.href = link.href;
      }
    } catch(err) {}
  }, true);
})();
</script></body>
</html>