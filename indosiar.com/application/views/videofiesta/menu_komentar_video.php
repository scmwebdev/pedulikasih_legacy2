
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>blnk.gif" width="5" height="5" /></td>
              </tr>
              <tr>
                <td>
                  <table cellSpacing="0" cellPadding="0" width="98%" border="0">
                    <tbody>
                      <tr>
                        <td>
<?
$query = $this->db->query("select id_video,count(*) as jumlah from tbl_video_komentar group by id_video order by jumlah desc limit 0,24");
if ($query->num_rows() > 0) {
			$rows = $query->result();
			foreach ($rows as $row)
			{						
				$queryx = $this->db->query( "select id,judul from tbl_video where id=".$row->id_video);
				if ($queryx->num_rows() > 0) {			
					$rowx = $queryx->row();			
?>
					<div><a href="<?=$this->config->item('URL_VIDEOFIESTA')?><?=$rowx->id?>/<?=$this->allfunction->judul2url(str_replace("&","dan",$rowx->judul))?>"><?=$rowx->judul?></a>  Comments: <?=$row->jumlah?>&nbsp;<img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>comment_icon_white.png"> </div>					
<?
				}	
				$queryx->free_result();				
			}
}
$query->free_result();
?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <div align="center"></div>
                </td>
              </tr>
            </table>  
