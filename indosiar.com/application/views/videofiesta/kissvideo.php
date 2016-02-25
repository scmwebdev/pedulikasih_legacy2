<?
$recordv = $this->uri->segment(2);
$sql_not="";
$sql_not1="";
if ($recordv!="") {
	$sql="select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id and tblv.id_kategori=9 and tblv.id=".$recordv." order by tblv.id desc limit 0,1";
} else {
	$sql="select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id and tblv.id_kategori=9 order by tblv.id desc limit 0,1";	
}	
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
			$row = $query->row(); 			
			$flv=$row->file_flv;
			$id=$row->id;
			$judul=$row->judul;
			$tanggal_video=$row->tanggal;
			$keterangan=$row->keterangan;
		  $link = $row->link;
			$status_video=$row->status_video;
			$kategori=$row->kategori;
			$id_kategori=$row->id_kategori;
			$konter=$row->counter;
			$imagevideo=$row->image;
			if (trim($row->logo)<>"") {
				$logo="&logo=".$this->config->item('URL_VIDEOFIESTA_IMG').trim($row->logo);
			}
			else	{
				$logo="";	
			}	

			$sql_not.="id<>".$row->id;
			$sql_not1.="tblv.id<>".$row->id;
				
			$sqlvote="select voteNr,voteValue from tbl_video_vote where imgId=".$row->id." order by id limit 0,1";
			$rating=$this->videofiesta_model->voting($sqlvote);				
			$imgId=$row->id;			
}
$query->free_result();	
$ratingid=date("d").date("m").date("Y").date("H").date("s").date("s");

$sql="select * from tbl_video_banner where id_kategori=".$id_kategori." order by rand() limit 0,1";
$imagebanner=$this->videofiesta_model->imagebanner($sql) 	
echo '
				<div align="center" name="videospace" id="videospace">
					<div name=\'mediaspace\' id=\'mediaspace\'></div>
	        <script type="text/javascript" src="http://www.indosiar.com/swf/viral/swfobject.js"></script>
					<script type="text/javascript">
					var so = new SWFObject(\'http://www.indosiar.com/swf/viral/player-viral.swf\',\'mpl\',\'400\',\'320\',\'8\');
						so.addParam(\'wmode\',\'transparent\');
						so.addParam(\'allowscriptaccess\',\'always\');
						so.addParam(\'allowfullscreen\',\'true\');
						so.addVariable("enablejs", "true");
						so.addVariable(\'width\',\'400\');
						so.addVariable(\'height\',\'320\');
						so.addVariable(\'showstop\',\'true\');
						so.addVariable(\'searchbar\',\'false\');
						so.addVariable("channel", "1295");
						so.addVariable("plugins", "ltas_beta");	';
						
echo  '			so.addVariable(\'file\',\''.$this->config->item('URL_VIDEOS').'videofiesta/'.$flv.'\');
						so.addVariable(\'ltas.mediaid\',\''.$this->config->item('URL_VIDEOS').'videofiesta/'.$flv.'\');';
echo "					
						so.addVariable('title','".$judul."');
						so.addVariable('description','".$keterangan."');	
						so.addVariable('skin', 'http://www.indosiar.com/swf/jw/skins/stijl.swf');
						so.addVariable('image','".$imagebanner."');
						so.addVariable('logo','".$logo."');
						so.addVariable('linktarget','_self');
						so.addVariable('backcolor','0xFFFFFF');
						so.addVariable('frontcolor','0x333333');
						so.addVariable('lightcolor','0x000000');
						so.write('mediaspace');
					</script> 
					<script language=\"JavaScript\" src=\"http://www.ltassrv.com/serve/api5.4.asp?d=281&s=318&c=1295&v=1\"></script>
			  </div>";
?>	