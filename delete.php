<?php 

require_once("koneksi.php");

// mendapatkan data Id_Barang
if (isset($_GET["id_barang"])) $id_barang = $_GET["id_barang"];
else {
	echo "ID tidak ditemukan! <a href='latihan.php'>Kembali</a>";
	exit();
}

$query = "DELETE FROM barang WHERE id_barang = '{$id_barang}'";

$result = mysqli_query($mysqli, $query);

if ( ! $result ) {
	exit("Gagal menghapus data!");
}

header("Location: latihan.php");

?>