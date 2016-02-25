<?
$artikel_judul_id = $this->uri->segment(2);

if ($artikel_judul_id == "") {
	redirect();
} else {
		$sql = "select id from tbl_video where id=".$this->db->escape($artikel_judul_id);
		$jalur=$this->videofiesta_model->checkinclude($sql);
		if ($jalur=="ok") {
				include (APPPATH."views/videofiesta/read.php");
		}
		else	{
			$artikel_judul_id=strtolower($artikel_judul_id);
			if ($artikel_judul_id=='kiss') {
						$artikel_kategori=$artikel_judul_id;
						include (APPPATH."views/videofiesta/index_kiss.php");
		  }else {					
				$sql = "select id from tbl_video_kategori where lower(kategori_url)=".$this->db->escape($artikel_judul_id);
				$jalur=$this->videofiesta_model->checkinclude($sql);	
				if ($jalur=="ok") {
						$artikel_kategori=$artikel_judul_id;
						include (APPPATH."views/videofiesta/arsip.php");
				}
				else	{			
					redirect();
				}
			}	
		}			
}	
?>