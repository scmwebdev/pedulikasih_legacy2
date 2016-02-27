<?php
$sitename = "Peduli Kasih";
$HTMLPageTitle = "Peduli Kasih - Daftar Laporan Penerima Bantuan";
$HTMLMetaDescription = "Daftar Laporan Penerima Bantuan Peduli Kasih";
$HTMLMetaKeywords = "Daftar Laporan Penerima Bantuan, peduli kasih";

include (APPPATH."views/inc_header.php");
include (APPPATH."views/pedulikasih/pk_top.php");
?>

	<div class="JudulArtikel">Daftar Laporan Penerima Bantuan Peduli Kasih</div>
	<p>&nbsp;</p>

<?php 
$batas = 15;
$segment=4;
$page = trim($this->uri->segment(4));
if ($page == "" || !is_numeric($page)) $page = 1;
$strlimit = ($page == 1) ? " limit 0, $batas" : " limit ". $page .", $batas";

$sqltot = "select title from jos_content where trim(left(title,31))='Laporan Pasien Penerima Bantuan' and length(trim(introtext))<350";
$totrecord=$this->pedulikasih_model->totalrecord($sqltot);

if ($totrecord > 0) {
	$sql = "select * from jos_content where trim(left(title,31))='Laporan Pasien Penerima Bantuan' and length(trim(introtext))<350 order by id desc ".$strlimit;	
	echo $this->pedulikasih_model->pagingrs("pedulikasih/penerimabantuan/page",$sql,$totrecord,$batas,$segment,"intro");
}

include (APPPATH."views/pedulikasih/pk_bottom.php");
include (APPPATH."views/inc_footer.php");
?>