<?php 
// cek apakah tidak ada data di $_GET 
if( !isset($_GET["nama"]) 
   || !isset($_GET["nik"])
   || !isset($_GET["email"])
   || !isset($_GET["jurusan"]) ) {
    //redirect
     header("Location: tugas5.php");
     exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail siswa</title>
</head>
<body>
   
<u1>
    <!-- <li><img src="img/Raisa.jpeg"></li> -->
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nik"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
</ul>

<a href="tugas5.php">kembali ke daftar siswa </a>
</body>
</html>