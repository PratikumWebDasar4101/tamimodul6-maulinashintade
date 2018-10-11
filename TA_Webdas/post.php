<?php
session_start();
require_once("db.php");

$judul = $_POST["judul"];
$isi = $_POST["isi"];
$gambar = $_FILES["gambar"];
$nim = $_POST["nim"];
$dir = "uploads/";
$img_name = $gambar["name"];
$img_tmp = $gambar["tmp_name"];
$target_file = $dir . $img_name;

if (move_uploaded_file($img_tmp, $target_file)) {

    $sql = "INSERT INTO posting VALUES('','$judul','$isi','$img_name','$nim')";

    if (mysqli_query($conn, $sql)) {
        echo "Berhasil menambahkan posting";
    }else {
        echo "Gagal";
    }
}else {
    echo "Gagal Upload";
}
