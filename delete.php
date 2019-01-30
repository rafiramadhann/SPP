<?php 

$conn = mysqli_connect("localhost", "root", "", "spp");

$id = $_GET['id'];

$hasil = mysqli_query($conn, "DELETE FROM siswa WHERE id_siswa = '$id' ");

if ($hasil) {
	echo "DATA TERHAPUS";
}else{
	echo "data gagal dihapus";
}
?>