<?php 
include 'koneksi.php';
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$mapel = $_POST['mapel'];
$jabatan = $_POST['jabatan'];
 
mysqli_query($conn,"INSERT INTO identitas_guru VALUES('$nip','$nama','$mapel','$j')");
 
header("location:index.php?pesan=input");
?> 