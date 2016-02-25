<?php
if (count($pk_data) > 0) {
	$sitename = "Peduli Kasih";
	$HTMLPageTitle = $pk_data['judul']." - Peduli Kasih";
	$HTMLMetaDescription =  $pk_data['judul']." - Peduli Kasih";
	$HTMLMetaKeywords =  $pk_data['judul_menu'];
	
	include (APPPATH."views/pedulikasih/header.php");

	echo '
	<h1>'.$pk_data['judul'].'</h1>
	<p>&nbsp;</p>';
		
	echo '
	'.$pk_data['isi'];
	
	include (APPPATH."views/pedulikasih/footer.php");
}
?>