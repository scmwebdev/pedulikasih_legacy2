<?
$imgid=$this->uri->segment(2);
$rating=$_REQUEST['rating'];
$sql = "select * from tbl_video_vote where imgid=".$imgid;
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
	$this->db->query("update tbl_video_vote set voteNr = voteNr + 1, voteValue = voteValue + ".$rating." WHERE imgId = ".$imgid);
}
else	{
	$this->db->query("insert into tbl_video_vote (voteNr,voteValue,imgId) values (1,".$rating.",".$imgid.")");
}							
$query->free_result();						
$ratingx=$this->videofiesta_model->voting($sql);									
?>	
Your click is	: <?=$rating?>,
Average is	: <?=$ratingx?>

