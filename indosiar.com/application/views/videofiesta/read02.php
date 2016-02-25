<?php
$this->db->query("update tbl_video set counter=counter+1 where id=$artikel_judul_id");
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
				$imagevideo="http://www.indosiar.com/images/videofiesta/".$imagevideo;
			}
			if (trim($row->logo)<>"") {
				$logo="http://www.indosiar.com/images/videofiesta/".trim($row->logo);
			}
			else	{
				$logo="";	
			}	

			$queryx = $this->db->query("select voteNr,voteValue from tbl_video_vote where imgId=".$row->id." order by id limit 0,1");
			if ($queryx->num_rows() > 0) {			
				$rowx = $queryx->row();
				$rating=round($rowx->voteValue/$rowx->voteNr);
			}
			else	{				
				$rating=0;
			}
			$queryx->free_result();		
			$imgId=$row->id;			
}
$query->free_result();	
$html_title=$judul;

include (APPPATH."views/videofiesta/inc_header.php");
$strID = "";
?>
<table width="996" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="15"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="15" height="10" /></td>
    <td width="139" valign="top">
	<?include (APPPATH."views/menu_promoted.php");?><br>
<?	 include (APPPATH."views/banner_kiri.php"); ?><br> 
    </td>
    <td width="16"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="16" height="10" /></td>
    <td width="658" valign="top">
      <table width="100%" border="0" align="center" cellpadding="10" cellspacing="0">
        <tr>
          <td>
<?
$ratingid=date("d").date("m").date("Y").date("H").date("s").date("s");

$sql="select * from tbl_video_banner where id_kategori=".$id_kategori." order by rand() limit 0,1";
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
			$row = $query->row(); 
			if ($row->tanggal_akhir>date("d/m/Y")) {
				$imagebanner="http://www.indosiar.com/images/videofiesta/".$row->banner;
			}
			else	{
				$imagebanner="http://www.indosiar.com/images/videofiesta/".$row->alternatif;
			}
}
else	{
		$imagebanner="";
}		
$query->free_result();								
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
<?					if ($status_video==1) {	?>						
											so.addVariable('file','http://www.indosiar.com/inc/playlist.php?id=<?=$artikel_judul_id?>');
<?					} else {	?>
											so.addVariable('file','http://www.indosiar.com/video/videofiesta/sorry.flv');
<?					}	?>																	
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
            <div class="box3"><?=$keterangan?></div>
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
           
            
            <script type="text/javascript">
			
			$(function (){
			
			  function starRater(res){
				$('#rating<?=$ratingid?>').empty().rater(
					'http://www.indosiar.com/videofiesta/updaterate/<?=$id?>', {
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
			
			</script>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="33%">Send to a friend <br />
                  <br />
                </td>
                <td width="67%">
                  <form action="http://www.indosiar.com/videofiesta/email" method="post" id="kirim" name="kirim">
                    Email:
                    <input name="email" type="text" size="14" />
    <input name="idvideo" type="hidden" value="<?=$artikel_judul_id?>" />
    <input type="submit" name="send" value="send" />
                  </form>
                </td>
              </tr>
              <tr>
                <td colspan=2>Post: <?=beda_waktu(strtotime($tanggal_video))?> ago
                </td>
              </tr>
            </table>
            </td>
        </tr>
      </table> 	  
	<?tampil_banner(319)?>
	<br />	  
      <strong>COMMENTS:</strong>
      <form id="cform" name="cform" action="http://www.indosiar.com/videofiesta/komentar" method="post">
        <input id="videoid" type="hidden" value="<?=$artikel_judul_id?>" name="videoid" />
        Name:
  <input size="30" name="nama" />
  <br />
          Email:
  <input size="30" name="email" />
  <br />
  <textarea name="komentar" rows="8" cols="45"></textarea>
  <br />
  <input type="submit" value="Submit" name="submit" />
      </form>
      <br />
	<!-- Begin: KlikSaya.com -->
	<script src="http://scr.kliksaya.com/js-ad.php?zid=3631" type="text/javascript">
	</script>
	<!-- End: KlikSaya.com -->	<br />			  
      <a onclick="this.style.cursor='hand'; document.getElementById('hasil').style.display='block';" href="#"><img src="<?=URL_VIDEO_IMG?>open.gif" border="0" /></a> open - <a onclick="this.style.cursor='hand'; document.getElementById('hasil').style.display='none';" href="#"><img src="<?=URL_VIDEO_IMG?>close.gif" border="0" /></a> close<br />
      <div id="hasil">
<?	  
$query = $this->db->query("select nama,komentar from tbl_video_komentar where id_video=$artikel_judul_id order by id desc limit 0,10");
if ($query->num_rows() > 0) {
			$rows = $query->result();
			foreach ($rows as $row)
			{	
?>
<div class="box3"><?=$row->nama?><br><?=$row->komentar?></div>
<?
			}
}			
$query->free_result();	
?>
      </div>
      <br />
    </td>
    <td width="15" valign="top"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="15" height="10" /></td>
    <td width="139" valign="top">
	<?include (APPPATH."views/videofiesta/menu_related.php");?>
    </td>
    <td width="15"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="15" height="10" /></td>
  </tr>
</table>
<?
include (APPPATH."views/videofiesta/inc_footer.php");
?>