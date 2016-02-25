<style>
.rowtit {display:block;width:100%;font-size:14px;font-weight:bold;padding:10px 10px 10px 0px;margin-top:15px;border-bottom:5px solid #ff9900;}
.rowsmall {font-size:10px}
.error {color:#FF9900;padding-left:10px;}
#formBox table tr td {color:#fff;font-size:12px;}
#formBox table tr td input[type=text] {width:300px}

textarea,
input[type=text],
input[type=password]{
	background: rgba(255, 255, 255, 0.9);
	background:-moz-linear-gradient(90deg, #fff, #eee); /* Firefox */
	background:-webkit-gradient(linear, left top, left bottom, from(#eee), to(#fff), color-stop(0.2, #fff)); /* Webkit */
	border:1px solid #aaa;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	-moz-box-shadow:0 0 3px #aaa;
	-webkit-box-shadow:0 0 3px #aaa;
	padding:4px;
}
textarea:focus,
input[type=text]:focus,
input[type=password]:focus{
	border-color:#093c75;
	-moz-box-shadow:0 0 3px #0459b7;
	-webkit-box-shadow:0 0 3px #0459b7;
	outline:none; /* Pour enlever le contour jaune lorsque l'on sélectionne un input dans Chrome */
}
select{
	border:1px solid #aaa;
	cursor:pointer;
	padding:3px;
	-moz-box-shadow:0 0 3px #aaa;
	-webkit-box-shadow:0 0 3px #aaa;
}
select:active,
select:focus{
	border:1px solid #093c75;
	-moz-box-shadow:0 0 3px #0459b7;
	-webkit-box-shadow:0 0 3px #0459b7;
	outline:none;
}
input[type=submit]{
	background:#ddd;
	background:-moz-linear-gradient(90deg, #0459b7, #08adff); /* Firefox */
	background:-webkit-gradient(linear, left top, left bottom, from(#08adff), to(#0459b7)); /* Webkit */
	border:1px solid #093c75;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	-moz-box-shadow:0 1px 0 #fff;
	-webkit-box-shadow:0 1px 0 #fff;
	color:#fff;
	cursor:pointer;
	font-family:Arial,sans-serif;
	font-size:12px;
	font-weight:bold;
	/*margin-left:120px;*/
	padding:3px 10px;
	text-decoration:none;
	text-shadow:0 1px 1px #333;
	text-transform:uppercase;
}
input[type=submit]:hover{
	background:#eee;
	background:-moz-linear-gradient(90deg, #067cd3, #0bcdff);
	background:-webkit-gradient(linear, left top, left bottom, from(#0bcdff), to(#067cd3));
	border-color:#093c75;
	text-decoration:none;
}
input[type=submit]:active,
input[type=submit]:focus{
	background:#ccc;
	background:-moz-linear-gradient(90deg, #0bcdff, #067cd3);
	background:-webkit-gradient(linear, left top, left bottom, from(#067cd3), to(#0bcdff));
	border-color:#093c75;
	outline:none;
}

</style>
<h1>Registrasi</h1>
<div id="formBox">
	<form action="/thevoiceindonesia/register/submit" method="post" enctype="multipart/form-data" class="required" name="formRegister" id="formRegister">
		<table width="100%" cellpadding="4" cellspacing="0">
			<tr>
				<td colspan="2"><div class="rowtit">PENAMPILAN</div></td>
			</tr>
			<tr>
				<td>Kategori Penampilan</td>
				<td>
					<input type="radio" class="required" name="kategori" value="SOLO" checked /> SOLO &nbsp;&nbsp; 
					<input type="radio" class="required" name="kategori" value="DUET" /> DUET
				</td>
			</tr>
			<tr>
				<td colspan="2"><div class="rowtit">AUDISI</div></td>
			</tr>
			<tr>
				<td>Kota Audisi</td>
				<td>
					<input type="radio" class="required" name="kota_audisi" value="JAKARTA" checked /> JAKARTA &nbsp;&nbsp; 
					<input type="radio" class="required" name="kota_audisi" value="BANDUNG" /> BANDUNG &nbsp;&nbsp; 
					<input type="radio" class="required" name="kota_audisi" value="SURABAYA" /> SURABAYA &nbsp;&nbsp; 
					<input type="radio" class="required" name="kota_audisi" value="MAKASSAR" /> MAKASSAR
				</td>
			</tr>
			<tr>
				<td colspan="2"><div class="rowtit">DATA PRIBADI</div></td>
			</tr>
			<tr>
				<td style="width:300px">Nama Depan</td>
				<td><input type="text" class="required" name="nama_depan" id="nama_depan" /></td>
			</tr>
			<tr>
				<td>Nama Belakang</td>
				<td><input type="text" class="required" name="nama_belakang" id="nama_belakang" /></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" class="required" name="jenis_kelamin" value="Pria" checked /> Pria &nbsp;&nbsp; 
					<input type="radio" class="required" name="jenis_kelamin" value="Wanita" /> Wanita
				</td>
			</tr>
			<tr>
			  <td>Kewarganegaraan</td>
			  <td><input type="radio" class="required" name="kewarganegaraan" value="WNI" checked="checked" />
WNI &nbsp;&nbsp;
<input type="radio" class="required" name="kewarganegaraan" value="WNA" />
WNA</td>
		  </tr>
			<tr>
			  <td valign="top">Alamat</td>
			  <td><textarea class="required" name="alamat" cols="60" rows="3" style="width:100%" id="alamat"></textarea></td>
		  </tr>
			<tr>
			  <td>Kode Pos</td>
			  <td><input class="required" name="kodepos" type="text" maxlength="5" id="kodepos" style="width:100px" /></td>
		  </tr>
			<tr>
			  <td>Kota</td>
			  <td>
			    <select class="required" name="kota" id="kota">
                    <option value="Ambon">Ambon</option>
                    <option value="Banda Aceh">Banda Aceh</option>
                    <option value="Bandar Lampung">Bandar Lampung</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Banjarmasin">Banjarmasin</option>
                    <option value="Bengkulu">Bengkulu</option>
                    <option value="Denpasar">Denpasar</option>
                    <option value="Gorontalo">Gorontalo</option>
                    <option value="Jakarta" selected>Jakarta</option>
                    <option value="Jambi">Jambi</option>
                    <option value="Jayapura">Jayapura</option>
                    <option value="Kendari">Kendari</option>
                    <option value="Kupang">Kupang</option>
                    <option value="Makassar">Makassar</option>
                    <option value="Mamuju">Mamuju</option>
                    <option value="Manado">Manado</option>
                    <option value="Manokwari">Manokwari</option>
                    <option value="Mataram">Mataram</option>
                    <option value="Medan">Medan</option>
                    <option value="Padang">Padang</option>
                    <option value="Palangka Raya">Palangka Raya</option>
                    <option value="Palu">Palu</option>
                    <option value="Pangkal Pinang">Pangkal Pinang</option>
                    <option value="Pekanbaru">Pekanbaru</option>
                    <option value="Pontianak">Pontianak</option>
                    <option value="Samarinda">Samarinda</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Serang">Serang</option>
                    <option value="Sofifi">Sofifi</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Tanjung Pinang">Tanjung Pinang</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                </select>
              </td>
		  </tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input class="required" name="tgl_lahir" type="text" id="tgl_lahir" maxlength="10" readonly="readonly" style="width:100px" /> Usia 17 th s/d 45 th</td>
			</tr>
			<tr>
			  <td>Nomor  telfon (rumah)</td>
			  <td><input type="text" class="required" name="telp_rumah" id="telp_rumah" /></td>
		  </tr>
			<tr>
			  <td>Nomor  telfon keluarga/kerabat yang dapat dihubungi</td>
			  <td><input type="text" class="required" name="telp_kerabat" id="telp_kerabat" /></td>
		  </tr>
			<tr>
			  <td>Nomor  HP</td>
			  <td><input type="text" class="required" name="telp_hp" id="telp_hp" /></td>
		  </tr>
			<tr>
			  <td>Email</td>
			  <td><input type="text" class="required" name="email" /></td>
		  </tr>
			<tr>
				<td>Profesi/Pendidikan</td>
				<td><input type="text" name="pekerjaan" /></td>
			</tr>
			<tr>
			  <td colspan="2"><div class="rowtit">FOTO</div></td>
		  </tr>
			<tr>
			  <td rowspan="2" valign="top">Silahkan upload 2 foto (minimum 1 foto)
			    <div class="rowsmall"> - Foto Ukuran 4R Close Up<br />
			      - Besar file foto maksimum 1MB<br />
		      - Format file foto JPG atau PNG </div></td>
			  <td><input type="file" class="required" name="fotofile1" size="40" id="fotofile1" /></td>
		  </tr>
			<tr>
			  <td><input type="file" name="fotofile2" size="40" /></td>
		  </tr>
			<tr>
			  <td colspan="2"><div class="rowtit">VIDEO</div></td>
		  </tr>
			<tr>
			  <td valign="top">Silahkan upload video menyanyi anda
			    <div class="rowsmall"> - Besar file video maksimum 4MB<br />
		      - Format file video MP4 atau 3GP</div></td>
			  <td valign="top"><input type="file" class="required" name="videofile" size="40" /></td>
		  </tr>
			<tr>
			  <td colspan="2"><div class="rowtit">MUSICAL LINK</div></td>
		  </tr>
			<tr>
			  <td colspan="2">Apakah anda mempunyai video lain penampilan anda sedang bernyanyi (contoh : di panggung, cafe, etc)? Jika ada silahkan cantumkan link video anda di sini
			  <textarea name="musical_link" cols="60" rows="2" style="width:100%" id="musical_link"></textarea></td>
		  </tr>
			<tr>
				<td colspan="2"><div class="rowtit">ESSAY</div></td>
			</tr>
			<tr>
			  <td colspan="2">Silahkan jawab pertanyaan dibawah ini dengan sungguh-sungguh dan selengkap mungkin. Jawaban anda akan mewakili/mempresentasikan diri anda di The Voice Indonesia.</td>
		  </tr>
			<tr>
			  <td colspan="2">1. Sejak  kapan anda terlibat/aktif di dunia musik?			    <textarea class="required" name="lama_menyanyi" cols="60" rows="2" style="width:100%" id="lama_menyanyi"></textarea></td>
		  </tr>
			<tr>
			  <td colspan="2">2. Pernahkah  anda tampil di depan umum? Kapan dan dimana?
	            <textarea class="required" name="tampil_depan_audience" cols="60" rows="2" style="width:100%" id="tampil_depan_audience"></textarea></td>
		  </tr>
			<tr>
			  <td colspan="2">3. Apakah  anda sudah pernah tampil dalam acara TV? Apabila pernah, program apa?			    <textarea class="required" name="tampil_acara_tv" cols="60" rows="2" style="width:100%" id="tampil_acara_tv"></textarea></td>
		  </tr>
			<tr>
			  <td colspan="2">4. Apa  pengalaman pribadi anda yang paling berarti bagi anda?			    <textarea class="required" name="kejadian_terpenting" cols="60" rows="2" style="width:100%" id="kejadian_terpenting"></textarea></td>
		  </tr>
			<tr>
			  <td colspan="2">5. Siapakah  tokoh yang anda idolakan di dunia/industri musik?			    <textarea class="required" name="penyanyi_idola" cols="60" rows="2" style="width:100%" id="penyanyi_idola"></textarea></td>
		  </tr>
			<tr>
				<td colspan="2"><div class="rowtit">PERNYATAAN</div></td>
			</tr>
			<tr>
				<td colspan="2">
                    Dengan sejujur-jujurnya dan sebenar-benarnya saya memberikan jawaban informasi  dan bertanggung jawab penuh jika dikemudian hari terjadi penyesatan. Lebih jauh lagi, saya mengerti bahwa produser memiliki hak yang dapat dilaksanakan sewaktu-waktu atas kebijaksanaannya sendiri untuk mendiskualifikasi saya dari proses audisi bila pada tahap apapun memberikan data diri yang tidak benar, tidak akurat, atau menyesatkan melanggar peraturan atau melanggar ketentuan-ketentuan yang tertera disini.
                    <br /><br />
					<input type="checkbox" class="required" name="pernyataan" value="YES" /> SETUJU 
                </td>
			</tr>
			<tr>
				<td colspan="2"><div class="rowtit">SECURITY CODE</div></td>
			</tr>
			<tr>
		    <td colspan="2">
        <?php
          require_once($this->config->item('ROOTBASEPATH').'phpx/recaptchalib.php');
          echo recaptcha_get_html(RECAPTCHA_PUBLIC_KEY);
        ?>
		    </td>
		  </tr>
			<tr>
				<td colspan="2" align="center">
					<br /><br /><br />
					<input type="submit" class="required" name="submitnow" value="Daftar Sekarang" />
				</td>
			</tr>
		</table>
	</form>
</div>
<link rel="stylesheet" href="/assets/css/ui/dark-hive/jquery-ui.css" />
<script type="text/javascript" src="/assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="/assets/js/jquery.form.js"></script>
<script type="text/javascript" src="/assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="/assets/js/jquery.blockUI.js"></script>
<script language="javascript">
$().ajaxStop($.unblockUI); 
$(function() {
    $.datepicker.setDefaults({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        yearRange: "1967:1995"
    });
});
$(document).ready(function() {
    $("#tgl_lahir").datepicker();
    
	var v = jQuery("#formRegister").validate({
    	rules: {
    		email: {required: true, email: true},
    		recaptcha_response_field: { required: true }
    	},
    	messages: {
    		email: "Please enter a valid email address"
    	},
		submitHandler: function(form) {
			jQuery(form).ajaxSubmit({
                beforeSubmit: function(a,f,o) {
                    var theForm = f[0]; 
				    if (theForm.pernyataan.value == 'NO') {
				        alert('Anda harus pilih SETUJU pada PERNYATAAN'); 
				        return false; 
				    }
				    $('#formBox').block();
                },
                success: function(data) {
    			    if (data.substring(0,6) == "SUKSES") {
    			    	var namax = document.formRegister.nama_depan.value;
    			    	var emailx = document.formRegister.email.value;
    			    	var noreg = data.substring(7);
    			    	
    			    	$("#formBox").html('<p>&nbsp;</p><p>Hallo '+namax+',<br/><br/>Registrasi berhasil. Kami akan menghubungi Anda bila terpilih untuk seleksi The Voice Indonesia.<br/><br/>Terima Kasih.</p>');
    			    } else {
    			    	alert("Error:\n" + data);
    			    	Recaptcha.reload();
    			    }
    			    $("#formBox").unblock();
                }
			});
		}
	});
    
    <?php
    /*$('#formRegister').ajaxForm({
        beforeSubmit: function(a,f,o) {
				    var theForm = f[0]; 
				    if (!theForm.videofile.value || !theForm.fotofile.value || !theForm.nama_lengkap.value || !theForm.email.value || !theForm.tempat_lahir.value || !theForm.nomor_identitas.value || !theForm.nama_ortu_laki.value || !theForm.nama_ortu_perempuan.value || !theForm.pendidikan.value || !theForm.pekerjaan.value || !theForm.alamat1.value || !theForm.no_telepon.value) {
				        alert('Semua field harus terisi!'); 
				        return false; 
				    }
				    
            o.dataType = 'html';
            $('#formBox').block(); 
        },
        success: function(data) {
						if (typeof data == 'object' && data.nodeType)
				        data = elementToString(data.documentElement, true);
				    else if (typeof data == 'object')
				        data = objToString(data);    

			    if (data.substring(0,6) == "SUKSES") {
			    	var namax = document.formRegister.nama_lengkap.value;
			    	var emailx = document.formRegister.email.value;
			    	var noreg = data.substring(7);
			    	
			    	$("#formBox").html('<p>&nbsp;</p><p>Hallo '+namax+',<br/><br/>Registrasi berhasil. Kami telah mengirim konfirmasi ke email '+emailx+'. Bila tidak ada di inbox email, coba cek di spam atau bulk email.<br/><br/>Terima Kasih.</p>');
			    	
			    	//$("#formRegister").clearForm();
			    	
			    	//alert('Thank you');
			    } else {
			    	alert("Error:\n" + data);
			    	Recaptcha.reload();
			    }										
			    
					$("#formBox").unblock();
        }
    });*/
    ?>
});

function clearRadiobuttons(radioName) {
    var i=0;
    for (i=0; i < radioName.length; i++) { // Runs through all radio buttons
        radioName[i].checked = false; // Unchecks radio button
    }
}
</script>