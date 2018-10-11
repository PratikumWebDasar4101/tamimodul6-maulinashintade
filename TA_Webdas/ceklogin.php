<?php 
$db			= mysqli_connect("localhost", "root","","pendaftaran");
$username	= $_POST['username'];
$password	= $_POST['password'];
$sql		= mysqli_query($db, "SELECT * FROM pendaftaran WHERE nama = '$username' && password = '$password'");
$num		= mysqli_num_rows($sql);

if ($num == 1) {
	session_start();
	$_SESSION['username'] = $username;
	header("Location:list.php");
}else {
	//echo mysqli_error($db);
	header("Location:formlogin.php");
}

 ?>