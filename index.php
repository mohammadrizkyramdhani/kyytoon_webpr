<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>KyyToon</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    

    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">=</button>
    <h2 align="center">Upload Karyamu disini KyyToone-ers</h2>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">KyyToon</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="sidebar" id="sidebar">
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="index.php">Upload Karya</a></li>
        <li> <a href="profil.php">Profil</a></li>
    </div>
    </div>

    <div class="content">
        <button class="tombol" ><a href="add.php">Tambah Data</a></button>
        <table class="table table-hover" >
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID User</th>
                <th scope="col">Tahun Dibuat</th>
                <th scope="col">Author</th>
                <th scope="col">Genre</th>
                <th scope="col">Cover Komik</th>
                <th scope="col">Aksi</th>
                
            </tr>
            <?php
            include "koneksi.php";
            $no = 1;
            $data = mysqli_query($koneksi, "select * from pembuatan");
            while ($row = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['id_user']; ?></td>
                <td><?php echo $row['tahun_dibuat']; ?></td>
                <td><?php echo $row['author']; ?></td>
                <td><?php echo $row['genre']; ?></td>
                <td><img style="width:120px;" src="cover_img/<?php echo $row['cover']; ?>"</td>
                <td>
                    <a href="ubah.php?id=<?php echo $row['id_user']; ?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $row['id_user']; ?>" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    
    </div>


    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/1eca64e1a9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>   
</body>
</html>
