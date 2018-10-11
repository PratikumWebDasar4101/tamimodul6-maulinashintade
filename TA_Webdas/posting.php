<?php
session_start();
require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tulis Cerita</title>
</head>
<body>
    <h2 align="center">Tulis Cerita</h2>
    <form action="post.php" method="post" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td><h3>Judul</h3></td>
            </tr>
            <tr>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td><input type="file" name="gambar" id="gambar"></td>
            </tr>
            <tr>
                <td><cite>Isi harus lebih dari 20 karakter.</cite></td>
            </tr>
            <tr>
                <td><textarea name="isi" id="" cols="80" rows="20"></textarea></td>
            </tr>
            <tr>
                <input type="hidden" name="nim" value="<?php echo $_SESSION["nim"] ?>">
                <td><input type="submit" name="submit" value="Posting"></td>
            </tr>
        </table>
    </form>
</body>
</html>