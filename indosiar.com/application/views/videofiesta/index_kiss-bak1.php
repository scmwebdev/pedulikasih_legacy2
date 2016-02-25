<?php
include (APPPATH."views/videofiesta/inc_header_kiss.php");
$strID = "";
?>
<script>
function LoadPage(page,usediv) {
         // Set up request varible
         try {xmlhttp = window.XMLHttpRequest?new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");}  catch (e) { alert("Error: Could not load page.");}
         //Show page is loading
         document.getElementById(usediv).innerHTML = 'Loading Page...';
         //scroll to top
         scroll(0,0);
         //send data
         xmlhttp.onreadystatechange = function(){
                 //Check page is completed and there were no problems.
                 if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)) {
                        //Write data returned to page
                        document.getElementById(usediv).innerHTML = parseScript(xmlhttp.responseText);
                 }
         }
         xmlhttp.open("GET", page);
         xmlhttp.send(null);
         //Stop any link loading normaly
         return false;
}
	function parseScript(_source) {
		var source = _source;
		var scripts = new Array();
		
		// Strip out tags
		while(source.indexOf("<script") > -1 || source.indexOf("</script") > -1) {
			var s = source.indexOf("<script");
			var s_e = source.indexOf(">", s);
			var e = source.indexOf("</script", s);
			var e_e = source.indexOf(">", e);
			
			// Add to scripts array
			scripts.push(source.substring(s_e+1, e));
			// Strip from source
			source = source.substring(0, s) + source.substring(e_e+1);
		}
		
		// Loop through every script collected and eval it
		for(var i=0; i<scripts.length; i++) {
			try {
				eval(scripts[i]);
			}
			catch(ex) {
				// do what you want here when a script fails
			}
		}
		
		// Return the cleaned source
		return source;
	}

</script>
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
    <td><img src="<?=URL_VIDEO_IMG?>colorhue.gif" width="431" height="7" /></td>
    <td width="10">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="20">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="431" valign="top">
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="<?=URL_VIDEO_IMG?>v-frame_01.jpg" width="11" height="9" /></td>
          <td bgcolor="#8E8E8E"><img src="<?=URL_VIDEO_IMG?>v-frame_02.jpg" width="410" height="9" /></td>
          <td><img src="<?=URL_VIDEO_IMG?>v-frame_03.jpg" width="10" height="9" /></td>
        </tr>
        <tr>
          <td><img src="<?=URL_VIDEO_IMG?>v-frame_04.jpg" width="11" height="344" /></td>
          <td bgcolor="#000000">
<?
$recordv = $this->uri->segment(3);
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
				$logo="&logo=http://www.indosiar.com/images/videofiesta/".trim($row->logo);
			}
			else	{
				$logo="";	
			}	

			$sql_not.="id<>".$row->id;
			$sql_not1.="tblv.id<>".$row->id;
				
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
$ratingid=date("d").date("m").date("Y").date("H").date("s").date("s");

$sql="select * from tbl_video_banner where id_kategori=".$id_kategori." order by rand() limit 0,1";
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
			$row = $query->row(); 
			if ($row->tanggal_akhir>date("d/m/Y")) {
				$imagebanner="&image=http://www.indosiar.com/images/videofiesta/".$row->banner."&";
			}
			else	{
				$imagebanner="&image=http://www.indosiar.com/images/videofiesta/".$row->alternatif."&";
			}
}
else	{
		$imagebanner="";
}		
$query->free_result();								
?>		  
            <div align="center" style="background-color:#333333">
				<div align="center" name="videospace" id="videospace">
					<div name='mediaspace' id='mediaspace'></div>
	            	<script type="text/javascript" src="http://www.indosiar.com/swf/viral/swfobject.js"></script>
					<script type="text/javascript">
					var so = new SWFObject('http://www.indosiar.com/swf/viral/player-viral.swf','mpl','400','320','8');
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
<?					if ($status_video==1) {	?>						
																										so.addVariable('file','http://www.indosiar.com/video/videofiesta/<?=$flv?>');
																										so.addVariable('ltas.mediaid','http://www.indosiar.com/video/videofiesta/<?=$flv?>');
<?					} else {	?>
																							so.addVariable('file','http://www.indosiar.com/video/videofiesta/sorry.flv');
																							so.addVariable('ltas.mediaid','http://www.indosiar.com/video/videofiesta/sorry.flv');
<?					}	?>						
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
          <td><img src="<?=URL_VIDEO_IMG?>v-frame_06.jpg" width="10" height="344" /></td>
        </tr>
        <tr>
          <td><img src="<?=URL_VIDEO_IMG?>v-frame_07.jpg" width="11" height="8" /></td>
          <td bgcolor="#8E8E8E"><img src="<?=URL_VIDEO_IMG?>v-frame_08.jpg" width="410" height="8" /></td>
          <td><img src="<?=URL_VIDEO_IMG?>v-frame_09.jpg" width="10" height="8" /></td>
        </tr>
      </table>
            <div><strong>Video Clip : <?=$judul?></strong> </div>
            <div class="box3"><?=$keterangan?></div>
            <br />
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>Views: <?=$konter?>
            <div id="rating<?=$ratingid?>"></div></td>
                <td>
                  <form name="embed" id="embed">
                    <div class="betterTip" id="div3"> Embed:<br />
<?					if ($status_video==1) {	?>
                        <input onclick="javascript:document.embed.embedtext.select();" id="embedtext" name="embedtext" type="text" size="30" readonly="readonly" value="&lt;object width=&quot;300&quot; height=&quot;237&quot;&gt;&lt;param name=&quot;wmode&quot; value=&quot;transparent&quot;&gt;&lt;/param&gt;&lt;embed src=&quot;http://www.indosiar.com/swf/jw/player.swf?file=http://www.indosiar.com/video/videofiesta/<?=$flv?>&quot; type=&quot;application/x-shockwave-flash&quot; wmode=&quot;transparent&quot; width=&quot;300&quot; height=&quot;237&quot;&gt;&lt;/embed&gt;&lt;/object&gt;" />
<?					} else {	?>
                        <input onclick="javascript:document.embed.embedtext.select();" id="embedtext" name="embedtext" type="text" size="30" readonly="readonly" value="&lt;object width=&quot;300&quot; height=&quot;237&quot;&gt;&lt;param name=&quot;wmode&quot; value=&quot;transparent&quot;&gt;&lt;/param&gt;&lt;embed src=&quot;http://www.indosiar.com/swf/jw/player.swf?file=http://www.indosiar.com/video/videofiesta/sorry.flv&quot; type=&quot;application/x-shockwave-flash&quot; wmode=&quot;transparent&quot; width=&quot;300&quot; height=&quot;237&quot;&gt;&lt;/embed&gt;&lt;/object&gt;" 
<?					}	?>
                    </div>
                    <div id="div3Tip" style="display:none">use for blogs like wordpress,friendster blog,blogspot etc.</div>
                  </form>
                </td>
              </tr>
              <tr>
                <td>Post: <?=beda_waktu(strtotime($tanggal_video))?> ago</td>
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
          <br />      
	<!-- Begin: KlikSaya.com -->
	<script src="http://scr.kliksaya.com/js-ad.php?zid=3631" type="text/javascript">
	</script>
	<!-- End: KlikSaya.com -->		
      <strong>COMMENTS:</strong>
      <form id="cform" name="cform" action="http://www.indosiar.com/videofiesta/komentar" method="post">
        <input id="videoid" type="hidden" value="<?=$id?>" name="videoid" />
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

      <a onclick="this.style.cursor='hand'; document.getElementById('hasil').style.display='block';" href="#"><img src="<?=URL_VIDEO_IMG?>open.gif" border="0" /></a> open - <a onclick="this.style.cursor='hand'; document.getElementById('hasil').style.display='none';" href="#"><img src="<?=URL_VIDEO_IMG?>close.gif" border="0" /></a> close<br />
      <div id="hasil">
<?	  
$query = $this->db->query("select nama,komentar from tbl_video_komentar where id_video=$id order by id desc limit 0,10");
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
    <td>&nbsp;</td>
    <td valign="top">
<?
$page = $this->uri->segment(2);
$sqlx="select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id and tblv.id_kategori=9 and ".$sql_not1." order by tblv.id desc";

$query = $this->db->query($sqlx);
$totrecord = $query->num_rows();
$query->free_result();


if ($totrecord > 0) {
	//echo $page;
					$batas = 10;
					
					$config['base_url'] = site_url($artikel_kategori."/");
					$config['uri_segment'] = 2;
					$config['total_rows'] = $totrecord;
					$config['per_page'] = $batas;
					$config['num_links'] = 2;
					if ($page == "" or isset($page)==FALSE) $page = 0;
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
									$queryx = $this->db->query("select voteNr,voteValue from tbl_video_vote where imgId=".$row->id." order by id limit 0,1");
									if ($queryx->num_rows() > 0) {			
										$rowx = $queryx->row();
										$rating=round($rowx->voteValue/$rowx->voteNr);
									}
									else	{				
										$rating=0;
									}
									$queryx->free_result();				
					?>			
					        <tr>
					          <td width="28%">
					            <table border="0" cellspacing="0" cellpadding="0">
					              <tr>
					                <td><img src="<?=URL_VIDEO_IMG?>v-frame_01.jpg" width="11" height="9" /></td>
					                <td bgcolor="#8E8E8E"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="5" height="5" /></td>
					                <td><img src="<?=URL_VIDEO_IMG?>v-frame_03.jpg" width="10" height="9" /></td>
					              </tr>
					              <tr>
					                <td bgcolor="#8E8E8E"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="5" height="5" /></td>
					                <td align="center"><a href="#" onclick="return LoadPage('<?=URL_VIDEO?>kissvideo/<?=$row->id?>','videospace');"><img src="http://www.indosiar.com/images/videofiesta/<?=$row->image?>" width="139" height="65" border="0" /></a></td>
					                <td bgcolor="#8E8E8E"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="5" height="5" /></td>
					              </tr>
								  <tr>
					                <td><img src="<?=URL_VIDEO_IMG?>v-frame_07.jpg" width="11" height="8" /></td>
					                <td bgcolor="#8E8E8E"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="5" height="5" /></td>
					                <td><img src="<?=URL_VIDEO_IMG?>v-frame_09.jpg" width="10" height="8" /></td>
					              </tr>
					            </table>
					          </td>
					          <td width="72%">
					            <div style="margin-left:10px">
								<a href="<?=URL_VIDEO?>kiss/<?=$page?>/<?=$row->id?>/<?=judul2url(htmlentities($row->judul))?>" ><?=$row->judul?></a><br>
										          Views: <?=$row->counter?>&nbsp;
										<?			if ($rating==0) { ?>			  		  
										                          <img src="<?=URL_VIDEO_IMG?>star-empty.gif" width="18" height="18" />
										<?			}
													else	{
														for ($i = 1; $i <= $rating; $i++) { ?>
														           <img src="<?=URL_VIDEO_IMG?>star-ps.gif" width="18" height="18" />
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
    <td height="33" valign="bottom"  background="http://www.indosiar.com/videofiesta/img/footer.gif" class="style2">
      <div align="right">&copy; 2008, INDOSIAR.COM&nbsp;&nbsp;&nbsp;&nbsp;</div>
    </td>
  </tr>
</table>
</body>
</html>