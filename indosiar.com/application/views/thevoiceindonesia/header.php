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
<link rel="shortcut icon" href="/assets/thevoiceindonesia/images/favicon.ico" />
<script type="text/javascript" src="/assets/js/jquery.1.8.2.js"></script>
<style type="text/css">
body {
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    background-color: #000;
    background-image: url(/assets/thevoiceindonesia/images/background.jpg);
    background-repeat: no-repeat;
    background-position: center top;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
}
.center {
    width: 960px;
    margin-right: auto;
    margin-left: auto;
}
.header {
}
.logo {
    display: block;
    margin-top: 20px;
    margin-left: 45px;
    height: 290px;
    width: 250px;
    text-indent:-5000px;
}
.follow {
    margin-top: 192px;
    margin-left: 100px;
    width:250px;
}
.nav {
    margin-top: 200px;
    margin-left: 50px;
}
.nav a {
    font-size: 17px;
    color: #900;
    text-decoration: none;
    font-weight: bold;
    padding-right: 5px;
    padding-left: 5px;
}
.fl {
    float: left;
}
.fr {
    float: right;
}
.cb {
    clear: both;
}
h1 {
    display: block;
    margin-top: 0px;
    font-size: 30px;
    text-align: center;
    color: #000;
}
.container {
    font-size: 18px;
    color: #FFF;
    padding-right: 70px;
    padding-left: 70px;
}
.footer {
    border-top-width: 4px;
    border-top-style: solid;
    border-top-color: #1f0203;
    color: #C30;
    padding-top: 20px;
    padding-right: 50px;
    padding-bottom: 20px;
    padding-left: 50px;
    text-align: center;
}
</style>
</head>

<body>
<div class="center">
    <div class="header">
        <a href="/" class="logo fl">The Voice Indonesia</a>
        <div class="nav fl">
        <!--<a href="/">HOME</a> |
        <a href="/register">REGISTRASI</a> |
         <a href="/thevoiceindonesia/faq">F.A.Q</a> -->
        </div>

        <div class="follow fl">
            <span class="fl" style="display:block; margin-top:10px">Follow Us:</span>
            <a href="http://www.facebook.com/pages/The-Voice-Indonesia-Indosiar/398087256929062">
                <img src="/assets/thevoiceindonesia/images/fb.jpg" alt="FB" width="36" height="35" hspace="10" border="0" class="fl" />
            </a>
            <a href="https://twitter.com/thevoice_id">
                <img src="/assets/thevoiceindonesia/images/tw.jpg" width="36" height="35" border="0" class="fl" />
            </a>
            <!--
            <a href="#">
                <img src="/assets/thevoiceindonesia/images/rss.jpg" alt="RSS" width="36" height="35" hspace="10" border="0" class="fl" />
            </a>-->
        </div>
        <br />
    </div>
    <div class="cb"></div>
    <div class="container">
