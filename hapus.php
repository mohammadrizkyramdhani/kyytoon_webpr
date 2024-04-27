<?php
include "koneksi.php";

$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "delete from pembuatan where id_user='$id'");

if ($hapus) {
    header("location:index.php");
}else {
    echo "Data Gagal Terhapus";
}



?>