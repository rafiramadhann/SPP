<?php
//koneksi
$conn = mysqli_connect ("localhost","root","","spp");

$nis = $_GET['nis'];
$nama = $_GET['nama'];
$kelas = $_GET['kls'];
$ta = $_GET['ta'];
$biaya = $_GET['by'];

$input = "INSERT INTO siswa(nis,nama_siswa,kelas,tahun_ajaran,biaya)
VALUES('$nis','$nama','$kelas','$ta','$biaya')";

$hasil = mysqli_query($conn,$input);

if ($hasil) {
	header("location: list.php");
}else{
	echo "Data gagal dimasukkan";
}

?>