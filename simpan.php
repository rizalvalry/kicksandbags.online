<?php 

include('connect.php');

$nama       = htmlspecialchars($_POST['nama']);
$domisili    = htmlspecialchars($_POST['domisili']);
$kabkot    = htmlspecialchars($_POST['kabkot']);
$kec    = htmlspecialchars($_POST['kec']);
$hp    = htmlspecialchars($_POST['hp']);
$pesan    = htmlspecialchars($_POST['pesan']);

$insert = mysqli_query($connect, "INSERT into newmember set nama='$nama', domisili='$domisili', kabkot='$kabkot', kec='$kec', hp='$hp', pesan='$pesan'");

?>
