<?php
require_once("db.php");

$nama       	= $_POST['nama'];
$nim        	= $_POST['nim'];
$password		= $_POST['password'];
$kelas  		= $_POST['kelas'];
$jnsKelamin	= $_POST['jnsKelamin'];
$hobi			= $_POST['hobi'];
$fakultas		= $_POST['fakultas'];
$alamat			= $_POST['alamat'];



$sql = "INSERT INTO pendaftaran(nama, nim, password, kelas, jenis_kelamin, hobi, fakultas, alamat) 
	VALUES ('$nama','$nim','$password','$kelas','$jnsKelamin','$hobi','$fakultas','$alamat')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
echo "<a href='formlogin.php'>Silahkan Login</a>";
?> 