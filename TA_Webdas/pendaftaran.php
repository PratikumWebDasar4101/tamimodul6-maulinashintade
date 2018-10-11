<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="submit.php" method="post">
	<table align="center">
		<center><h2>Pendaftaran</h2></center><br>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="D3MI-41-01">D3MI-41-01<br>
			<input type="radio" name="kelas" value="D3MI-41-02">D3MI-41-02<br>
			<input type="radio" name="kelas" value="D3MI-41-03">D3MI-41-03<br>
			<input type="radio" name="kelas" value="D3MI-41-04">D3MI-41-04
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
			<input type="radio" name="jnsKelamin" value="Laki-laki">Laki-laki
			<input type="radio" name="jnsKelamin" value="Perempuan">Perempuan
			</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td>
			<input type="checkbox" name="hobi" value="Menyanyi">Menyanyi<br>
			<input type="checkbox" name="hobi" value="Travelling">Travelling<br>
			<input type="checkbox" name="hobi" value="Berenang">Berenang<br>
			<input type="checkbox" name="hobi" value="Menari">Menari<br>
			<input type="checkbox" name="hobi" value="Menggambar">Menggambar<br>
			</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td>
				<select name="fakultas">
					<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
					<option value="Fakultas Informatika">Fakultas Informatika</option>
					<option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
					<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="Daftar"></td>
		</tr>
	</table>
</form>
</body>
</html>