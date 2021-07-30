<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="laden();">

        <?php
            include "connect.php";
            $queryprofil=mysqli_query($connect, "SELECT nama_toko, nomor_hp from profil");
            $rowprofil = mysqli_fetch_array($queryprofil);


            $queryall=mysqli_query($connect, "SELECT * FROM `newmember` ORDER BY idmember DESC LIMIT 1");
            $row = mysqli_fetch_array($queryall);
            $domisili = $row['domisili'];
            $kabkot = $row['kabkot'];
            $kec = $row['kec'];
            $nama = $row['nama'];
            $hp = $row['hp'];
            $pesan = $row['pesan'];

            $queryprov = mysqli_query($connect, "SELECT nama_prov from `prov` where id_prov = $domisili");
            $rowdom = mysqli_fetch_array($queryprov);
            
            $querykabupaten = mysqli_query($connect, "SELECT nama_kabkot FROM `kabkot` where id_kabkot = $kabkot");
            $rowkab = mysqli_fetch_array($querykabupaten);
            
            $querykecamatan = mysqli_query($connect, "SELECT nama_kec FROM `kec` where id_kec = $kec");
            $rowkec = mysqli_fetch_array($querykecamatan);

            // getdata
            echo "<input type='hidden' value='$nama' id='username'>";
            echo "<input type='hidden' value='$hp' id='hp'>";
            echo "<input type='hidden' value='$pesan' id='pesan'>";
            echo "<input type='hidden' value='$rowdom[0]' id='domisili'>";
            echo "<input type='hidden' value='$rowkec[0]' id='kecamatan'>";
            echo "<input type='hidden' value='$rowkab[0]' id='kabupaten'>";
            
        ?>
             
                      

<script>
    var str = "<?php echo $rowprofil['nomor_hp']; ?>";

    var wa = "https://api.whatsapp.com/send?phone=";
    var sap = "&text=Halo%20*KicksandBags*,%0ASaya%20";
	var enter = "%0A";
    var space = "%20";
    var spaceloc = "%20-%20";

    var a = document.getElementById("username").value;
    var b = document.getElementById("domisili").value;
    var c = document.getElementById("kecamatan").value;
    var d = document.getElementById("kabupaten").value;
    var e = document.getElementById("hp").value;
    var f = document.getElementById("pesan").value;

   
    function laden() {
        location.href = wa + str + sap + a + enter + b + spaceloc + c + spaceloc + d + enter + e + enter + f;

    }
</script>
</body>
</html>