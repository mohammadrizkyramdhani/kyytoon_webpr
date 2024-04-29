<?php

include "koneksi.php";

$id = $_POST['id'];
$tahun = $_POST['tahun'];
$author = $_POST['author'];
$genre = $_POST['genre'];
$cover = $_POST['cover'];

$update = mysqli_query($koneksi, "update pembuatan set tahun_dibuat='$tahun', author='$author', genre='$genre', cover='$cover'
    where id_user='$id'  ");

if ($update) {
    header("location:index.php");
} else{
    header("location:ubah.php");
}

?>