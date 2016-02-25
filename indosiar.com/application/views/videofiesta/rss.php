<?
//header("Cache-Control: no-store, no-cache, must-revalidate"); 
//header("Cache-Control: post-check=0, pre-check=0", false); 
//header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
//header("Pragma: no-cache"); 
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="iso-8859-1"?>' . "\r\n";
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<atom:link rel="self" type="application/rss+xml" href="http://www.scubapost.net/rss/fieldguide" /> 
		<title>Videofiesta RSS</title>
		<copyright>Copyright (c) 2009 Indosiar.com. All rights reserved.</copyright>
		<link><?=site_url('rss')?></link>
		<description>Videofiesta Update</description>
		<language>en-us</language> 
		<lastBuildDate><?=date("D, j M Y H:i:s")?> GMT</lastBuildDate>
		<ttl>5</ttl> 
		
    <?
    //$sql = "select i.image,i.id,k.id as id_kat,k.judul from w_fieldguide as i inner join w_fieldguide_kat as k on i.id_kat=k.id where i.status_aktif=1 order by i.id desc";
    $sql="select tblv.*,tblk.kategori from tbl_video as tblv inner join tbl_video_kategori as tblk on tblv.id_kategori=tblk.id order by tblv.id desc limit 0,20";

    $query = $this->db->query($sql);
    foreach($query->result() as $row):
    ?>
    
		<item>
			<title><?=$row->judul?></title>
		 	<link>http://www.indosiar.com/video/videofiesta/<?=$row->file_flv?></link>
		 	<guid isPermaLink="false"><?=URL_VIDEO?><?=$row->id?>/<?=judul2url(strip_tags($row->judul))?></guid>
			<pubDate><?=date("D, j M Y H:i:s")?> GMT</pubDate>
			<comments>http://www.indosiar.com/images/videofiesta/<?=$row->image?></comments>
			<description><![CDATA[<?=$row->keterangan?>]]></description>
		</item>
	
    <?
    endforeach;
    ?>
    
	</channel>
</rss>