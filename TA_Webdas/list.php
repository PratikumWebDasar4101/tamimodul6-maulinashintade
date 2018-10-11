<?php
require_once("db.php");
?>
<table border=1>
    <thead>
        <th>Nama</th>
        <th>NIM</th>
        <th>Kelas</th>
        <th>Jenis Kelamin</th>
        <th>Hobi</th>
        <th>Fakultas</th>
        <th>Alamat</th>
        <th>Action</th>
    </thead>
    <tbody>
<?php
session_start();
$username   = $_SESSION['username'];
$conn       = new mysqli("localhost", "root","","pendaftaran");
$sql        = "SELECT * FROM pendaftaran WHERE nama = '$username'";
$result     = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        $nim = $row['nim'];
        echo "<tr>";
        echo "<td>" . $row["nama"]. "</td>"; 
        echo "<td>" . $row["nim"]. "</td>";
        echo "<td>" . $row["kelas"]. "</td>";
        echo "<td>" . $row["jenis_kelamin"]. "</td>";
        echo "<td>" . $row["hobi"]. "</td>";
        echo "<td>" . $row["fakultas"]. "</td>";
        echo "<td>" . $row["alamat"]. "</td>";
        echo "<td>"."<a href='edit.php?nim=$nim'>Edit</a>". " &nbsp; <a href='posting.php?nim=$nim'>Posting</a>"."</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?> 
    </tbody>
</table>