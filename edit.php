
<?php 

include_once("koneksi.php");

$id = $_GET["id"];

$data_ubah = mysqli_query($conn, "SELECT * FROM data_warga WHERE id = $id");

$hasil = mysqli_fetch_array($data_ubah);

if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["no_hp"];
    $email = $_POST["email"];



    $query = "UPDATE data_warga SET nama = '$nama', tanggal_lahir='$tanggal_lahir', alamat = '$alamat', no_hp = '$no_hp', email = '$email' WHERE id = $id";
    
    mysqli_query($conn, $query);

    echo "<script>alert('data berhasil diubah')
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
            <input type="text" class="form-control" id="nama" placeholder="alexander arnold" value="<?= $hasil["nama"] ?>"  name="nama">
        </div>
        <div class="tanggal-lahir mb-3">
            <label for="tanggal-lahir" class="mb-1">Tanggal Lahir </label>
            <input type="date" class="form-control" id="tanggal-lahir" placeholder="01 Januari 2000" value="<?= $hasil["tanggal_lahir"] ?>"  name="tanggal_lahir">
        </div>
        <div class="alamat mb-3">
            <label for="alamat" class="mb-1">Alamat </label>
            <input type="text" class="form-control" id="alamat" placeholder="Kebonsari Wetan" value="<?= $hasil["alamat"] ?>"  name="alamat">
        </div>
        <div class="no-hp mb-3">
            <label for="no_hp" class="mb-1">Nomor HP </label>
            <input type="number" class="form-control" id="no_hp" placeholder="085123456789" value="<?= $hasil["no_hp"] ?>"  name="no_hp">
        </div>
        <div class="email mb-3">
            <label for="email" class="mb-1">Email </label>
            <input type="email" class="form-control" id="email" placeholder="contoh@gmail.com" value="<?= $hasil["email"] ?>" name="email">
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Update Data</button>
    </form>

    <a class="btn btn-primary position-absolute end-0 me-3 " href="index.php" role="button">Kembali Home</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>