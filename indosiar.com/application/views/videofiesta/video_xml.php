<?
header("content-type: text/xml");
?>
<? echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>" ?>
<ut_response status="ok">
<video_list>
<?
$query = $this->db->query("select id,image,judul from tbl_video order by id desc limit 0,20");
if ($query->num_rows() > 0) {
	foreach ($query->result() as $row)
	{
?>

<video>
<viewers><?=$row->id?></viewers>
<title><?=str_replace("&","dan",$row->judul)?></title>
<url>http://www.indosiar.com/videofiesta/<?=$row->id?>/<?=judul2url(str_replace("&","dan",$row->judul))?></url>
<thumbnail_url>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></thumbnail_url>
</video>
<?
	}
}	
$query->free_result();
?>
</video_list>
</ut_response>