<?php 
require_once("db.php");

//$id				= $_POST['id'];
$nama			= $_POST['nama'];
$nim			= $_POST['nim'];
$password		= $_POST['password'];
$kelas			= $_POST['kelas'];
$jnsKelamin		= $_POST['jnsKelamin'];
$hobi			= $_POST['hobi'];
$fakultas		= $_POST['fakultas'];
$alamat			= $_POST['alamat'];

$sql = "UPDATE pendaftaran SET nama='$nama', nim='$nim', password='$password', kelas='$kelas', jenis_kelamin='$jnsKelamin', hobi='$hobi', fakultas='$fakultas', alamat='$alamat' WHERE nim='$nim'";


if (mysqli_query($conn, $sql)){
	echo "Berhasil Update";
	//header("Location: list.php");
}else{
	echo "Error" . $sql . "<br>" . mysqli_error($conn);
}
//header("location:list.php");

 ?>