<?
if (!isset($HTMLMetaDescription)) $HTMLMetaDescription="";
if (!isset($HTMLMetaKeywords)) $HTMLMetaKeywords="";
if (!isset($HTMLCanonical)) $HTMLCanonical = site_url($_SERVER['REQUEST_URI']);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$HTMLPageTitle?></title>
<meta name="description" content="<?=htmlspecialchars($HTMLMetaDescription)?>" />
<meta name="keywords" content="<?=$HTMLMetaKeywords?>" />
<meta http-equiv="Content-Type"	content="text/html; charset=iso-8859-1" />
<meta name="robots" content="all" />
<meta name="google-site-verification" content="YCqKTsMAsI6Feo3WXhb5r5zzmOBQ4XSK01PMc-yl6Mk" />
<meta name="msvalidate.01" content="77115FB9ED53BA8A1529A3F0027F1D89" />
<link rel="canonical" href="<?=$HTMLCanonical?>" />
<link rel="SHORTCUT ICON" type="image/x-icon" href="/favicon.ico" />
<script type="text/javascript" src="/assets/js/jquery.1.8.2.js"></script>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-27419835-1']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<style type="text/css">
body {
	background: #ffffff url(/assets/images/takemeout/bg.jpg) no-repeat top fixed;
	font-size:12px; 
	font-family: Lucida Grande, Verdana, Sans-serif;
	color:#000;
	margin:0;padding:0;
}

a {
	color: #000;
	background-color: transparent;
	font-weight: normal;
	text-decoration: none;
}

a:hover {
	text-decoration: none;
	color: #ffcc00;
}

h1 {text-align: center;font:bold 24px Lucida Sans,Lucida Grande,Trebuchet MS;letter-spacing:-2px;color:#000;margin:0 0 40px;padding:0;}
.wrapper {
	margin:0;
	padding:10px 0;
}
.container {margin:0 auto;padding:0;width:960px;}
.thecontent {margin:0;padding:0;}

.underlinemenu{font-weight: bold;width: 100%;margin-bottom:20px;}
.underlinemenu ul{
padding: 6px 0 7px 0; /*6px should equal top padding of "ul li a" below, 7px should equal bottom padding + bottom border of "ul li a" below*/
margin: 0;
text-align: right; //set value to "left", "center", or "right"*/
}
.underlinemenu ul li{display: inline;}
.underlinemenu ul li a{
color: #ED1C24;
padding: 6px 3px 4px 3px; /*top padding is 6px, bottom padding is 4px*/
margin-right: 20px; /*spacing between each menu link*/
text-decoration: none;
border-bottom: 3px solid #ED1C24; /*bottom border is 3px*/
}
.underlinemenu ul li a:hover, .underlinemenu ul li a.selected{color:black; border-bottom-color: black;}

input[type=text],
input[type=password]{
	background: rgba(255, 255, 255, 0.9);
	background:-moz-linear-gradient(90deg, #fff, #eee); /* Firefox */
	background:-webkit-gradient(linear, left top, left bottom, from(#eee), to(#fff), color-stop(0.2, #fff)); /* Webkit */
	border:1px solid #aaa;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	-moz-box-shadow:0 0 3px #aaa;
	-webkit-box-shadow:0 0 3px #aaa;
	padding:5px;
}
input[type=text]:focus,
input[type=password]:focus{
	border-color:#093c75;
	-moz-box-shadow:0 0 3px #0459b7;
	-webkit-box-shadow:0 0 3px #0459b7;
	outline:none; /* Pour enlever le contour jaune lorsque l'on sélectionne un input dans Chrome */
}

input[readonly]::-moz-focus-inner, input[readonly]:focus, input[readonly] {-moz-box-shadow:none;-webkit-box-shadow:none;background:none;border:none;border-bottom:1px solid #ccc;padding:0;outline:0;}
input[readonly]:focus {cursor:none}

select{
	cursor:pointer;
	padding:3px;
	-moz-box-shadow:0 0 3px #aaa;
	-webkit-box-shadow:0 0 3px #aaa;
}
select:active,
select:focus{
	border:1px solid #093c75;
	-moz-box-shadow:0 0 3px #0459b7;
	-webkit-box-shadow:0 0 3px #0459b7;
	outline:none;
}
input[type=submit],input[type=button]{
	background:#ddd;
	background:-moz-linear-gradient(90deg, red, #666); /* Firefox */
	background:-webkit-gradient(linear, left top, left bottom, from(#08adff), to(#0459b7)); /* Webkit */
	border:1px solid #666;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	-moz-box-shadow:0 1px 0 #fff;
	-webkit-box-shadow:0 1px 0 #fff;
	color:#fff;
	cursor:pointer;
	font-family:Arial,sans-serif;
	font-size:12px;
	font-weight:bold;
	/*margin-left:120px;*/
	padding:5px 10px;
	text-decoration:none;
	text-shadow:0 1px 1px #333;
	text-transform:uppercase;
}
input[type=submit]:hover{
	background:#eee;
	background:-moz-linear-gradient(90deg, #067cd3, #0bcdff);
	background:-webkit-gradient(linear, left top, left bottom, from(#0bcdff), to(#067cd3));
	border-color:#093c75;
	text-decoration:none;
}
input[type=submit]:active,
input[type=submit]:focus{
	background:#ccc;
	background:-moz-linear-gradient(90deg, #0bcdff, #067cd3);
	background:-webkit-gradient(linear, left top, left bottom, from(#067cd3), to(#0bcdff));
	border-color:#093c75;
	outline:none;
}
</style>
<link rel="stylesheet" href="/js/jquery.fancybox.css" type="text/css">
<script type="text/javascript" src="/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".various").fancybox({
		//maxWidth	: 800,
		//maxHeight	: 600,
		fitToView	: false,
		width		: 320,
		height		: 240,
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
</script>
</head>
<body>
<div class="wrapper">
	<div class="container">
		<div style="float:left;width:100px;text-align:center;"><a href="/"><img src="/assets/images/takemeout/tmo_ivm.png" alt="Indosiar Visual Mandiri" /></a></div>
		<div style="float:left;width:760px;text-align:center;"><a href="/takemeout"><img src="/assets/images/takemeout/tmo_logo.png" alt="Take Me Out Indonesia" /></a></div>
		<div style="float:left;width:100px;"></div>
		<div style="clear:left"></div>
		<div style="margin-top:30px;padding:15px;background:#fff;opacity:0.8;filter:alpha(opacity=80);border-radius:15px;">
			<div style="text-align:right;margin-bottom:20px;"><img src="/assets/images/takemeout/tmo_fremantle.png" alt="" /></div>  
