<?php
if (!isset($HTMLMetaDescription)) $HTMLMetaDescription="";
if (!isset($HTMLMetaKeywords)) $HTMLMetaKeywords="";
if (!isset($HTMLCanonical)) $HTMLCanonical = site_url($_SERVER['REQUEST_URI']);
?><!DOCTYPE html>
<html class="html">
 <head>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.0.314.244"/>
<title><?=$HTMLPageTitle?></title>
<meta name="description" content="<?=htmlspecialchars($HTMLMetaDescription)?>" />
<meta name="keywords" content="<?=$HTMLMetaKeywords?>" />
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="<?=$assetsURL?>css/site_global.css?417434784"/>
  <link rel="stylesheet" type="text/css" href="<?=$assetsURL?>css/master_a-master.css?73207346"/>
  <link rel="stylesheet" type="text/css" href="<?=$assetsURL?>css/index.css?4042740877" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>

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
   </head>
 <body class="museBGSize">
