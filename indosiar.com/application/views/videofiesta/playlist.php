<?
header("content-type: text/xml");
?>
<playlist version="1" xmlns="http://xspf.org/ns/0/">
	<title>Video Fiesta</title>
	<info>http://www.indosiar.com/videofiesta?item=Flash_Media_Player</info>
	<annotation>Video From You</annotation>
	<trackList>
<?
$id_url = $this->uri->segment(2);
$query = $this->db->query("select * from tbl_video where id=".$id_url);
if ($query->num_rows() > 0) {
	$row = $query->row(); 
?>	
		<track>
			<title><?=htmlentities($row->judul)?></title>
			<location>http://www.indosiar.com/video/videofiesta/<?=htmlentities($row->file_flv)?></location>
			<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
			</track>
<?
		if ($row->file_flv2<>"") {
?>
		<track>
			<title><?=htmlentities($row->judul)?></title>
			<location>http://www.indosiar.com/video/videofiesta/<?=htmlentities($row->file_flv2)?></location>
			<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
			</track>
<?		
		}
		if ($row->file_flv3<>"") {
?>
		<track>
			<title><?=htmlentities($row->judul)?></title>
			<location>http://www.indosiar.com/video/videofiesta/<?=htmlentities($row->file_flv3)?></location>
			<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
			</track>
<?		
		}
		if ($row->file_flv4<>"") {
?>
		<track>
			<title><?=htmlentities($row->judul)?></title>
			<location>http://www.indosiar.com/video/videofiesta/<?=htmlentities($row->file_flv4)?></location>
			<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
			</track>
<?		
		}
		if ($row->file_flv5<>"") {
?>
		<track>
			<title><?=htmlentities($row->judul)?></title>
			<location>http://www.indosiar.com/video/videofiesta/<?=htmlentities($row->file_flv5)?></location>
			<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
			</track>
<?		
		}
		if ($row->file_flv6<>"") {
?>
		<track>
			<title><?=htmlentities($row->judul)?></title>
			<location>http://www.indosiar.com/video/videofiesta/<?=htmlentities($row->file_flv6)?></location>
			<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
			</track>
<?		
		}
		if ($row->file_flv7<>"") {
?>
		<track>
			<title><?=htmlentities($row->judul)?></title>
			<location>http://www.indosiar.com/video/videofiesta/<?=htmlentities($row->file_flv7)?></location>
			<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
			</track>
<?		
		}
		if ($row->file_flv8<>"") {
?>
		<track>
			<title><?=htmlentities($row->judul)?></title>
			<location>http://www.indosiar.com/video/videofiesta/<?=htmlentities($row->file_flv8)?></location>
			<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
			</track>
<?		
		}
		if ($row->file_flv9<>"") {
?>
		<track>
			<title><?=htmlentities($row->judul)?></title>
			<location>http://www.indosiar.com/video/videofiesta/<?=htmlentities($row->file_flv9)?></location>
			<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
			</track>
<?		
		}
		if ($row->file_flv10<>"") {
?>
		<track>
			<title><?=htmlentities($row->judul)?></title>
			<location>http://www.indosiar.com/video/videofiesta/<?=htmlentities($row->file_flv10)?></location>
			<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
			</track>
<?		
		}
		if ($row->file_flv11<>"") {
?>
		<track>
			<title><?=htmlentities($row->judul)?></title>
			<location>http://www.indosiar.com/video/videofiesta/<?=htmlentities($row->file_flv11)?></location>
			<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
			</track>
<?		
		}
		if ($row->file_flv12<>"") {
?>
		<track>
			<title><?=htmlentities($row->judul)?></title>
			<location>http://www.indosiar.com/video/videofiesta/<?=htmlentities($row->file_flv12)?></location>
			<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
			</track>
<?		
		}
		if ($row->file_flv13<>"") {
?>
		<track>
			<title><?=htmlentities($row->judul)?></title>
			<location>http://www.indosiar.com/video/videofiesta/<?=htmlentities($row->file_flv13)?></location>
			<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
			</track>
<?		
		}
		if ($row->file_flv14<>"") {
?>
		<track>
			<title><?=htmlentities($row->judul)?></title>
			<location>http://www.indosiar.com/video/videofiesta/<?=htmlentities($row->file_flv14)?></location>
			<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
			</track>
<?		
		}
		if ($row->file_flv15<>"") {
?>
		<track>
			<title><?=htmlentities($row->judul)?></title>
			<location>http://www.indosiar.com/video/videofiesta/<?=htmlentities($row->file_flv15)?></location>
			<image>http://www.indosiar.com/images/videofiesta/<?=htmlentities($row->image)?></image>
			</track>
<?		
		}

}
$query->free_result();	
?>			
	</trackList>
</playlist>