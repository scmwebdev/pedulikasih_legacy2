<?php
$DBW = $this->load->database('dbwrite', TRUE);
$DBW->query("update tbl_video set counter=counter+1 where id=$artikel_judul_id");

$sql="select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id and tblv.id=".$artikel_judul_id." order by tblv.id desc limit 0,1";
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
			$row = $query->row(); 
			$flv=$row->file_flv;
			$id=$row->id;
			$tanggal_video=$row->tanggal;
			$judul=$row->judul;
			$keterangan=$row->keterangan;
		   $link = $row->link;
			$kategori=$row->kategori;
			$id_kategori=$row->id_kategori;
			$konter=$row->counter;
			$status_video=$row->status_video;
			$imagevideo=$row->image;
			if ($imagevideo<>"") {
				$imagevideo=$this->config->item('URL_VIDEOFIESTA_IMG').$imagevideo;
			}
			if (trim($row->logo)<>"") {
				$logo=$this->config->item('URL_VIDEOFIESTA_IMG').trim($row->logo);
			}
			else	{
				$logo="";	
			}	

			$sqlvote="select voteNr,voteValue from tbl_video_vote where imgId=".$row->id." order by id limit 0,1";
			$rating=$this->videofiesta_model->voting($sqlvote);					
			$imgId=$row->id;			
}
$query->free_result();	
$html_title=$judul;

include (APPPATH."views/videofiesta/inc_header.php");
$strID = "";
?>


<table width="996" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="15"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="15" height="10" /></td>
    <td width="139" valign="top">
	<?include (APPPATH."views/videofiesta/menu_promoted.php");?><br>
<?	 include (APPPATH."views/videofiesta/banner_kiri.php"); ?><br> 
    </td>
    <td width="16"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="16" height="10" /></td>
    <td width="658" valign="top">
      <table width="100%" border="0" align="center" cellpadding="10" cellspacing="0">
        <tr>
          <td>
<?
$ratingid=date("d").date("m").date("Y").date("H").date("s").date("s");

$sql="select * from tbl_video_banner where id_kategori=".$id_kategori." order by rand() limit 0,1";
$imagebanner=$this->videofiesta_model->imagebanner($sql) 					
?>		  
		        <script type="text/javascript" src="http://www.indosiar.com/swf/jw/swfobject.js"></script>
		        <div align="center" style="margin-bottom:10px">
		        <div name='mediaspace' id='mediaspace'>
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
								so.addParam("wmode","transparent");
								so.addVariable("channel", "1295");
								so.addVariable("plugins", "ltas");						
								so.addVariable('file','http://www.indosiar.com/inc/playlist.php?id=<?=$artikel_judul_id?>');
								so.addVariable('skin', 'http://www.indosiar.com/swf/jw/skins/stijl.swf');
								so.addVariable('image','<?=$imagebanner?>');
								so.addVariable('logo','<?=$logo?>');
								so.addVariable('linktarget','_self');
								so.addVariable('backcolor','0xFFFFFF');
								so.addVariable('frontcolor','0x333333');
								so.addVariable('lightcolor','0x000000');
								so.addVariable('midroll','1295');
								so.write('mediaspace');
						 </script> 	
						<script language="JavaScript" src="http://www.ltassrv.com/serve/api5.4.asp?d=281&s=318&c=1295&v=1"></script>
					  </div>
		        </div>
            <div><span class="category">Category</span>: <span class="read"><?=$kategori?></span> </div>
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
                <td><form name="embed" id="embed">
              <div class="betterTip" id="div3"> Embed:<br />
<?					if ($status_video==1) {	?>						
            <input onclick="javascript:document.embed.embedtext.select();" id="embedtext" name="embedtext" type="text" size="40" readonly="readonly" value="&lt;embed src=&quot;http://www.indosiar.com/swf/jw/mediaplayer.swf&quot; width=&quot;300&quot; height=&quot;237&quot; bgcolor=&quot;#FFFFFF&quot; allowscriptaccess=&quot;always&quot; allowfullscreen=&quot;true&quot; flashvars=&quot;file=http://www.indosiar.com/inc/playlist.php?id=<?=$artikel_judul_id?>&amp;image=<?=$imagevideo?>&quot;/&gt;" />
<?					} else {	?>
            <input onclick="javascript:document.embed.embedtext.select();" id="embedtext" name="embedtext" type="text" size="40" readonly="readonly" value="&lt;object width=&quot;300&quot; height=&quot;237&quot;&gt;&lt;param name=&quot;wmode&quot; value=&quot;transparent&quot;&gt;&lt;/param&gt;&lt;embed src=&quot;http://www.indosiar.com/swf/jw/mediaplayer.swf?file=http://www.indosiar.com/video/videofiesta/sorry.flv&quot; type=&quot;application/x-shockwave-flash&quot; wmode=&quot;transparent&quot; width=&quot;300&quot; height=&quot;237&quot;&gt;&lt;/embed&gt;&lt;/object&gt;" />
<?					}	?>	
              </div>
              <div id="div3Tip" style="display:none">use for blogs like wordpress,friendster blog,blogspot etc.</div>
            </form></td>
              </tr>
            </table>
           
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td colspan=2>Post: <?=$this->allfunction->beda_waktu(strtotime($tanggal_video))?> ago
		<div><!-- AddThis Button BEGIN -->
<script type="text/javascript">var addthis_pub="kewell";</script>
<a href="http://www.addthis.com/bookmark.php?v=20" onmouseover="return addthis_open(this, '', '<?=$this->allfunction->curPageURL()?>', '<?=str_replace("'","",$judul)?>" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="http://s7.addthis.com/static/btn/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a><script type="text/javascript" src="http://s7.addthis.com/js/200/addthis_widget.js"></script>
<!-- AddThis Button END -->
	</div>                	
                </td>
              </tr>
            </table>
            </td>
        </tr>
      </table> 	  
	<br />	 
            <script type="text/javascript">
			
			$(function (){
			
			  function starRater(res){
				$('#rating<?=$ratingid?>').empty().rater(
					'<?=$this->config->item('URL_VIDEOFIESTA')?>updaterate/<?=$id?>', {
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
			
			                                                                                                                                               	
				//Showkomentar("<?=$id?>");
			
			</script>      
    </td>
    <td width="15" valign="top"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="15" height="10" /></td>
    <td width="139" valign="top">
	<?include (APPPATH."views/videofiesta/menu_related.php");?>
    </td>
    <td width="15"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="15" height="10" /></td>
  </tr>
</table>
<?
include (APPPATH."views/videofiesta/inc_footer.php");
?>