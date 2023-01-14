
<?php 

include_once("koneksi.php");

if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["no_hp"];
    $email = $_POST["email"];



    $query = "INSERT INTO data_warga VALUES ('','$nama', '$tanggal_lahir', '$alamat', '$no_hp', '$email')";
    
    mysqli_query($conn, $query);

    echo "<script>alert('data berhasil ditambahkan')
    document.location.href = 'index.php'
     </script>";

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>


<nav class="navbar bg-primary ">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Ali Masykur </a>
  </div>
</nav>


<div class="container  position-relative">

<h1 class="text-center mt-3">Tambah Data Anda</h1>

    <form class="form-floating mt-4" action="" method="post">
        <div class="nama mb-3">
            <label for="nama" class="mb-1">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="alexander arnold" value=""  name="nama">
        </div>
        <div class="tanggal-lahir mb-3">
            <label for="tanggal-lahir" class="mb-1">Tanggal Lahir </label>
            <input type="date" class="form-control" id="tanggal-lahir" placeholder="01 Januari 2000" value=""  name="tanggal_lahir">
        </div>
        <div class="alamat mb-3">
            <label for="alamat" class="mb-1">Alamat </label>
            <input type="text" class="form-control" id="alamat" placeholder="Kebonsari Wetan" value=""  name="alamat">
        </div>
        <div class="no-hp mb-3">
            <label for="no_hp" class="mb-1">Nomor HP </label>
            <input type="number" class="form-control" id="no_hp" placeholder="085123456789" value=""  name="no_hp">
        </div>
        <div class="email mb-3">
            <label for="email" class="mb-1">Email </label>
            <input type="email" class="form-control" id="email" placeholder="contoh@gmail.com" value="" name="email">
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Tambah Data</button>
    </form>

    <a class="btn btn-primary position-absolute end-0 me-3 " href="index.php" role="button">Kembali Home</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>