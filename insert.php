<?php

include "koneksi.php";

$id = $_POST['id'];
$tahun = $_POST['tahun'];
$author = $_POST['author'];
$genre = $_POST['genre'];
$cover = $_FILES['cover']['name'];

// $simpan = mysqli_query($koneksi, "Insert into pembuatan values('$id', '$tahun', '$author', '$genre', '$cover')");

// if ($simpan) {
//     header("location:index.php");
// } else{
//     header("location:add.php");
// }

if ($cover != "") {
    $ekstensi_diperbolehkan = array('png','jpg');
    $x = explode('.', $cover);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['cover']['tmp_name'];
    $angka_acak = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$cover;

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'cover_img/'.$nama_gambar_baru);

        $simpan = "Insert into pembuatan (id_user, tahun_dibuat, author, genre, cover) values('$id', '$tahun', '$author', '$genre', '$nama_gambar_baru')";
        $result = mysqli_query($koneksi, $simpan);

        // if ($simpan) {
        //     header("location:index.php");
        // } else{
        //     header("location:add.php");
        // }

        if(!$result) {
                die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        }else{
            echo "<script>alert('Data Berhasil Ditambahkan!');window.location='index.php';</script>";
        }

    }else{
        echo "<script>alert('Hanya bisa gambar berformat JPG dan PNG!');window.location='add.php';</script>";
    }
} else{
    echo "<script>alert('Masukkan Cover dulu!');window.location='add.php';</script>";
}

?>