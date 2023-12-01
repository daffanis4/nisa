<?php
include 'koneksi.php';

$id = $_GET['nis'];
$panggildata= $conn -> query("SELECT * FROM identitas_pelajar WHERE nis='$id' ");
$data =$panggildata ->fetch_assoc();
$hapus = $conn -> query("DELETE FROM identitas_pelajar WHERE nis='$id'");
header('location:tabel.php');

?>