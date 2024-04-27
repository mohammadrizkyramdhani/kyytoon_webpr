<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>KyyToon</title>
</head>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
.ubah {
    margin: 20px;
    width: 1200px;
    align-items: center; 
}
</style>

<body>
    <h2>Form Edit Data Comic</h2>
    <div class="ubah">
    
    <?php
        include "koneksi.php";

        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "Select * from pembuatan where id_user='$id'");
        while($row = mysqli_fetch_array($data)) {

    ?>



    <form action=update.php method="post">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Id User</label>
        <input type="text" name="id" value="<?php echo $row['id_user']; ?>" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tahun Dibuat</label>
        <input type="text" name="tahun" value="<?php echo $row['tahun_dibuat']; ?>" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Author</label>
        <input type="text" name="author" value="<?php echo $row['author']; ?>" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Genre</label>
        <input type="text" name="genre" value="<?php echo $row['genre']; ?>" class="form-control" id="exampleInputPassword1">
    </div>
    <input type="submit" name="edit" value="Edit" class="btn btn-primary">
    <input type="reset" name="batal"  value="Batal" class="btn btn-primary">

    </form>
    <?php
    }
    ?>
    </div>
    

    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/1eca64e1a9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>   
</body>
</html>