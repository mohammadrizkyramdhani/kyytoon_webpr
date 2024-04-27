<?php

include "koneksi.php";

$id = $_POST['id'];
$tahun = $_POST['tahun'];
$author = $_POST['author'];
$genre = $_POST['genre'];

$simpan = mysqli_query($koneksi, "Insert into pembuatan values('$id', '$tahun', '$author', '$genre')");

if ($simpan) {
    header("location:index.php");
} else{
    header("location:add.php");
}

?>