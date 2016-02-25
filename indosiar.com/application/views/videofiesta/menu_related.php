<img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>bar-related.gif" width="139" height="22" /><br />
<img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="5" height="5" /><br>
<?
$query = $this->db->query("select id,tanggal,image,judul from tbl_video where id_kategori=".$id_kategori." and status_video=1 order by rand() limit 0,16");
if ($query->num_rows() > 0) {
			$rows = $query->result();
			foreach ($rows as $row)
			{
?>			
<a href="<?=$this->config->item('URL_VIDEOFIESTA')?><?=$row->id?>/<?=$this->allfunction->judul2url(htmlentities($row->judul))?>"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?><?=$row->image?>" title="<?echo $row->judul.' -- Post: '.$this->allfunction->beda_waktu(strtotime($row->tanggal)).' ago';?>" alt="<?echo $row->judul.' -- Post: '.$this->allfunction->beda_waktu(strtotime($row->tanggal)).' ago';?>" border="0" width="139" height="64" /></a>
<?
			}
}
$query->free_result();			
?>