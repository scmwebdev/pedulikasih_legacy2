<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="http://www.indosiar.com/css/vfy.css" rel=stylesheet type=text/css>
<title>Video from You</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {padding-left: 10px; padding-bottom: 5px; border-color:#53727d; border:1px; border-style:ridge; background-color:#edf2f6; font-family: Verdana,Arial,Helvetica; font-weight: bold; color:#435982; padding-top: 5px;}
-->
</style>
<script type="text/javascript" src="http://www.indosiar.com/js/jquery.js"></script>
<script type="text/javascript" src="http://www.indosiar.com/js/jquery.rater.packed.js"></script>
<script type="text/javascript" src="http://www.indosiar.com/js/jquery.block.js"></script> 
<script type="text/javascript" src="http://www.indosiar.com/js/jquery.form.js"></script>
<link rel="stylesheet" href="http://www.indosiar.com/css/jquery.bettertip.css" type="text/css" />
<script type="text/javascript" src="http://www.indosiar.com/js/jquery.bettertip.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.indosiar.com/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="http://www.indosiar.com/css/rater.css" media="screen" /> 
<script type="text/javascript">
    $(function(){
       BT_setOptions({openWait:500, closeWait:3000, enableCache:false});
    })
</script>
<script type="text/javascript">
$().ajaxStop($.unblockUI); 
$(function() {     
    $('#cform').ajaxForm({
        beforeSubmit: function(a,f,o) {
			    var theForm = f[0]; 
			    if (!theForm.nama.value || !theForm.komentar.value || !theForm.email.value || !theForm.videoid.value) { 
				        alert('All field must fill!'); 
				        return false; 
				    }
            o.dataType = 'html';
            $.blockUI('<br /><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>loading.gif" /><br /><b>Wait a moment...</b><br /><br />', { backgroundColor: '#fff', color: '#000' }); 
        },
        success: function(data) {			    
						if (typeof data == 'object' && data.nodeType)
				        data = elementToString(data.documentElement, true);
				    else if (typeof data == 'object')
				        data = objToString(data);    

				    $('#cform').clearForm();				        
				    $('#hasilkomentar').html(data);
        }
    });
    $('#kirim').ajaxForm({
        beforeSubmit: function(a,f,o) {
			    var theForm = f[0]; 
			    if (!theForm.email.value) { 
				        alert('All field must fill!'); 
				        return false; 
				    }
            o.dataType = 'html';
            $.blockUI('<br /><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>loading.gif" /><br /><b>Wait a moment...</b><br /><br />', { backgroundColor: '#fff', color: '#000' }); 
        },
        success: function(data) {			    
						if (typeof data == 'object' && data.nodeType)
				        data = elementToString(data.documentElement, true);
				    else if (typeof data == 'object')
				        data = objToString(data);    
				        
				    $('#kirim').clearForm();
				    alert('Email has been sent');	
        }
    });
}); 
</script>
</head>

<body>
		<div id="theHeader">
			<?
				echo $this->allfunction->menumainsite("videofiesta");
			?>
		</div>    	
		<div style="background-color:#E81C1B">
      <table border="0" cellpadding="0" cellspacing="4" bgcolor="#E81C1B">

        <tr>
          <td id="menu"><a href="<?=$this->config->item('URL_VIDEOFIESTA')?>">home</a></td>
<?
$query = $this->db->query("select * from tbl_video_kategori where id<>2 and id<>3 and id<>14 and id<>5 and id<>11 and id<>12 and id<>13 and id<>15");
if ($query->num_rows() > 0) {
			foreach ($query->result() as $row)
			{
?>				          
          <td id="menu"><a href="<?=$this->config->item('URL_VIDEOFIESTA')?><?=$row->kategori_url?>"><?=$row->kategori?></td>
<?
		}
}
$query->free_result();
?>		
        </tr>
      </table>	
     </div> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td background="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>bg-hdr.gif">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="14%"><a href="index.htm"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>logo.gif" width="200" height="100" border="0" /></a></td>
          <td width="86%" bgcolor="#C60021"><img src="<?=$this->config->item('URL_VIDEOFIESTA_IMG')?>kiss-bg.jpg" width="630" height="100" /></td>
        </tr>
      </table>
    </td>
  </tr>
</table>