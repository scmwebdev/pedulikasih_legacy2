<?php
$sitename = "Peduli Kasih";
$HTMLPageTitle = "Peduli Kasih - Daftar Rumah Sakit";
$HTMLMetaDescription = "Daftar Rumah Sakit Peduli Kasih";
$HTMLMetaKeywords = "Rumah Sakit, peduli kasih";

include (APPPATH."views/inc_header.php");
include (APPPATH."views/pedulikasih/pk_top.php");
?>

	<div class="JudulArtikel">Daftar Rumah Sakit Peduli Kasih</div>
	<p>&nbsp;</p>
 
<?php
$batas = 15;
$segment=4;
$page = trim($this->uri->segment(4));
if ($page == "" || !is_numeric($page)) $page = 1;
$strlimit = ($page == 1) ? " limit 0, $batas" : " limit ". $page .", $batas";

$sqltot = "select title from jos_content where trim(left(title,18))='Daftar Rumah Sakit' order by id desc ";	

$totrecord=$this->pedulikasih_model->totalrecord($sqltot);

if ($totrecord > 0) {
	$sql = "select * from jos_content where trim(left(title,18))='Daftar Rumah Sakit' order by id desc ".$strlimit;	
	echo $this->pedulikasih_model->pagingberita("pedulikasih/rumahsakit/page",$sql,$totrecord,$batas,$segment,"intro");
}

include (APPPATH."views/pedulikasih/pk_bottom.php");
include (APPPATH."views/inc_footer.php");
?>