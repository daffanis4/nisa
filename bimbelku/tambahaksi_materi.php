<?php 
include 'koneksi.php';
$id = $_POST['id'];
$link = $_POST['link'];
 
mysqli_query($conn,"INSERT INTO tugas VALUES('$id','$link',)");
 
header("location:user.php?pesan=input");
?> 