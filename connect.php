<?php

	$connect = mysqli_connect('localhost', 'n1116126_rizal', 'rimiMYSQL', 'n1116126_kicksandbags');
	
	if(mysqli_connect_error()){
		echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
	}

?>