<?php
if (count($pk_data) > 0) {
	$sitename = "Peduli Komunitas";
	$HTMLPageTitle = $pk_data['judul']." - Peduli Komunitas";
	$HTMLMetaDescription =  $pk_data['judul']." - Peduli Komunitas";
	$HTMLMetaKeywords =  $pk_data['judul_menu'];
	
	include (APPPATH."views/pedulikomunitas/header.php");

	echo '
	<h1>'.$pk_data['judul'].'</h1>
	<p>&nbsp;</p>';
		
	echo '
	'.$pk_data['isi'];
	
	include (APPPATH."views/pedulikomunitas/footer.php");
}
?>