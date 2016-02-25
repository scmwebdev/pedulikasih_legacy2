<?php
$sitename = "Peduli Kasih";
$HTMLPageTitle = $pk_kategori_judul." - Peduli Kasih";
$HTMLMetaDescription =  substr(str_replace(array("\r","\n"),"",htmlspecialchars(strip_tags($pk_kategori_desc))),0,156);
$HTMLMetaKeywords =  $pk_kategori;

include (APPPATH."views/pedulikasih/header.php");

if (count($pk_data) > 0) {
	echo '
	<h1>'.$pk_data['judul'].'</h1>
	<p>&nbsp;</p>';
	
	if (count($pk_list) > 0) {
			echo '<div class="list-float"><ul>';
			foreach($pk_list as $row) {
				if ($pk_kategori == "audit" && $row['pdf'] != "")
					echo '<li><a href="'.URL_STATIC.'pdf/pedulikasih/content/'.$row['pdf'].'">'.$row['judul'].'</a>'.$row['ringkasan'].'</li>';
				else
					echo '<li><a href="/pedulikasih/'.$row['kategori'].'/'.$row['judul_url'].'">'.$row['judul'].'</a>'.substr($row['ringkasan'],0,200).'...</li>';
			}
			echo '</ul><div style="text-align:right;margin-top:5px;">[ <a href="/pedulikasih/'.$pk_kategori.'/page">index artikel</a> ]</div></div>';
	}
	
	echo '
	'.$pk_data['isi'];
}

include (APPPATH."views/pedulikasih/footer.php");
?>