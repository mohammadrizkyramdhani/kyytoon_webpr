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
.tambah {
    margin: 20px;
    width: 1200px;
    align-items: center; 
}
</style>

<body>
    <h2 align="center">Tambah Data</h2>
    <div class="tambah">
    <form action=insert.php method="post" enctype="multipart/form-data">
   
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Id User</label>
        <input type="text" name="id" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tahun Dibuat</label>
        <input type="text" name="tahun" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Author</label>
        <input type="text" name="author" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Genre</label>
        <input type="text" name="genre" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Cover Komik</label>
        <input type="file" name="cover" class="form-control" id="exampleInputPassword1">
    </div>
    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
    <input type="reset" name="batal"  value="Batal" class="btn btn-primary">

    </form>
    </div>
    

    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/1eca64e1a9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>   
</body>
</html>