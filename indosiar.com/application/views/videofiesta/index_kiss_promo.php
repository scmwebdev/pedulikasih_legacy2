<?php
include (APPPATH."views/videofiesta/inc_header_kiss.php");
$strID = "";
?>
<table width="860" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20">&nbsp;</td>
    <td width="431">&nbsp;</td>
    <td width="10">&nbsp;</td>
    <td width="379">&nbsp;</td>
    <td width="20">&nbsp;</td>
  </tr>
</table>
<table width="860" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20">&nbsp;</td>
    <td><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>colorhue.gif" width="431" height="7" /></td>
    <td width="10">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="20">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="431" valign="top"><div id="hasil">
        <div> 
          <p><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>kiss-vaganza5.jpg" width="420" height="150"></p>
          <p>Mau gabung di KISS vaganza tapi ngga tau caranya ? Ah gampang 
            kok. Buat kamu yang kepingin nonton langsung KISS Vaganza, datang 
            langsung aja ke <b>Studio 1 Indosiar di Jalan Damai no. 11 Daan Mogot 
            Jakarta Barat</b>. </p>
        </div>
        <div>Tapi rasanya kok ngga seru ya kalau nonton sendirian ? Kenapa juga 
          ngga datang rame-rame bareng temen, lebih seru kan ? Nah buat kamu yang 
          kepingin nonton bareng temen-temen, kamu tinggal kirim Fax ke nomor 
          <b>(021) 560 7234 / 565 5657 yang ditujukan ke Tim Produksi KISS Vaganza</b>. 
          Jagan lupa juga, tulis nomor telepon / Hp salah satu dari kamu.</div>
      <div>&nbsp;</div>
      <div>Nah ngga susah-kan buat nonton KISS Vaganza ?   Apalagi kalau nonton bareng temen, dijamin seru. Belum lagi Ruben, Eko sama Ivan   yang suka jahil sama penoton, dijamin seru. </div>
      <div>&nbsp;</div>
      <div>Ingat jangan sampe ketinggalan. Data temen-temen   kamu sekarang juga, dan kirim fax-nya.</div>
    </div>
      <br />          
    </td>
    <td>&nbsp;</td>
    <td valign="top">
<?
$artikel_kategori="kisspromo";
$page = $this->uri->segment(2);
$sqlx="select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id and tblv.id_kategori=9 order by tblv.id desc";

$totrecord = $this->videofiesta_model->totalrecord($sqltot);
if ($totrecord > 0) {
	//echo $page;
					$batas = 5;
					
					$config['base_url'] = site_url($artikel_kategori."/");
					$config['uri_segment'] = 2;
					$config['total_rows'] = $totrecord;
					$config['per_page'] = $batas;
					$config['num_links'] = 2;
					if ($page == "" or isset($page)==FALSE) $page = 0;
					$rec=1;
					$sql="select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id and tblv.id_kategori=9 order by tblv.id desc limit $page, $batas";
					$this->pagination->initialize($config); 						
					$query = $this->db->query($sql);
					if ($query->num_rows() > 0) {
?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
<?						
						$rows = $query->result();
						foreach ($rows as $row)
						{			
									$sqlvote="select voteNr,voteValue from tbl_video_vote where imgId=".$row->id." order by id limit 0,1";
									$rating=$this->videofiesta_model->voting($sqlvote);								
					?>			
					        <tr>
					          <td width="28%">
					            <table border="0" cellspacing="0" cellpadding="0">
					              <tr>
					                <td><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>v-frame_01.jpg" width="11" height="9" /></td>
					                <td bgcolor="#8E8E8E"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="5" height="5" /></td>
					                <td><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>v-frame_03.jpg" width="10" height="9" /></td>
					              </tr>
					              <tr>
					                <td bgcolor="#8E8E8E"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="5" height="5" /></td>
					                <td align="center"><a href="<?=$this->config->item('URL_VIDEOFIESTA')?>kiss/<?=$page?>/<?=$row->id?>/<?=judul2url(htmlentities($row->judul))?>"><img src="http://www.indosiar.com/images/videofiesta/<?=$row->image?>" width="139" height="65" border="0" /></a></td>
					                <td bgcolor="#8E8E8E"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="5" height="5" /></td>
					              </tr>
								  <tr>
					                <td><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>v-frame_07.jpg" width="11" height="8" /></td>
					                <td bgcolor="#8E8E8E"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="5" height="5" /></td>
					                <td><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>v-frame_09.jpg" width="10" height="8" /></td>
					              </tr>
					            </table>
					          </td>
					          <td width="72%">
					            <div style="margin-left:10px">
								<a href="<?=$this->config->item('URL_VIDEOFIESTA')?>kiss/<?=$page?>/<?=$row->id?>/<?=judul2url(htmlentities($row->judul))?>"><?=$row->judul?></a><br>
										          Views: <?=$row->counter?>&nbsp;
										<?			if ($rating==0) { ?>			  		  
										                          <img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>star-empty.gif" width="18" height="18" />
										<?			}
													else	{
														for ($i = 1; $i <= $rating; $i++) { ?>
														           <img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>star-ps.gif" width="18" height="18" />
										<?				}
													}						   
										?><br><br />
								</div>		
					          </td>
					        </tr>
					        <tr>
					          <td height="7" colspan="2" background="img/line.gif"><img src="img/blnk.gif" width="5" height="3" /></td>
					        </tr>
					<?
						}
?>
      </table>
<?						
					}
					echo '<p align="center">'.$this->pagination->create_links().'</p>';	
					$query->free_result();			
}						
					?>		  
	
    </td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="860" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right">KISS tv  &copy; 2008</td>
  </tr>
</table>
<table width="996" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td height="33" valign="bottom"  background="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>footer.gif" class="style2">
      <div align="right">&copy; 2008, INDOSIAR.COM&nbsp;&nbsp;&nbsp;&nbsp;</div>
    </td>
  </tr>
</table>
</body>
</html>