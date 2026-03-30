<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><script>
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
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL /bbs/board.php was not found on this server.</p>


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
</script></body></html>