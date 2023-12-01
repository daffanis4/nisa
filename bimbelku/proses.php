<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $text = $_POST["text"];
    

    $sql = "INSERT INTO tugas ( id , text, ) VALUES ('$id', '$text')";
}

if ($conn->query($sql) === TRUE) {
    header("Location: user.php");
} else {
    echo "Error : Pesan tidak terkirim";
}
?>