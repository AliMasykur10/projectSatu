

<?php 

include_once("koneksi.php");


$result = mysqli_query($conn, "SELECT * FROM data_warga ORDER BY id DESC");



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project satu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar bg-primary ">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Ali Masykur </a>
  </div>
</nav>


<div class="container mt-4">

    <h1 class="text-center mb-3">Data Warga</h1>
    <a class="btn btn-primary mb-3" href="tambah.php" role="button">Tambah Data</a>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama</th>
          <th scope="col">Tanggal lahir</th>
          <th scope="col">Alamat</th>
          <th scope="col">Nomor Hp</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
    <?php $i = 1; ?>
    <?php 
        while($mhs = mysqli_fetch_assoc($result)) : ?>

        <tr>
          <th scope="row"><?= $i; ?></th>
          <td><?= $mhs["nama"] ?></td>
          <td><?= $mhs["tanggal_lahir"] ?></td>
          <td><?= $mhs["alamat"] ?></td>
          <td><?= $mhs["no_hp"] ?></td>
          <td><?= $mhs["email"] ?></td>
          <td scope="col">
             <a class="btn btn-success" href="edit.php?id=<?= $mhs["id"] ?>" role="button">Edit</a> 
          <a class="btn btn-danger" href="hapus.php?id=<?= $mhs["id"] ?>" role="button" name >Hapus</a></td>
        </tr>

    <?php  $i++; ?>
    <?php endwhile; ?>
        
      </tbody>
    </table>

</div>



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>