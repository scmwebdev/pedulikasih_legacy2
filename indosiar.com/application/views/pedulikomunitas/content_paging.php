<?php
$sitename = "Peduli Komunitas";
$HTMLPageTitle = $pk_kategori_judul." - Peduli Komunitas";
$HTMLMetaDescription =  substr(str_replace(array("\r","\n"),"",htmlspecialchars(strip_tags($pk_kategori_desc))),0,156);
$HTMLMetaKeywords =  $pk_kategori;

include (APPPATH."views/pedulikomunitas/header.php");

echo '
<h1>'.$pk_kategori_judul.'</h1>
<p>&nbsp;</p>';

if ($pk_totrecord > 0) {
	echo '<div class="list-paging"><ul>';
	
	foreach($pk_data as $row) {
		if ($pk_kategori == "audit" && $row['pdf'] != "")
			echo '<li><h2><a href="'.URL_STATIC.'pdf/pedulikomunitas/content/'.$row['pdf'].'">'.$row['judul'].'</a></h2>'.$row['ringkasan'].'</li>';
		else
			echo '<li><h2><a href="/pedulikomunitas/'.$row['kategori'].'/'.$row['judul_url'].'">'.$row['judul'].'</a></h2>'.$row['ringkasan'].'</li>';
	}
	
	echo '</ul></div>';
	
	echo $pk_paging;
}

include (APPPATH."views/pedulikomunitas/footer.php");
?>