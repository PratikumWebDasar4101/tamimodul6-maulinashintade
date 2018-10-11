<?php
require_once("db.php");
$nim         	= $_GET['nim'];
$pendaftaran  	= "SELECT * FROM pendaftaran where nim = '$nim'";
$result			= mysqli_query($conn, $pendaftaran);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$nama = $row['nama'];
		$nim = $row['nim'];
		$password = $row['password'];
		$kelas = $row['kelas'];
		$jnsKelamin = $row['jenis_kelamin'];
		$hobi = $row['hobi'];
		$fakultas = $row['fakultas'];
		$alamat = $row['alamat'];

	}
}

//function active_radio_button($value,$input){
    
    //$result =  $value==$input?'checked':'';
    //return $result;
//}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<input type="hidden" value="<?php echo $id;?>">

	<table align="center">
		<form  action="update.php" method="POST" >
			<h2 align="center">FORM EDIT</h2>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $nim; ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" value="<?php echo $password; ?>"></td>
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
				<td><input type="radio" name="jnsKelamin" value="Laki-laki">Laki-laki
					<input type="radio" name="jnsKelamin" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td><input type="checkbox" name="hobi" value="Menyanyi">Menyanyi<br>
					<input type="checkbox" name="hobi" value="Travelling">Travelling<br>
					<input type="checkbox" name="hobi" value="Berenang">Berenang<br>
					<input type="checkbox" name="hobi" value="Menari">Menari<br>
					<input type="checkbox" name="hobi" value="Menggambar">Menggambar<br>
			</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><select name="fakultas">
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
				<td><textarea rows="5" cols="40" name="alamat" value="<?php echo $alamat;?>"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Simpan Perubahan">
				</td>
			</tr>
		</form>
	</table>
</body>
</html>