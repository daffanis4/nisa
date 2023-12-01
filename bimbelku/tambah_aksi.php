<?php 
include 'koneksi.php';
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
 
mysqli_query($conn,"INSERT INTO identitas_pelajar VALUES('$nis','$nama','$kelas','$jurusan')");
 
header("location:index.php?pesan=input");
?> 