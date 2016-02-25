<?
if ($this->uri->segment(2) == "berita") {
		include (APPPATH."views/pedulikasih/pk_berita.php");
} elseif ($this->uri->segment(2) == "penerimabantuan") {
		include (APPPATH."views/pedulikasih/pk_penerimabantuan.php");
} elseif ($this->uri->segment(2) == "rumahsakit") {
		include (APPPATH."views/pedulikasih/pk_rumahsakit.php");
} elseif ($this->uri->segment(2) == "bcaperorangan") {
		include (APPPATH."views/pedulikasih/pk_bcaperorangan.php");
} elseif ($this->uri->segment(2) == "bcaperusahaan") {
		include (APPPATH."views/pedulikasih/pk_bcaperusahaan.php");
} else 
		include (APPPATH."views/pedulikasih/pk_bcaperorangan.php");
?>