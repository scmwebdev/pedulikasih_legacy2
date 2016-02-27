<?php 
$HTMLPageTitle= "Respond Online";
$sitename = "Respond Online";
include (APPPATH."views/inc_header.php");
$strID = "";

$tp = $this->uri->segment(2);
if ($tp=="" or isset($tp)==FALSE) $tp="all";
$page = $this->uri->segment(3);
if ($tp=="humas") {
	$judul="HUMAS"; }
elseif ($tp=="program") {
	$judul = "PROGRAM"; }
elseif ($tp=="news") {
	$judul = "NEWS"; }
elseif ($tp=="produksi") {
	$judul = "PRODUKSI"; }
elseif ($tp=="sales") {
	$judul = "SALES"; }
elseif ($tp=="market") {
	$judul = "MARKETING"; }
elseif ($tp=="finacc") {
	$judul = "FINANCE"; }
elseif ($tp=="webadmin") {
	$judul = "WEBADMIN"; }
elseif ($tp=="engineering") {
	$judul="ENGINEERING"; }
else {
	$judul = "SEMUA DIVISI";
}	

if ($tp=="all") {
	$sqlx="select * from newdaua where trim(kepada)<>'tabloid_gaul' and status=1  order by id desc";
}
else {
	$sqlx="select * from newdaua where trim(kepada)='".$tp."' and status=1  order by id desc";
}

?>
  <table width="100%" border=0 cellspacing=0 cellpadding=0 bgcolor=#FFFFFF>
    <tr> 
      <td width=1 bgcolor="#425163"><img src="<?php $this->config->item('URL_IMG')?>s.gif" width=1 height=1></td>
      <td colspan=3 bgcolor="#FFFFFF"><img src="<?php $this->config->item('URL_IMG')?>s.gif" width=1 height=1></td>
      <td width=1 bgcolor="#425163"><img src="<?php $this->config->item('URL_IMG')?>s.gif" width=1 height=1></td>
    </tr>
    <tr> 
      <td width=1 bgcolor="#425163"><img src="<?php $this->config->item('URL_IMG')?>s.gif" width=1 height=1></td>
      <td width=20 bgcolor="#DEDFE7"><img src="<?php $this->config->item('URL_IMG')?>s.gif" width=1 height=34></td>
      <td width=728 bgcolor="#DEDFE7"> <img src="<?php $this->config->item('URL_IMG')?>lr.gif" width=90 height=13><br>
        <a href="<?php $this->config->item('URL_ROOT')?>daua/humas" class=menu>HUMAS</a> | 
        <a href="<?php $this->config->item('URL_ROOT')?>daua/program" class=menu>PROGRAMME</a> | 
        <a href="<?php $this->config->item('URL_ROOT')?>daua/news" class=menu>NEWS</a> | 
        <a href="<?php $this->config->item('URL_ROOT')?>daua/produsi" class=menu>PRODUKSI</a> | 
        <a href="<?php $this->config->item('URL_ROOT')?>daua/sales" class=menu>SALES</a> | 
        <a href="<?php $this->config->item('URL_ROOT')?>daua/market" class=menu>MARKETING</a> | 
        <a href="<?php $this->config->item('URL_ROOT')?>daua/finacc" class=menu>FINANCE</a> | 
        <a href="<?php $this->config->item('URL_ROOT')?>daua/webadmin" class=menu>WEBADMIN</a> | 
        <a href="<?php $this->config->item('URL_ROOT')?>daua/engineering" class=menu>ENGINEERING</a> | 
        <a href="<?php $this->config->item('URL_ROOT')?>daua" class=menu>SEMUA DIVISI</a></td>
      <td width=20 bgcolor="#DEDFE7">&nbsp;</td>
      <td width=1 bgcolor="425163"><img src="<?php $this->config->item('URL_IMG')?>s.gif" width=1 height=1></td>
    </tr>
  </table>
  <table width="100%" border=0 cellspacing=0 cellpadding=0 bgcolor=#FFFFFF>
    <tr> 
      <td width=1 bgcolor="#425163"><img src="<?php $this->config->item('URL_IMG')?>s.gif" width=1 height=1></td>
      <td width=20 bgcolor="#8C9AA5"><img src="<?php $this->config->item('URL_IMG')?>s.gif" width=1 height=22></td>
      <td bgcolor="#8C9AA5"><b><font color="#FFFFFF"><?php $judul?></font></b></td>
      <td bgcolor="#8C9AA5" align="right"><a href="<?php $this->config->item('URL_ROOT')?>daua/kontak"><img src="<?php $this->config->item('URL_IMG')?>kk.gif" width=117 height=26 border=0 alt="kirimkan komentar Anda di sini!"></a></td>
      <td width=20 bgcolor="#8C9AA5">&nbsp;</td>
      <td width=1 bgcolor="425163"><img src="<?php $this->config->item('URL_IMG')?>s.gif" width=1 height=1></td>
    </tr>
  </table>
  <table width="100%" border=0 cellspacing=0 cellpadding=0 bgcolor=#FFFFFF>
    <tr> 
      <td width=1 bgcolor="#425163"><img src="<?php $this->config->item('URL_IMG')?>s.gif" width=1 height=1></td>
      <td width=20>&nbsp;</td>
      <td width=728> <br>
        <table width=100% border=0 cellspacing=0 cellpadding=0>
          <tr> 
            <td bgcolor=#8C9AA5> 
              <table width=100% border=0 cellspacing=1 cellpadding=6>
                <tr> 
                  <td bgcolor=#EFEBEF align=center> Kami menghimbau agar setiap 
                    pesan yang dikirim tidak menyinggung SARA dan pornografi.<br>
                    Kalimat yang tidak berkenan akan kami hapus.<br>
					<br>
				  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
          </tr>
<?php 
$query = $this->db->query($sqlx);
$totrecord = $query->num_rows();
$query->free_result();


if ($totrecord > 0) {
	//echo $page;
	$batas = 15;
	
	$config['base_url'] = site_url("daua/".$tp,"/page/".$page);
	$config['uri_segment'] = 3;
	$config['total_rows'] = $totrecord;
	$config['per_page'] = $batas;
	$config['num_links'] = 3;

	if ($page == "" or isset($page)==FALSE) $page = 0;

	if ($tp=="all") {
		$sql="select * from newdaua where trim(kepada)<>'tabloid_gaul' and status=1 order by id desc limit $page, $batas";
	}
	else {
		$sql="select * from newdaua where trim(kepada)='".$tp."' and status=1  order by id desc limit $page, $batas";
	}
	$this->pagination->initialize($config); 

	$query = $this->db->query($sql);
	if ($query->num_rows() < 1) {
?>
          <tr> 
            <td bgcolor=#8C9AA5> 
              <table width=100% border=0 cellspacing=1 cellpadding=6>
                <tr> 
                  <td bgcolor=#FFFFFF align=center> Maaf, tidak ada komentar untuk 
                    saat ini... </td>
                </tr>
              </table>
            </td>
          </tr>
<?php 	}          
	else	{
		foreach ($query->result() as $row)
		{
			$subject=$row->subject;
			$tanya=trim($row->pertanyaan);
			if (is_null($tanya)) $tanya=" ";
			
			if (strlen($tanya)>12000) {
				$tanya=substr(tanya,0,12000);
				$tanya.="<br><br><b>Posting anda tidak dapat lebih besar dari 12000 karakter</b>";
			}
			$jawab=trim($row->jawaban);
			if (is_null($jawab)) $jawab=" ";
						
			$sqlx = "SELECT S_CODE, S_URL FROM daua_smiles where s_code<>'' and s_url<>''";
			$queryx = $this->db->query($sqlx);
			if ($queryx->num_rows() > 0) {
					foreach ($queryx->result() as $rowx)
					{
						$smile = $rowx->S_CODE;
						$smileurl = "<img src=http://ww2.indosiar.com/".$rowx->S_URL."> ";
						
						$tanya = str_replace($smile,$smileurl,$tanya);
						$jawab = str_replace($smile,$smileurl,$jawab);
					}
			}
			$queryx->free_result();				
	
			$tanya = nl2br($tanya);
			$jawab = nl2br($jawab);					
	
?>
          <tr> 
            <td bgcolor=#8C9AA5> 
              <table width=100% border=0 cellspacing=1 cellpadding=6>
                <tr> 
                  <td bgcolor=#FFFFFF> 
                    <table width=100% border=0 cellspacing=0 cellpadding=1>
                      <tr> 
                        <td width=90><b>FROM:</b></td>
                        <td> 
<?php 
                        if ($row->email_tampil==1) {
?>
                          <a href="mailto:<?php trim($row->email)?>"><b><?php trim($row->dari)?></b></a> 
<?php 			}
                        else	{
?>
                          <b><?php trim($row->dari)?></b> 
<?php 
		}
?>
                          - <span class=tgl><?php $row->tanggal?></span> 
                        </td>
                      </tr>
                      <tr> 
                        <td width=90><b>TO:</b></td>
                        <td><b><?php $row->kepada?></b></td>
                      </tr>
                      <tr> 
                        <td width=90><b>SUBJECT:</b></td>
                        <td><b><?php $subject?></b></td>
                      </tr>
                      <tr> 
                        <td width=90 valign=top><b>COMMENT:</b></td>
                        <td><?php $tanya?></td>
                      </tr>
                    </table>
<?php 		if ($row->response<>0) { ?>
                    <table width=100% border=0 cellspacing=0 cellpadding=6>
                      <tr> 
                        <td bgcolor="#EFEBEF" class=k><font color="#FF6600">RESPONSE:</font><br>
                          <?php $jawab?></td>
                      </tr>
                    </table>
<?php 		} ?>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr> 
            <td><img src="<?php $this->config->item('URL_IMG')?>s.gif" width=1 height=20></td>
          </tr>
<?php 
		}
	}	
?>
                      <tr> 
                        <td bgcolor="#EFEBEF" class=k><font color="#FF6600">
<?php 
echo '<p align="center">'.$this->pagination->create_links().'</p>';	
?>                        
                        </td>
                      </tr>
<?php   
	$query->free_result();	
}	
?>
        </table><br>
        <table width=100% border=0 cellspacing=0 cellpadding=0>
          <tr> 
            <td width=50%><a href="<?php $this->config->item('URL_ROOT')?>daua/kontak"><img src="<?php $this->config->item('URL_IMG')?>kp.gif" width=117 height=26 border=0 alt="kirimkan komentar Anda di sini!"></a></td>
            <td align=right width=50%></td>
          </tr>
        </table>
        <br>
      </td>
      <td width=20>&nbsp;</td>
      <td width=1 bgcolor="#425163"><img src="<?php $this->config->item('URL_IMG')?>s.gif" width=1 height=1></td>
    </tr>
  </table>
<?php 
include (APPPATH."views/inc_footer.php");
?>