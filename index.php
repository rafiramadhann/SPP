<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>LOGIN</h2><br>
	<?php
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan']=="gagal") {
				echo "Login Gagal!";
			}elseif ($_GET['pesan']=="logout") {
				echo "Anda Berhasl Log-Out";
			}elseif ($_GET['pesan']=="belum_login") {
				echo "Anda Harus Login Doloe";
			}
		}
	?>
	<br>
	<br>
	<form method="post" action="halaman_">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>
	</form>
</body>
</html>