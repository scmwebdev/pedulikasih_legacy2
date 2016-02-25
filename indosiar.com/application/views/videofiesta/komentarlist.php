<?	  
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache"); 

$artikel_judul_id = $this->uri->segment(2);

$query = $this->db->query("select nama,komentar from tbl_video_komentar where id_video=$artikel_judul_id order by id desc limit 0,10");
if ($query->num_rows() > 0) {
			$rows = $query->result();
			foreach ($rows as $row)
			{	

			$row->komentar=str_replace("document.write","",$row->komentar);
			$row->nama=str_replace("document.write","",$row->nama);
			echo '<div class="box3">'.$this->allfunction->strip_script($row->nama).'<br>'.$this->allfunction->strip_script($row->komentar).'</div>';

			}
}			
$query->free_result();	
?>