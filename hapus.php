<?php 

include_once("koneksi.php");

$id = $_GET["id"];


mysqli_query($conn, "DELETE FROM data_warga WHERE id = $id");

echo "<script>alert('data berhasil dihapus')
document.location.href = 'index.php'
</script>";

?>