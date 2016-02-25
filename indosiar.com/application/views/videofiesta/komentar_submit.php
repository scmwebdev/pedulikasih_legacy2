<?
$ipuser=$_SERVER['REMOTE_ADDR'];
$email = trim($_REQUEST['email']);
if (!$this->allfunction->checkemail($email)) {
		echo 'Email tidak valid';
}else {		
	$strkomentar=str_replace("href=","",$_REQUEST['komentar']);
	$strkomentar=str_replace("HREF=","",$strkomentar);
	$strkomentar=str_replace("http://","",$strkomentar);
	$strkomentar=str_replace("img src=","",$strkomentar);
	$strkomentar=str_replace("IMG SRC=","",$strkomentar);
	if (strlen($_REQUEST['komentar'])==strlen($strkomentar)) {
		$sql_insert="insert into tbl_video_komentar(tanggal,id_video,nama,komentar,ip) values (now(),".$_REQUEST['videoid'].",".$this->db->escape($this->allfunction->strip_script($_REQUEST['nama'])).",".$this->db->escape($this->allfunction->strip_script($_REQUEST['komentar'])).",".$this->db->escape($ipuser).")";
		$this->db->query($sql_insert);
	}
	
	$query = $this->db->query("select nama,komentar from tbl_video_komentar where id_video=".$_REQUEST['videoid']." order by id desc limit 0,10");
	if ($query->num_rows() > 0) {
				foreach ($query->result() as $row)
				{	
	?>
	<div class="box3"><?=$row->nama?><br><?=$row->komentar?></div>
	<?
				}
	}			
	$query->free_result();	
}	
?>