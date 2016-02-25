<style>
.rowtit {display:block;width:100%;font-size:14px;font-weight:bold;padding:10px;margin-top:15px;border-bottom:5px solid #ff9900;}
.rowsmall {font-size:10px;}
#formBox table tr td {color:#000}
#formBox table tr td input[type=text] {border:1px solid #ccc;}
.error {color:red;font-size:10px;}
.errors {border:1px solid red;}
</style>
<h1>Registrasi Online</h1>
<div id="formBox">
	<form action="/takemeout/register/submit" method="post" enctype="multipart/form-data" name="formRegister" id="formRegister">
		<table border="0" cellspacing="0" cellpadding="5">
		  <tr>
			<td>1</td>
			<td>Nama Lengkap (sesuai KTP)* :</td>
			<td><input name="nama_lengkap" type="text" class="required" size="60" maxlength="50" /></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>Nama Panggilan* :</td>
			<td><input name="nama_panggilan" type="text" class="required" maxlength="20" /></td>
		  </tr>
		  <tr>
			<td>2</td>
			<td>Jenis Kelamin* :</td>
			<td><input type="radio" name="jenis_kelamin" value="L" checked />
		Laki-laki &nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="jenis_kelamin" value="P" /> 
		Perempuan
		</td>
		  </tr>
		  <tr>
			<td>3</td>
			<td>Usia* :</td>
			<td><input name="usia" type="text" class="required number" size="5" maxlength="2" /> 
			  tahun</td>
		  </tr>
		  <tr>
			<td>4</td>
			<td>Tinggi / Berat Badan* :</td>
			<td>
				<input name="tinggi_badan" type="text" class="required number" size="5" maxlength="3" /> cm
				&nbsp;/&nbsp;
				<input name="berat_badan" type="text" class="required number" size="5" maxlength="3" /> kg</td>
		  </tr>
		  <tr>
			<td>5</td>
			<td>Ukuran Pakaian:</td>
			<td>&nbsp;</td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>Baju* :</td>
			<td>
				<input type="radio" name="ukuran_baju" value="S" checked /> S &nbsp;
				<input type="radio" name="ukuran_baju" value="M" /> M &nbsp;
				<input type="radio" name="ukuran_baju" value="L" /> L &nbsp;
				<input type="radio" name="ukuran_baju" value="XL" /> XL &nbsp;
				<input type="radio" name="ukuran_baju" value="XXL" /> XXL &nbsp;
				Lainnya: <input type="text" name="ukuran_baju_lainnya" />
			</td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>Kemeja* :</td>
			<td><input name="ukuran_kemeja" type="text" class="required number" size="5" maxlength="2" /></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>Celana* :</td>
			<td><input name="ukuran_celana" type="text" class="required number" size="5" maxlength="2" /></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>Sepatu* :</td>
			<td><input name="ukuran_sepatu" type="text" class="required number" size="5" maxlength="2" /></td>
		  </tr>
		  <tr>
			<td>6</td>
			<td>Agama* :</td>
			<td><input type="radio" name="agama" value="ISLAM" checked />
		Islam &nbsp;
		<input type="radio" name="agama" value="KRISTEN" />
		Kristen &nbsp;
		<input type="radio" name="agama" value="KATOLIK" />
		Katolik &nbsp;
		<input type="radio" name="agama" value="HINDU" />
		Hindu &nbsp;
		<input type="radio" name="agama" value="BUDHA" />
		Budha
		</td>
		  </tr>
		  <tr>
			<td>7</td>
			<td>Kewarganegaraan* :</td>
			<td><input type="radio" name="kewarganegaraan" value="WNI" checked />
			  WNI &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="kewarganegaraan" value="WNA" />
			  WNA</td>
		  </tr>
		  <tr>
			<td>8</td>
			<td>Nomor KTP* :</td>
			<td><input name="no_ktp" type="text" class="required" size="40" maxlength="30" /></td>
		  </tr>
		  <tr>
			<td>9</td>
			<td>Nomor NPWP* :</td>
			<td><input name="no_npwp" type="text" class="required" size="40" maxlength="30" /></td>
		  </tr>
		  <tr>
			<td>10</td>
			<td>Tempat / Tanggal Lahir* :</td>
			<td><input name="tempat_lahir" type="text" class="required" size="40" />
			&nbsp;/&nbsp;
			<input name="tanggal_lahir" type="text" class="required" id="tanggal_lahir" maxlength="10" /> 
			(yyyy/mm/dd)</td>
		  </tr>
		  <tr>
			<td>11</td>
			<td>Alamat Rumah (sesuai ktp)* :</td>
			<td><input name="alamat_rumah" type="text" class="required" size="60" maxlength="50" /></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>RT/RW* :</td>
			<td><input name="rt_rw" type="text" class="required" maxlength="20" /></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>Kelurahan* :</td>
			<td><input name="kelurahan" type="text" class="required" size="40" maxlength="50" /></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>Kecamatan* :</td>
			<td><input name="kecamatan" type="text" class="required" size="40" maxlength="50" /></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>Kota* :</td>
			<td><input name="kota" type="text" class="required" size="40" maxlength="50" /></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>Kode Pos* :</td>
			<td><input name="kodepos" type="text" class="required number" maxlength="5" /></td>
		  </tr>
		  <tr>
			<td>12</td>
			<td>No Telepon / HP* :</td>
			<td><input name="no_telepon" type="text" class="required" size="30" maxlength="20" />
			  &nbsp;/&nbsp; <input name="no_hp" type="text" class="required" size="30" maxlength="20" /></td>
		  </tr>
		  <tr>
			<td>13</td>
			<td>Alamat Email* :</td>
			<td><input name="email" type="text" class="required" id="email" size="40" maxlength="50" /></td>
		  </tr>
		  <tr>
			<td valign="top">14</td>
			<td valign="top">Kepemilikan Rumah* :</td>
			<td>
			  <input type="radio" name="kepemilikan_rumah" value="Milik Sendiri" checked /> Milik Sendiri &nbsp;
			  <input type="radio" name="kepemilikan_rumah" value="Milik Orang Tua" /> Milik Orang Tua &nbsp;
			  <input type="radio" name="kepemilikan_rumah" value="Sewa/Kontrak" /> Sewa/Kontrak &nbsp;
			  <br/>
			  <input type="radio" name="kepemilikan_rumah" value="Instansi/Dinas" /> Instansi/Dinas &nbsp;
			  <input type="radio" name="kepemilikan_rumah" value="Kredit/Angsuran" /> 
			Kredit/Angsuran</td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>Lainnya : 
			<input name="kepemilikan_rumah_lainnya" type="text" size="60" maxlength="50" /></td>
		  </tr>
		  <tr>
			<td>15</td>
			<td>Lama Menetap* :</td>
			<td><input name="lama_menetap_tahun" type="text" class="required number" size="5" maxlength="2" /> 
			  tahun &nbsp;&nbsp;&nbsp;
			  <input name="lama_menetap_bulan" type="text" class="required number" size="5" maxlength="2" /> 
			  bulan</td>
		  </tr>
		  <tr>
			<td>16</td>
			<td>Profesi* :</td>
			<td><input name="profesi" type="text" class="required" size="60" maxlength="100" /></td>
		  </tr>
		  <tr>
			<td>17</td>
			<td>Unggah Foto Diri (berwarna)* :</td>
			<td>&nbsp;</td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>Close Up* :</td>
			<td><input name="foto_closeup" type="file" class="required" size="60" /></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>Full (seluruh badan)* :</td>
			<td><input name="foto_full" type="file" class="required" size="60" /></td>
		  </tr>
		  <tr>
			<td valign="top">18</td>
			<td>Unggah Video Perkenalan Diri<br/>(format MP4/3GP, max. 10 MB)<br/>CONTOH : <a class="various" data-fancybox-type="iframe" href="/takemeout/demovideo"><img src="/assets/images/takemeout/play_video_icon.png" alt="" /></td>
			<td valign="top"><input name="video" type="file" size="60" /></td>
		  </tr>
		  <tr>
			<td valign="top">19</td>
			<td valign="top">Security Code* :</td>
			<td>
				<?php
				  require_once($this->config->item('ROOTBASEPATH').'phpx/recaptchalib.php');
				  echo recaptcha_get_html(RECAPTCHA_PUBLIC_KEY);
				?>
			</td>
		  </tr>
		</table>
		<p align="center"><input type="submit" name="submitnow" value="Daftar Sekarang" /></p>
	</form>
</div>
<link rel="stylesheet" media="screen" href="/assets/css/ui/dark-hive/jquery.ui.all.css" />
<script type="text/javascript" src="/assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="/assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="/assets/js/jquery.form.js"></script>
<script type="text/javascript" src="/assets/js/jquery.blockUI.js"></script>
<script language="javascript">
$().ajaxStop($.unblockUI); 

$(document).ready(function() {
    $.datepicker.setDefaults({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
    });
	
    $("#tanggal_lahir").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '1920:2010'
    });
	
	var v = jQuery("#formRegister").validate({
	    ignore: "",
		rules: {
			email: { required: true, email: true },
			tanggal_lahir: { required: true, dateISO: true }
		},
		submitHandler: function(form) {
			$("#formBox").block();
			jQuery(form).ajaxSubmit({
                beforeSubmit: function(a,f,o) {
                },
                success: function(data) {
					if (data.substring(0,6) == "SUKSES") {
						var namax = document.formRegister.nama_lengkap.value;
						var emailx = document.formRegister.email.value;
						
						$("#formBox").html('<div style="width:400px;margin:0 auto;padding:20px;text-align:center;"><p>&nbsp;</p><p>Hallo '+namax+',<br/><br/>Registrasi berhasil. Kami akan menghubungi Anda bila terpilih untuk seleksi <b>Take Me Out Indonesia</b>.<br/><br/>Terima Kasih.</p></div>');
					} else {
						alert("Error:\n" + data);
						Recaptcha.reload();
					}
					
					$("#formBox").unblock();
                }
			});
		}
	});
	
    $('.number').each(function() {
        $(this).rules('add', {
            number: true
        });
    });
});
</script>