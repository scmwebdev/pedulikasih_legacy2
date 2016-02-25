<? echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>" ?>
<?
header("content-type: text/xml");
?>
<recommendations>
<?
$query = $this->db->query("select id,image,judul from tbl_video order by rand() limit 0,3");
if ($query->num_rows() > 0) {
	foreach ($query->result() as $row)
	{
?>
	<recommendation>
		<title><?=str_replace("&","dan",$row->judul)?></title>
		<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
		<link>http://www.indosiar.com/videofiesta/<?=$row->id?>/<?=judul2url(str_replace("&","dan",$row->judul))?></link>
	</recommendation>
<?
	}	
}
$query->free_result();
?>
</recommendations>