<?php
if (count($pk_data) > 0) {
	$sitename = "Peduli Komunitas";
	$HTMLPageTitle = $pk_data['judul']." - Peduli Komunitas";
	$HTMLMetaDescription =  $pk_data['ringkasan'];
	$HTMLMetaKeywords =  $pk_kategori;
	
	include (APPPATH."views/pedulikomunitas/header.php");

	echo '
	<h1>'.$pk_data['judul'].'</h1>
	<p>&nbsp;</p>
	'.$pk_data['isi'];
	
	if ($pk_data['pdf'] != "") echo '<div style="text-align:center;margin-top:20px;"><a href="'.URL_STATIC.'pdf/pedulikomunitas/content/'.$pk_data['pdf'].'"><img src="/assets/images/download_pdf.png" alt="DOWNLOAD PDF" border="0" /></a></div>';
	
	$pk_list = $this->pedulikomunitas_model->getContentList($pk_data['kategori'],10,$pk_data['id']);
	if (count($pk_list) > 0) {
			echo '<div class="list-lain"><h2>'.$pk_kategori_judul.' Lainnya</h2><ul>';
			foreach($pk_list as $row) echo '<li><a href="/pedulikomunitas/'.$row['kategori'].'/'.$row['judul_url'].'">'.$row['judul'].'</a>'.substr($row['ringkasan'],0,250).'...</li>';
			echo '</ul><div style="text-align:right;margin-top:5px;">[ <a href="/pedulikomunitas/'.$pk_kategori.'/page">index artikel</a> ]</div></div>';
	}
	
	include (APPPATH."views/pedulikomunitas/footer.php");
}
?>