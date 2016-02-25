<?php
session_start();
include (APPPATH."views/videofiesta/inc_header.php");
$strID = "";
?>
<table width="996" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="15"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="15" height="10" /></td>
    <td width="241" valign="top">
	  <img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>bar2-mostcommented.gif" width="240" height="22" />
<?	 include (APPPATH."views/videofiesta/menu_komentar_video.php"); ?><br>
<?	 include (APPPATH."views/videofiesta/banner_kiri.php"); ?><br>
    </td>
    <td width="16"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="16" height="10" /></td>
    <td width="556" valign="top">
      	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td height="22" background="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>bg_bar.gif">
		  <div class="boxbar">Search Video </div>
		</td>
	  </tr>
	</table>
      <img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="5" height="5" /><br />
<?
if (isset($_REQUEST['vsearch']) && trim($_REQUEST['vsearch']) != "") $_SESSION['videosearch'] = trim($_REQUEST['vsearch']);

$vsearch=$_SESSION['videosearch'];
$page = $this->uri->segment(2);
$totrecord = $this->videofiesta_model->totalrecord($sqlx);

if ($totrecord > 0) {
	//echo $page;
	$batas = 10;
	
	$config['base_url'] = site_url("search");
	$config['uri_segment'] = 2;
	$config['total_rows'] = $totrecord;
	$config['per_page'] = $batas;
	$config['num_links'] = 2;
	if ($page == "" or isset($page)==FALSE) $page = 0;

	$sql="select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id and tblv.judul like '%$vsearch%' order by tblv.id desc limit $page, $batas";
	$this->pagination->initialize($config); 

	$query = $this->db->query($sql);
	if ($query->num_rows() > 0) {
		$rows = $query->result();
		foreach ($rows as $row)
		{				
				$sqlvote="select voteNr,voteValue from tbl_video_vote where imgId=".$row->id." order by id limit 0,1";
				$rating=$this->videofiesta_model->voting($sqlvote);						
?>	  
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="139"><a href="<?=$this->config->item('URL_VIDEOFIESTA')?><?=$row->id?>/<?=judul2url(htmlentities($row->judul))?>"><img src="http://www.indosiar.com/images/videofiesta/<?=$row->image?>" width="139" height="64" border="0" /></a></td>
          <td width="10"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="10" height="10" /></td>
          <td width="260"><span class="judul"><a href="<?=$this->config->item('URL_VIDEOFIESTA')?><?=$row->id?>/<?=judul2url(htmlentities($row->judul))?>"><?=$row->judul?></a> </span><br /><?=$row->keterangan?><br>Post: <?=beda_waktu(strtotime($row->tanggal))?> ago</td>
          <td width="10"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="10" height="10" /></td>
          <td width="121"><span class="category">Category</span>:<br /><?=$row->kategori?><br />
          Views: <?=$row->counter?><br />
<?			if ($rating==0) { ?>			  		  
                          <img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>star-empty.gif" width="18" height="18" />
<?			}
			else	{
				for ($i = 1; $i <= $rating; $i++) { ?>
				           <img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>star-ps.gif" width="18" height="18" />
<?				}
			}						   
?>						
			</td>
        </tr>
      </table>
	  <div class="separator"></div>	
<?
		}
	}	
	echo '<p align="center">'.$this->pagination->create_links().'</p>';	
	$query->free_result();	
}	
?>    
    </td>
    <td width="15" valign="top"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="15" height="10" /></td>
    <td width="139" valign="top">
	<?include (APPPATH."views/videofiesta/menu_promoted.php");?>
    </td>
    <td width="15"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="15" height="10" /></td>
  </tr>
</table>
<?
include (APPPATH."views/videofiesta/inc_footer.php");
?>
