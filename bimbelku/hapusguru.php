<?php
include 'koneksi.php';

$id = $_GET['nip'];
$panggildata= $conn -> query("SELECT * FROM identitas_guru WHERE nip='$id' ");
$data =$panggildata ->fetch_assoc();
$hapus = $conn -> query("DELETE FROM identitas_guru WHERE nip='$id'");
header('location:tabelguru.php');

?>