<meta charset="utf-8" />
<meta name="referrer" content="none">
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
<meta name="robots" content="noindex">
<script src="//cdn.bitmovin.com/player/web/8/bitmovinplayer.js"></script>
<body><div id="bitmovin-94527"></div></body>
<style>
.boton{
 padding: 0.5rem;
 border: 0.5rem solid rebeccapurple; 
 border-radius: 0.3rem;
 font-size: .9rem;
 background: rebeccapurple;
 color: green;
  position: absolute;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}


#parent > a {
  opacity: 0.6;
  position:relative;
  float: center;
  right: -50%;
  bottom:100px;
}

</style>
<script type="text/javascript">
  function getParameterByName(name) {
      name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
      var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
      results = regex.exec(location.search);
      return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
var getURL = getParameterByName('get');
if (getURL == "#") {alert('Vuelve a la pagina anterior');}
if (getURL == "") {location.href="https://telegratis.online";}
if (getURL.length > 10) {
var container = document.getElementById('bitmovin-94527');
}
</script>
<script type="text/javascript">
var referrer =  document.referrer;
   if((referrer.indexOf("telegratis.online") > -1) || /iPad|iPod|BlackBerry|IEMobile|webOS|Opera Mini/i.test(navigator.userAgent)) {
function override(url){
  if (url.indexOf("licensing.bitmovin.com/licensing") > -1) return "data:text/plain;charset=utf-8;base64,eyJzdGF0dXMiOiJncmFudGVkIiwibWVzc2FnZSI6IlRoZXJlIHlvdSBnby4ifQ==";
  if (url.indexOf("licensing.bitmovin.com/impression") > -1) return "data:text/plain;charset=utf-8;base64,eyJzdGF0dXMiOiJncmFudGVkIiwibWVzc2FnZSI6IlRoZXJlIHlvdSBnby4ifQ==";
  return url;
}
var opens = XMLHttpRequest.prototype.open;
XMLHttpRequest.prototype.open = function() {
  var url = override(arguments[1]);
  arguments[1] = url;
  return opens.apply(this, arguments);
}
const config = {
  key: "11d3698c-efdf-42f1-8769-54663995de2b",
	analytics: false, cast: { enable: true },
	playback: { 
		autoplay: true, 
		muted: false
		},
	style: {width: '100%',height:'520px'},
		
	}

var source = {
	
dash: atob(getURL),
drm: {
    widevine: {
      LA_URL: 'https://telegratis.webcindario.com/cv.php'
    },
},
	title: "https://telegratis.online",
	
	//poster: ""
}

var player = new bitmovin.player.Player(container, config);
    player.load(source);

};
eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(3(){(3 a(){8{(3 b(2){7((\'\'+(2/2)).6!==1||2%5===0){(3(){}).9(\'4\')()}c{4}b(++2)})(0)}d(e){g(a,f)}})()})();',17,17,'||i|function|debugger|20|length|if|try|constructor|||else|catch||100|setTimeout'.split('|'),0,{}))
document.oncontextmenu = function(){return false}
</script>
<style>body{margin:0;}iframe{width:100%;height:100%;}.bmpui-ui-watermark{display:none;}.bmpui-ui-volumeslider .bmpui-seekbar .bmpui-seekbar-playbackposition-marker{background-color: #06F6EB;}.bmpui-ui-seekbar .bmpui-seekbar .bmpui-seekbar-playbackposition, .bmpui-ui-volumeslider .bmpui-seekbar .bmpui-seekbar-playbackposition{background-color: #06F6EB;}.bmpui-ui-seekbar .bmpui-seekbar .bmpui-seekbar-playbackposition-marker, .bmpui-ui-volumeslider .bmpui-seekbar .bmpui-seekbar-playbackposition-marker{border-color:#06F6EB;background-color:#06F6EB;}</style>
