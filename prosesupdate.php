<?php 

// koneksi ke db
$conn = mysqli_connect("localhost", "root", "", "spp");

// ambil data dari tampilan
$id = $_GET['id'];
$nis = $_GET['nis']
$nama =$_GET['nama'];
$kelas =$_GET['kls'];
$ta = $_GET['ta'];
$biaya = $_GET['by'];

$update = "UPDATE siswa SET id_siswa = '$id',nis = '$nis',
			nama_siswa = '$nama', kelas = '$kelas',
			tahun_ajaran = '$ta',biaya = '$biaya' WHERE id_siswa = '$id' ";

$hasil = mysqli_query($conn, $update);


if ($hasil) {
	echo "location:list.php";
} else {
	echo "GAGAL UPDATE";
}

?>