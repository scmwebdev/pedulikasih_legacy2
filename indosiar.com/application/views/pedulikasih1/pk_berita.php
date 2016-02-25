<?php
$sitename = "Peduli Kasih";
$HTMLPageTitle = "Peduli Kasih - Berita";
$HTMLMetaDescription = "Berita Peduli Kasih";
$HTMLMetaKeywords = "Berita, peduli kasih";

include (APPPATH."views/inc_header.php");
include (APPPATH."views/pedulikasih/pk_top.php");
?>

	<div class="JudulArtikel">Berita Peduli Kasih</div>
	<p>&nbsp;</p>

<?
$batas = 5;
$segment=4;
$page = trim($this->uri->segment(4));
if ($page == "" || !is_numeric($page)) $page = 1;
$strlimit = ($page == 1) ? " limit 0, $batas" : " limit ". $page .", $batas";

$sqltot = "select * from jos_content where sectionid=13";
$totrecord=$this->pedulikasih_model->totalrecord($sqltot);

if ($totrecord > 0) {
	$sql = "select * from jos_content where sectionid=13 order by id desc ".$strlimit;	
	echo $this->pedulikasih_model->pagingberita("pedulikasih/berita/page",$sql,$totrecord,$batas,$segment,"full");
}
include (APPPATH."views/pedulikasih/pk_bottom.php");
include (APPPATH."views/inc_footer.php");
?>