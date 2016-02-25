<?
$query = $this->db->query("select judul,keterangan,image from tbl_video where id=".$_REQUEST['idvideo']." limit 0,1");
if ($query->num_rows() > 0) {
	$row = $query->row(); 
	$judul=$row->judul;
	$keterangan=$row->keterangan;
	$image=$row->image;
}	
$query->free_result();	
	
$emailtxt="<div><h2>Your friend wants to share a video with you</h2><div><a href='http://www.indosiar.com/videofiesta/".$_REQUEST['idvideo']."/";
$emailtxt.=$this->allfunction->judul2url(str_replace("&","dan",$judul));
$emailtxt.="'><img src='http://www.indosiar.com/images/videofiesta/".$image."'  border='1' /></a><div><a href='http://www.indosiar.com/videofiesta/".$_REQUEST['idvideo']."/";
$emailtxt.=$this->allfunction->judul2url(str_replace("&","dan",$judul));
$emailtxt.="'>watch video</a></div></div><h3>Video Description</h3><p>".$keterangan."</p></div>";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: mailadmin@indosiar.com";

mail($_REQUEST['email'], "Video from you", $emailtxt, $headers);
?>
