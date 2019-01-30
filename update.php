<?php 

$conn = mysqli_connect("localhost", "root", "", "spp");

$id = $_GET['id'];

$tampil = "SELECT * FROM siswa WHERE id_siswa = '$id' ";

$hasil = mysqli_query($conn, $tampil);

$data = mysqli_fetch_array($hasil);

$nis = $data['nis'];
?>

<form action="prosesupdate.php" method="GET">
    <label for="">NIS:</label><br>
    <input type="text" name="nis" value="<?= $data['nis']; ?>"><br>
	<label for="">Nama: </label> <br>
	<input type="text" name="nama" value="<?= $data['nama_siswa']; ?>"> <br>
	<label for="">Kelas</label><br>
	<input type="text" name="kls"value="<?= $data['kelas']; ?>">
	<br>
	<label for="">Tahun Ajaran</label><br>
	<input type="text" name="ta" value="<?= $data['tahun_ajran']; ?>"><br>
    biaya:<br>
    <input type="text" name="by"value="<?= $data['biaya']; ?>"><br>
    <input type="hidden" name="id" value="<?= $data['id_siswa'] ?>">
	<input type="submit" value="kirim">
</form>