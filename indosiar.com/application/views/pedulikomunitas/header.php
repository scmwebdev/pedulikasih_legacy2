<?php
$no_fb_timeline         = true;
include (APPPATH."views/inc_header.php");
?>

<link rel="stylesheet" href="/assets/css/csr.css" type="text/css">
<div class="social-row">
    <ul class="social" id="css3-social">
        <li><span>Follow Us :<span></li>
    	<li class="facebook">
    		<a href="http://www.facebook.com/IndosiarPeduli" target="_blank"><strong>Facebook</strong></a>
    	</li>
    	<li class="twitter">
    		<a href="https://twitter.com/Indosiar_Peduli" target="_blank"><strong>Twitter</strong></a>
    	</li>
    	<li class="youtube">
    		<a href="http://www.youtube.com/user/IndosiarPeduli" target="_blank"><strong>Youtube</strong></a>
    	</li>
    </ul>
    <div style="clear:both"></div>
</div>
<div style="float:left;width:200px;margin-right:20px;">
	<div style="margin-bottom:15px"><a href="/pedulikomunitas"><img src="/assets/images/pedulikomunitas_logo.jpg" alt="peduli komunitas indosiar" title="peduli komunitas indosiar" border="0"/></a></div>
	<?php $pk_menu?>
	<br/>
    <div class="csr_programbox">
        <div style="text-align:center;"><a href="<?php site_url('pedulikasih')?>"><img src="/assets/images/pedulikasih_logo.png" width="120" border="0" alt="Peduli Kasih" title="Program Peduli Kasih INDOSIAR" /></a></div>
        <div class="csr_clickhere"><a href="<?php site_url('pedulikasih')?>">click here</a></div>
        <div style="text-align:center;"><a href="<?php site_url('kitapeduli')?>"><img src="http://static.indosiar.com/images/kitapeduli.jpg" width="100" border="0" alt="Kita Peduli" title="Program Kita Peduli INDOSIAR" /></a></div>
        <div class="csr_clickhere"><a href="<?php site_url('kitapeduli')?>">click here</a></div>
    </div>
</div>
<div style="float:right;width:700px;">
