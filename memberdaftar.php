<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mari Belajar Coding - Wilayah Adminstrasi Indonesia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="asset/select2-4.0.6-rc.1/dist/css/select2.min.css">
  <script src="asset/jquery/jquery-3.3.1.min.js"></script>

  <script src="asset/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>   
  <script src="asset/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>   
  <script src="asset/js/app.js"></script>

</head>
<body>
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Daftar</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--login-->
	<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">Form<span> Daftar</span></h3>
			<p>Silahkan isikan data diri Anda dengan benar pada form dibawah ini</p>
		</div>
		<div class="widget-shadow">
			<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
				<h4>Sudah Punya Akun ?<a href="loginmember.html">  Masuk »</a> </h4>
			</div>
			<div class="login-body">
			
				<form class="wow fadeInUp animated" data-wow-delay=".7s" method="POST" action="">
					<input type="text" value="<?php echo isset ( $nama_depan ) ? $nama_depan : ""; ?>" name="nama_depan" placeholder="Nama Depan" required="">
					<input type="text" value="<?php echo isset ( $nama_belakang ) ? $nama_belakang : ""; ?>" name="nama_belakang" placeholder="Nama Belakang" required="">
					<input type="email" value="<?php echo isset ( $email ) ? $email : ""; ?>" name="email" placeholder="Alamat Email" required="">
					<input type="password" value="<?php echo isset ( $pass ) ? $pass : ""; ?>" name="pass" class="lock" placeholder="Kata Sandi" required="">
					<input type="password" value="<?php echo isset ( $upass ) ? $upass : ""; ?>" name="upass" class="lock" placeholder="Konfirmasi Kata Sandi" required="">
					<textarea name="alamat" placeholder="Alamat Lengkap Beserta Kode Pos" required=""><?php echo isset ( $alamat ) ? $alamat : ""; ?></textarea>
					<input type="text" value="<?php echo isset ( $tlp ) ? $tlp : ""; ?>" name="tlp" placeholder="Nomor Telepon Yang Bisa Dihubungi" required="">
					<select name="propinsi" id="propinsi" required="">
						<option value="" disabled selected>-- Pilih Provinsi --</option>
						<?php
							$query17       = $db->query("SELECT id_prov,nama_prov FROM prov ORDER BY nama_prov ASC");
							while ( $row17 = $query17->fetch_assoc()  ){
								echo '<option value="'.$row17['id_prov'].'">'.$row17['nama_prov'].'</option>';
							}
						?>
					</select>
					<select name="kota" id="kota" required="">
						<option value="" disabled selected>-- Kabupaten/Kota --</option>
					</select>
					<select name="kec" id="kec" required="">
						<option value="" disabled selected>-- Pilih Kecamatan --</option>	
					</select>
					<img src="captcha/captcha.php" />
					<input type="text" name="kode" placeholder="Masukan Hasil Hitungan Diatas" required="">
					<input type="submit" name="daftar" value="Daftar">
				</form>
			</div>
		</div>
	</div>
	<!--//login-->
	<!--//Module-select-city-->
	<script type="text/javascript">
	var htmlobjek;
	$(document).ready(function(){
	  //apabila terjadi event onchange terhadap object <select id=propinsi>
	  $("#propinsi").change(function(){
		var propinsi = $("#propinsi").val();
		$.ajax({
			url: "ambilkota.php",
			data: "propinsi="+propinsi,
			cache: false,
			success: function(msg){
				//jika data sukses diambil dari server kita tampilkan
				//di <select id=kota>
				$("#kota").html(msg);
			}
		});
	  });
	  $("#kota").change(function(){
		var kota = $("#kota").val();
		$.ajax({
			url: "ambilkecamatan.php",
			data: "kota="+kota,
			cache: false,
			success: function(msg){
				$("#kec").html(msg);
			}
		});
	  });
	});

	</script>
	<!--//end-module-select-city-->
</body>
</html>
