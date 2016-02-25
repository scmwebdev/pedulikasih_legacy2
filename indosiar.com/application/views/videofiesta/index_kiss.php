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
    <td width="431" valign="top">
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>v-frame_01.jpg" width="11" height="9" /></td>
          <td bgcolor="#8E8E8E"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>v-frame_02.jpg" width="410" height="9" /></td>
          <td><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>v-frame_03.jpg" width="10" height="9" /></td>
        </tr>
        <tr>
          <td><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>v-frame_04.jpg" width="11" height="344" /></td>
          <td bgcolor="#000000">
<?
$recordv = $this->uri->segment(4);
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
				$logo="&logo=".$this->config->item('URL_VIDEOFIESTA_IMG')."videofiesta/".trim($row->logo);
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
$imagebanner=$this->videofiesta_model->imagebanner($sql);
?>		  
        <div align="center" style="background-color:#333333">
				<div align="center">
					<div name='mediaspace' id='mediaspace'></div>
	         <script type="text/javascript" src="http://www.indosiar.com/swf/viral/swfobject.js"></script>
					<script type="text/javascript">
					var so = new SWFObject('http://www.indosiar.com/swf/jw/player.swf','mpl','400','320','8');
						so.addParam('wmode','transparent');
						so.addParam('allowscriptaccess','always');
						so.addParam('allowfullscreen','true');
						so.addVariable("enablejs", "true");
						so.addVariable('width','400');
						so.addVariable('height','320');
						so.addVariable('showstop','true');
						so.addVariable('searchbar','false');
						so.addVariable("channel", "1295");
						so.addVariable("plugins", "ltas_beta");	
						so.addVariable('file','http://www.indosiar.com/static/video/videofiesta/<?=$flv?>');
						so.addVariable('ltas.mediaid','http://www.indosiar.com/static/video/videofiesta/<?=$flv?>');
						so.addVariable('title','<?=$judul?>');
						so.addVariable('description','<?=$keterangan?>');	
						so.addVariable('skin', 'http://www.indosiar.com/swf/jw/skins/stijl.swf');
						so.addVariable('image','<?=$imagebanner?>');
						so.addVariable('logo','<?=$logo?>');
						so.addVariable('linktarget','_self');
						so.addVariable('backcolor','0xFFFFFF');
						so.addVariable('frontcolor','0x333333');
						so.addVariable('lightcolor','0x000000');
						so.write('mediaspace');
					</script> 
				<script language="JavaScript" src="http://www.ltassrv.com/serve/api5.4.asp?d=281&s=318&c=1295&v=1"></script>
			  </div>				
        </div>		  
		  </td>
          <td><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>v-frame_06.jpg" width="10" height="344" /></td>
        </tr>
        <tr>
          <td><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>v-frame_07.jpg" width="11" height="8" /></td>
          <td bgcolor="#8E8E8E"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>v-frame_08.jpg" width="410" height="8" /></td>
          <td><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>v-frame_09.jpg" width="10" height="8" /></td>
        </tr>
      </table>
            <div><strong>Video Clip : <?=$judul?></strong> </div>
<?
if ($keterangan<>"") {
?>	
            <div id="keterangan" class="box3"></div>
<?
}
?>             
            <br />
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>Views: <?=$konter?>
            <div id="rating<?=$ratingid?>"></div></td>
                <td>
                  <form name="embed" id="embed">
                    <div class="betterTip" id="div3"> Embed:<br />
<?					if ($status_video==1) {	?>
                        <input onclick="javascript:document.embed.embedtext.select();" id="embedtext" name="embedtext" type="text" size="30" readonly="readonly" value="&lt;object width=&quot;300&quot; height=&quot;237&quot;&gt;&lt;param name=&quot;wmode&quot; value=&quot;transparent&quot;&gt;&lt;/param&gt;&lt;embed src=&quot;http://www.indosiar.com/swf/jw/player.swf?file=http://www.indosiar.com/static/video/videofiesta/<?=$flv?>&quot; type=&quot;application/x-shockwave-flash&quot; wmode=&quot;transparent&quot; width=&quot;300&quot; height=&quot;237&quot;&gt;&lt;/embed&gt;&lt;/object&gt;" />
<?					} else {	?>
                        <input onclick="javascript:document.embed.embedtext.select();" id="embedtext" name="embedtext" type="text" size="30" readonly="readonly" value="&lt;object width=&quot;300&quot; height=&quot;237&quot;&gt;&lt;param name=&quot;wmode&quot; value=&quot;transparent&quot;&gt;&lt;/param&gt;&lt;embed src=&quot;http://www.indosiar.com/swf/jw/player.swf?file=http://www.indosiar.com/static/video/videofiesta/sorry.flv&quot; type=&quot;application/x-shockwave-flash&quot; wmode=&quot;transparent&quot; width=&quot;300&quot; height=&quot;237&quot;&gt;&lt;/embed&gt;&lt;/object&gt;" 
<?					}	?>
                    </div>
                    <div id="div3Tip" style="display:none">use for blogs like wordpress,friendster blog,blogspot etc.</div>
                  </form>
                </td>
              </tr>
              <tr>
                <td>Post: <?=$this->allfunction->beda_waktu(strtotime($tanggal_video))?> ago
		<div><!-- AddThis Button BEGIN -->
<script type="text/javascript">var addthis_pub="kewell";</script>
<a href="http://www.addthis.com/bookmark.php?v=20" onmouseover="return addthis_open(this, '', '<?=$this->allfunction->curPageURL()?>', '<?=str_replace("'","",$judul)?>" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="http://s7.addthis.com/static/btn/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a><script type="text/javascript" src="http://s7.addthis.com/js/200/addthis_widget.js"></script>
<!-- AddThis Button END -->
	</div> 
                	</td>
              </tr>                
            </table>           
          <br />  

            <script type="text/javascript">
			
			$(function (){
			
			  function starRater(res){
				$('#rating<?=$ratingid?>').empty().rater(
					'<?=$this->config->item('URL_ROOT')?>videofiesta/updaterate/<?=$id?>', {
						maxvalue : 5, 
						style    : 'basic', 
						curvalue : <?=$rating?>,
						callback : function(resoj){
						
							eval("var oj="+resoj);
							
							starRater(oj.Average);
							
							$('#rating<?=$ratingid?>').children('.star-rating-result').html(
								oj.message 
								+"<br>Your click is : "+oj.myrate
								+"<br>Average is : "+oj.Average 
							)
						}
				});
			  }
			  starRater(0);
			  
			});

<?
if ($keterangan<>"") {
?>				
					function Showketerangan(iditem) {
						 
						 surl = "<?=site_url('keterangan')."/"?>" + iditem;
						 $.ajax({
						   type: "GET",
						   url: surl,
						   dataType: "html",
						   beforeSend: function(){
									$('div#keterangan').block('<b>Processing</b>', { border: '3px solid #1F4266' }); 
						   },
						   success: function(msg){
							   	$("#keterangan").html(msg);
							   	$('div#keterangan').unblock(); 
						   }
						 });
					}			
			                                                                                                                                               	
				Showketerangan("<?=$id?>");
<?
}
?>

					function Showkomentar(iditem) {
						 
						 surl = "<?=site_url('komentarlist')."/"?>" + iditem;
						 $.ajax({
						   type: "GET",
						   url: surl,
						   dataType: "html",
						   beforeSend: function(){
									$('div#hasilkomentar').block('<b>Processing</b>', { border: '3px solid #1F4266' }); 
						   },
						   success: function(msg){
							   	$("#hasilkomentar").html(msg);
							   	$('div#hasilkomentar').unblock(); 
						   }
						 });
					}
			
			                                                                                                                                               	
				Showkomentar("<?=$id?>");			
			</script>      
      <br />          
    </td>
    <td>&nbsp;</td>
    <td valign="top">
<? 
$batas = 10;
$page = $this->uri->segment(3);
//$page=1;
if ($page == "" || !is_numeric($page)) {
	$page = 0;
	$spage = "";
} else {
	$spage = " - Page ".($page/$batas+1);
}
$sqlx="select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id and tblv.id_kategori=9 and ".$sql_not1." order by tblv.id desc";
$totrecord = $this->videofiesta_model->totalrecord($sqlx);

if ($totrecord > 0) {
					$batas = 10;
					
					$config['base_url'] = site_url("videofiesta/kiss/");
					$config['uri_segment'] = 3;
					$config['total_rows'] = $totrecord;
					$config['per_page'] = $batas;
					$config['num_links'] = 2;
					
					//if ($page == "" or isset($page)==FALSE) $page = 0;
					$rec=1;
					$sql="select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id and tblv.id_kategori=9 and ".$sql_not1." order by tblv.id desc limit $page, $batas";
					$this->pagination->initialize($config); 						
					$query = $this->db->query($sql);
					if ($query->num_rows() > 0) {
?>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
<?						
						$sql_not.=" and ";
						$sql_not1.=" and ";	
						$rows = $query->result();
						foreach ($rows as $row)
						{				
									$sql_not.="id<>".$row->id;
									$sql_not1.="tblv.id<>".$row->id;		
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
					                <td align="center"><a href="<?=$this->config->item('URL_VIDEOFIESTA')?>kiss/<?=$page?>/<?=$row->id?>/<?=$this->allfunction->judul2url(htmlentities($row->judul))?>"><img src="http://www.indosiar.com/static/images/videofiesta/<?=$row->image?>" width="139" height="65" border="0" /></a></td>
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
								<a href="<?=$this->config->item('URL_VIDEOFIESTA')?>kiss/<?=$page?>/<?=$row->id?>/<?=$this->allfunction->judul2url(htmlentities($row->judul))?>"><?=$row->judul?></a><br>
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