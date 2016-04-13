<?php
if (count($pk_data) > 0) {
	$sitename = "Peduli Kasih";
	$HTMLPageTitle = $pk_data['judul']." - Peduli Kasih";
	$HTMLMetaDescription =  $pk_data['ringkasan'];
	$HTMLMetaKeywords =  $pk_kategori;
	
	include (APPPATH."views/pedulikasih/header.php");
	include (BASEPATH.'../env.php');

	echo '
	<h1>'.$pk_data['judul'].'</h1>
	<p>&nbsp;</p>
	'.$pk_data['isi'];
	
	// if ($pk_data['pdf'] != "") echo '<div style="text-align:center;margin-top:20px;"><a href="'.URL_STATIC.'pdf/pedulikasih/content/'.$pk_data['pdf'].'"><img src="/assets/images/download_pdf.png" alt="DOWNLOAD PDF" border="0" /></a></div>';

	if ($pk_data['pdf'] != "") echo '<div style="text-align:center;margin-top:20px;"><a href="'. $env_config['host'] .'/assets/pdf/pedulikasih/'.$pk_data['pdf'].'"><img src="/assets/images/download_pdf.png" alt="DOWNLOAD PDF" border="0" /></a></div>';

	
	$pk_list = $this->pedulikasih_model->getContentList($pk_data['kategori'],10,$pk_data['id']);
	if (count($pk_list) > 0) {
			echo '<div class="list-lain"><h2>'.$pk_kategori_judul.' Lainnya</h2><ul>';
			foreach($pk_list as $row) echo '<li><a href="/pedulikasih/'.$row['kategori'].'/'.$row['judul_url'].'">'.$row['judul'].'</a>'.substr($row['ringkasan'],0,250).'...</li>';
			echo '</ul><div style="text-align:right;margin-top:5px;">[ <a href="/pedulikasih/'.$pk_kategori.'/page">index artikel</a> ]</div></div>';
	}
	
	include (APPPATH."views/pedulikasih/footer.php");
}
?>