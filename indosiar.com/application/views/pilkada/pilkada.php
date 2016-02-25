<style>
#pilkada{height:50px;background:#333;}
.pilkada{float:left;width:150px;padding:7px 3px 0 3px;font-size:10px;color:#fff;text-align:left;}
.pilkada img{float:left;width:80px;margin-right:3px;}
.pilkada span{font-size:12px;font-weight:bold;color:#FFCC00;}
</style>
<?php
foreach($hasil as $row) echo '<div class="pilkada"><img src="/assets/images/pilkada/'.strtolower($row['namacalon']).'.jpg"/>'.str_replace('-','<br/>',$row['namacalon']).'<br/><span class="persen">'.$row['prosentase'].'%</span><div style="clear:both"></div></div>';
?>
<div style="clear:left"></div>