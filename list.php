<?php
    $conn = mysqli_connect ("localhost","root","","spp");

    $tampil = "SELECT * FROM siswa";

    $hasil = mysqli_query($conn,$tampil);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<a href="input.php">Tambah Data</a><br><br>

	<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>Nis.</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Tahun Ajaran</th>
        <th>Biaya</th>
		<th>Action</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach ($hasil as $row): ?>
		<tr>
			<td><?= $i; ?></td>
			<td><?= $row['nama_siswa']; ?></td>
			<td><?= $row['kelas']; ?></td>
			<td><?= $row['tahun_ajaran']; ?></td>
            <td><?= $row['biaya']; ?></td>
			<td>
				<a href="delete.php?id=<?= $row['id_siswa'];?>">Hapus</a> |
				<a href="update.php?id=<?= $row['id_siswa'];?>">Update</a>
			</td>
		</tr>
	<?php $i++; ?>
	<?php endforeach ?>
</table>
</body>
</html>