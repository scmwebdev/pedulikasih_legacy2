<?php
include (APPPATH."views/videofiesta/inc_header.php");
$strID = "";
?>
<table width="996" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="15" height="10" /></td>
    <td>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="22" background="<?=URL_VIDEO_IMG?>bg_bar.gif">
            <div class="boxbar">Fresh Video </div>
          </td>
        </tr>
      </table>
    </td>
    <td><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="16" height="10" /></td>
    <td>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="22" background="<?=URL_VIDEO_IMG?>bg_bar.gif">
            <div class="boxbar">Promoted Video  </div>
          </td>
        </tr>
      </table>
    </td>
    <td><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="15" height="10" /></td>
  </tr>
  <tr>
    <td colspan="5"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="10" height="10" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top">
<?
function curPageURL() {
 $pageURL = 'http';
 $pageURL .= "://";
 $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 return $pageURL;
}

$sql_not="";
$sql_not1="";
$sql="select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id and tblv.id_kategori<>11 order by tblv.id desc limit 0,1";
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
			$row = $query->row(); 			
			$flv=$row->file_flv;
			$id=$row->id;
			$judul=$row->judul;
			$tanggal_video=$row->tanggal;
			$keterangan=strip_tags($row->keterangan);
		    $link = $row->link;
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
      <table width="100%" border="0" align="center" cellpadding="10" cellspacing="0">
        <tr>
          <td>
            <div align="center" style="margin-bottom:10px; background-color:#333333">
				<div align="center" style="margin-bottom:10px">
					<div name='mediaspace' id='mediaspace'></div>
	            	<script type="text/javascript" src="http://www.indosiar.com/swf/viral/swfobject.js"></script>
					<script type="text/javascript">
					var so = new SWFObject('http://www.indosiar.com/swf/viral/player-viral.swf','mpl','400','320','9','#ffffff');
						so.addParam('wmode','transparent');
						so.addParam('allowScriptAccess', 'always');
						so.addParam('allowfullscreen','true');
						so.addVariable('enablejs', 'true');
						so.addVariable('width','400');
						so.addVariable('height','320');
						so.addVariable('showstop','true');
						so.addVariable('searchbar','false');
						so.addVariable('channel', '1295');
						so.addVariable('plugins', 'ltas_beta');						
						so.addVariable('file','http://www.indosiar.com/video/videofiesta/<?=$flv?>');
						so.addVariable('ltas.mediaid','http://www.indosiar.com/video/videofiesta/<?=$flv?>');
						so.addVariable('title','<?=str_replace("'","",$judul)?>');
						so.addVariable('description','<?=str_replace("'","",$keterangan)?>');
						so.addVariable('skin','http://www.indosiar.com/swf/jw/skins/stijl.swf');
						so.addVariable('logo','<?=$logo?>');
						so.addVariable('image','<?=$imagebanner?>');
						so.addVariable('linktarget','_self');
						so.addVariable('backcolor','0xFFFFFF');
						so.addVariable('frontcolor','0x333333');
						so.addVariable('lightcolor','0x000000');
						so.write('mediaspace');
					</script> 
<script language="JavaScript" src="http://www.ltassrv.com/serve/api5.4.asp?d=281&s=318&c=1295&v=1"></script>					
			  </div>				
		    </div>
            </div>
            
            <div><span class="category">Category</span>: <span class="read"><?=$kategori?></span> </div>
            <div><strong>Video Clip : <?=$judul?></strong> </div>
            <div id="keterangan" class="box3"></div>
            <br />
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>Views: <?=$konter?>
            <div id="rating<?=$ratingid?>"></div></td>
                <td>
                  <form name="embed" id="embed">
                    <div class="betterTip" id="div3"> Embed:<br />
                        <input onclick="javascript:document.embed.embedtext.select();" id="embedtext" name="embedtext" type="text" size="30" readonly="readonly" value="&lt;object width=&quot;300&quot; height=&quot;237&quot;&gt;&lt;param name=&quot;wmode&quot; value=&quot;transparent&quot;&gt;&lt;/param&gt;&lt;embed src=&quot;http://www.indosiar.com/swf/jw/player.swf?file=http://www.indosiar.com/video/videofiesta/<?=$flv?>&quot; type=&quot;application/x-shockwave-flash&quot; wmode=&quot;transparent&quot; width=&quot;300&quot; height=&quot;237&quot;&gt;&lt;/embed&gt;&lt;/object&gt;" />
                    </div>
                    <div id="div3Tip" style="display:none">use for blogs like wordpress,friendster blog,blogspot etc.</div>
                  </form>
                </td>
              </tr>
              <tr>
                <td>Post: <?=beda_waktu(strtotime($tanggal_video))?> ago 
		<div><!-- AddThis Button BEGIN -->
<script type="text/javascript">var addthis_pub="kewell";</script>
<a href="http://www.addthis.com/bookmark.php?v=20" onmouseover="return addthis_open(this, '', '<?=curPageURL()?>', '<?=str_replace("'","",$judul)?>')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="http://s7.addthis.com/static/btn/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a><script type="text/javascript" src="http://s7.addthis.com/js/200/addthis_widget.js"></script>
<!-- AddThis Button END -->
	</div>
                	</td>
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
			</script>
          <br />
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td height="22" background="<?=URL_VIDEO_IMG?>bg_bar.gif">
				  <div class="boxbar">Promoted Video </div>
				</td>
			  </tr>
			</table><br />		  
<?
$rec=1;
$sql="select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id and tblv.id_kategori<>11 and ".$sql_not1." order by tblv.id desc limit 0,6";
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
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

				if ($row->id_kategori==9) {
?>			
				          <a href="<?=URL_VIDEO?>kiss/0/<?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><img src="http://www.indosiar.com/images/videofiesta/<?=$row->image?>" width="139" height="64" border="0" align="left" /></a>

				          <span class="judul"><a href="<?=URL_VIDEO?>kiss/0/<?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><?=$row->judul?></a> </span><br />         
<?			} else {
?>
				          <a href="<?=URL_VIDEO?><?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><img src="http://www.indosiar.com/images/videofiesta/<?=$row->image?>" width="139" height="64" border="0" align="left" /></a>
				          <span class="judul"><a href="<?=URL_VIDEO?><?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><?=$row->judul?></a> </span><br />         		
<?			}	
?>				          
					<span class="category">Category</span>: <?=$row->kategori?><br />
					          Views: <?=$row->counter?>&nbsp;
					<?			if ($rating==0) { ?>			  		  
					                          <img src="<?=URL_VIDEO_IMG?>star-empty.gif" width="18" height="18" />
					<?			}
								else	{
									for ($i = 1; $i <= $rating; $i++) { ?>
									           <img src="<?=URL_VIDEO_IMG?>star-ps.gif" width="18" height="18" />
					<?				}
								}						   
					?><br><br /><div class="separator"></div>
<?
				if ($rec<>6) {
					$sql_not1.=" and ";
					$sql_not.=" and ";
				}
				$rec+=1;
	}
}
$query->free_result();				
?>				
		  </td>
        </tr>
      </table>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>
<?
$rec=1;
$sql="select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id and tblv.id_kategori<>11 and ".$sql_not1." order by tblv.id desc limit 0,7";
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
?>
	<div id="screen" >
		<img class="prev" src="<?=URL_VIDEO_IMG?>prev.gif" style="cursor:hand" alt="prev" width="42" height="53" />
		<div id="sections">
			<ul>
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
				<li>
<?
				if ($row->id_kategori==9) {
?>			
				          <a href="<?=URL_VIDEO?>kiss/0/<?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><img src="http://www.indosiar.com/images/videofiesta/<?=$row->image?>" width="139" height="64" border="0" align="left" /></a>
				          <span class="judul"><a href="<?=URL_VIDEO?>kiss/0/<?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><?=$row->judul?></a> </span><br />         
<?			} else {
?>
				          <a href="<?=URL_VIDEO?><?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><img src="http://www.indosiar.com/images/videofiesta/<?=$row->image?>" width="139" height="64" border="0" align="left" /></a>
				          <span class="judul"><a href="<?=URL_VIDEO?><?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><?=$row->judul?></a> </span><br />         		
<?			}	
?>	
					<span class="category">Category</span>: <?=$row->kategori?><br />
					          Views: <?=$row->counter?>&nbsp;
					<?			if ($rating==0) { ?>			  		  
					                          <img src="<?=URL_VIDEO_IMG?>star-empty.gif" width="18" height="18" />
					<?			}
								else	{
									for ($i = 1; $i <= $rating; $i++) { ?>
									           <img src="<?=URL_VIDEO_IMG?>star-ps.gif" width="18" height="18" />
					<?				}
								}						   
					?><br>
					Post: <?=beda_waktu(strtotime($row->tanggal))?> ago								          
				</li>
<?
				if ($rec<>7) {
					$sql_not1.=" and ";
					$sql_not.=" and ";
				}
				$rec+=1;
	}
?>
			</ul>
		</div>
		<img class="next" src="<?=URL_VIDEO_IMG?>next.gif" style="cursor:hand" alt="next" width="42" height="53" />
	</div>
<?
}
$query->free_result();				
?>	
          </td>
        </tr>
      </table>
      <div style="clear:both">
	  <br />	  
	  <br />	  
	  <br />	  
	  <br />	  
	  <br />	  
	  <br />	  
	  <br />	  
	  <br />	  
	<script type="text/javascript"><!--
google_ad_client = "pub-5009637058996063";
/* 300x250, dibuat 09/07/06 */
google_ad_slot = "1831750322";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="22" background="<?=URL_VIDEO_IMG?>bg_bar.gif">
      <div class="boxbar">Featured Video </div>
    </td>
  </tr>
</table>
      <img src="<?=URL_VIDEO_IMG?>blnk.gif" width="10" height="10" />
<?
$rec=1;
$sql="select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id and tblv.id_kategori<>11 and ".$sql_not1." order by tblv.id desc limit 0,8";
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
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
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
<?
				if ($row->id_kategori==9) {
?>	
          <td width="139"><a href="<?=URL_VIDEO?>kiss/0/<?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><img src="http://www.indosiar.com/images/videofiesta/<?=$row->image?>" width="139" height="64" border="0" /></a></td>
          <td width="10"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="10" height="10" /></td>
          <td width="260"><span class="judul"><a href="<?=URL_VIDEO?>kiss/0/<?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><?=$row->judul?></a> </span><br />Post: <?=beda_waktu(strtotime($row->tanggal))?> ago</td>
<?			} else {
?>
          <td width="139"><a href="<?=URL_VIDEO?><?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><img src="http://www.indosiar.com/images/videofiesta/<?=$row->image?>" width="139" height="64" border="0" /></a></td>
          <td width="10"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="10" height="10" /></td>
          <td width="260"><span class="judul"><a href="<?=URL_VIDEO?><?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><?=$row->judul?></a> </span><br />Post: <?=beda_waktu(strtotime($row->tanggal))?> ago</td>
<?			}
?>	          	
          <td width="10"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="10" height="10" /></td>
          <td width="121"><span class="category">Category</span>:<br /><?=$row->kategori?><br />
          Views: <?=$row->counter?><br />
<?			if ($rating==0) { ?>			  		  
                          <img src="<?=URL_VIDEO_IMG?>star-empty.gif" width="18" height="18" />
<?			}
			else	{
				for ($i = 1; $i <= $rating; $i++) { ?>
				           <img src="<?=URL_VIDEO_IMG?>star-ps.gif" width="18" height="18" />
<?				}
			}						   
?>					
		  </td>
        </tr>
      </table>
	  <div class="separator"></div>
<?
			if ($rec<>8) {
				$sql_not1.=" and ";
				$sql_not.=" and ";
			}
			$rec+=1;
			}
}
$query->free_result();					  
?>	 
    </td>
    <td>&nbsp;</td>
  </tr>
</table>
<!--
<table width="996" height="26" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="7">&nbsp;</td>
    <td width="240"><img src="http://ww1.indosiar.com/banner/jendela_240_70.jpg" width="240" height="70" /></td>
    <td width="7">&nbsp;</td>
    <td width="240"><img src="http://ww1.indosiar.com/banner/mezza_spazio09.gif" width="240" height="70" /></td>
    <td width="8">&nbsp;</td>
    <td width="240"><img src="http://ww1.indosiar.com/banner/blog_240_70.jpg" width="240" height="70" /></td>
    <td width="7">&nbsp;</td>
    <td width="240"><img src="http://ww1.indosiar.com/banner/fullhouse240_70.gif" width="240" height="70" /></td>
    <td width="7">&nbsp;</td>
  </tr>
</table>
-->
<table width="996" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="5"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="15" height="10" /><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="16" height="10" /><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="15" height="10" /></td>
  </tr>
  <tr>
    <td width="15"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="15" height="10" /></td>
    <td >
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td height="22" background="<?=URL_VIDEO_IMG?>bg_bar.gif">
		  <div class="boxbar">Featured Video </div>
		</td>
	  </tr>
	</table>
    </td>
    <td width="16"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="16" height="10" /></td>
    <td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td height="22" background="<?=URL_VIDEO_IMG?>bg_bar.gif">
		  <div class="boxbar">Featured Video </div>
		</td>
	  </tr>
	</table>
    </td>
    <td width="15"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="15" height="10" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="518" valign="top">
<?
$rec=1;
$query = $this->db->query("select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id and tblv.id_kategori<>11 where ".$sql_not1." order by tblv.id desc limit 0,4");
if ($query->num_rows() > 0) {
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
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
<?
				if ($row->id_kategori==9) {
?>	
          <td width="139"><a href="<?=URL_VIDEO?>kiss/0/<?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><img src="http://www.indosiar.com/images/videofiesta/<?=$row->image?>" width="139" height="64" border="0" /></a></td>
          <td width="10"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="10" height="10" /></td>
          <td width="260"><span class="judul"><a href="<?=URL_VIDEO?>kiss/0/<?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><?=$row->judul?></a> </span><br />Post: <?=beda_waktu(strtotime($row->tanggal))?> ago</td>
<?			} else {
?>
          <td width="139"><a href="<?=URL_VIDEO?><?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><img src="http://www.indosiar.com/images/videofiesta/<?=$row->image?>" width="139" height="64" border="0" /></a></td>
          <td width="10"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="10" height="10" /></td>
          <td width="260"><span class="judul"><a href="<?=URL_VIDEO?><?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><?=$row->judul?></a> </span><br />Post: <?=beda_waktu(strtotime($row->tanggal))?> ago</td>
<?			}
?>	          	
          <td width="10"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="10" height="10" /></td>
          <td width="121"><span class="category">Category</span>:<br /><?=$row->kategori?><br />
          Views: <?=$row->counter?><br />
<?			if ($rating==0) { ?>			  		  
                          <img src="<?=URL_VIDEO_IMG?>star-empty.gif" width="18" height="18" />
<?			}
			else	{
				for ($i = 1; $i <= $rating; $i++) { ?>
				           <img src="<?=URL_VIDEO_IMG?>star-ps.gif" width="18" height="18" />
<?				}
			}						   
?>			</td>
        </tr>
      </table>
	  <div class="separator"></div>
<?
			if ($rec<>4) {
				$sql_not1.=" and ";
				$sql_not.=" and ";
			}
			$rec+=1;
			}
}
$query->free_result();
?> 	

      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="22" background="<?=URL_VIDEO_IMG?>bg_bar.gif">
            <div class="boxbar">Most Commented Video </div>          </td>
        </tr>
      </table>
	<img src="<?=URL_VIDEO_IMG?>blnk.gif" width="16" height="10" />	 
<?
$query = $this->db->query("select id_video,count(*) as jumlah from tbl_video_komentar group by id_video order by jumlah desc limit 0,10");
if ($query->num_rows() > 0) {
			$rows = $query->result();
			foreach ($rows as $row)
			{						
				$queryx = $this->db->query( "select id,judul from tbl_video where id=".$row->id_video);
				if ($queryx->num_rows() > 0) {			
					$rowx = $queryx->row();			
?>
                        <div><a href="<?=URL_VIDEO?><?=$rowx->id?>/<?=judul2url(strip_tags($rowx->judul))?>">
                          <?=$rowx->judul?>
                          </a> Comments:
                          <?=$row->jumlah?>
                          &nbsp;<img src="<?=URL_VIDEO_IMG?>comment_icon_white.png" /> </div>
                      <?
				}	
				$queryx->free_result();				
			}
}
$query->free_result();
?>  	
    <td>&nbsp;</td>
    <td width="518" valign="top">
<?
$query = $this->db->query("select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id and tblv.id_kategori<>11 where ".$sql_not1." order by  tblv.id desc limit 0,7");
if ($query->num_rows() > 0) {
			$sql_not.=" and ";
			$sql_not1.=" and ";			
			$rows = $query->result();
			foreach ($rows as $row)
			{
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
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
<?
				if ($row->id_kategori==9) {
?>	
          <td width="139"><a href="<?=URL_VIDEO?>kiss/0/<?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><img src="http://www.indosiar.com/images/videofiesta/<?=$row->image?>" width="139" height="64" border="0" /></a></td>
          <td width="10"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="10" height="10" /></td>
          <td width="260"><span class="judul"><a href="<?=URL_VIDEO?>kiss/0/<?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><?=$row->judul?></a> </span><br />Post: <?=beda_waktu(strtotime($row->tanggal))?> ago</td>
<?			} else {
?>
          <td width="139"><a href="<?=URL_VIDEO?><?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><img src="http://www.indosiar.com/images/videofiesta/<?=$row->image?>" width="139" height="64" border="0" /></a></td>
          <td width="10"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="10" height="10" /></td>
          <td width="260"><span class="judul"><a href="<?=URL_VIDEO?><?=$row->id?>/<?=judul2url(strip_tags($row->judul))?>"><?=$row->judul?></a> </span><br />Post: <?=beda_waktu(strtotime($row->tanggal))?> ago</td>
<?			}
?>          	
          <td width="10"><img src="<?=URL_VIDEO_IMG?>blnk.gif" width="10" height="10" /></td>
          <td width="121"><span class="category">Category</span>:<br /><?=$row->kategori?><br />
          Views: <?=$row->counter?><br />
<?			if ($rating==0) { ?>			  		  
                          <img src="<?=URL_VIDEO_IMG?>star-empty.gif" width="18" height="18" />
<?			}
			else	{
				for ($i = 1; $i <= $rating; $i++) { ?>
				           <img src="<?=URL_VIDEO_IMG?>star-ps.gif" width="18" height="18" />
<?				}
			}						   
?>			</td>
        </tr>
      </table>
	  <div class="separator"></div>
<?
			}
}
$query->free_result();
?> 	
    </td>
    <td>&nbsp;</td>
  </tr>
</table>
<?
include (APPPATH."views/videofiesta/inc_footer.php");
?>
