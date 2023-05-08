<?php 
require'funtions.php';

$siswa= query("SELECT * FROM mahasiswa");
?>


// koneksi ke database
$conn = mysqli_connect("localhost", "root","", "phpdasar!!");

// ambil data dari table siswa / query data siswa
$result = mysqli_query($conn, "SELECT * FROM siswa");

// ambil data (fetch) siswa dari object result
// mysql_fetch_row() //mengembalikan array numerik
// mysql_fetch_assoc() //mengembalikan array associative
// mysql_fetch_array() //mengembalikan array keduanya
// mysql_fetch_object() 
 
// while($siw = mysqli_fetch_assoc($result) ) {
//  var_dump($siw);
// }


?>
<!DOCTYPE html>
<html>
<head>
    <title>halaman admin</title>
</head>
<body>

<h1>daftar siswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

   <tr>
       <th>no.</th>
       <th>aksi</th>
       <th>gambar</th>
       <th>NIK</th>
       <th>nama</th>
       <th>email</th>
       <th>jurusan</th>
 </tr>

 <?php $i = 1; ?>
 <?php foreach( $siswa as $row) : ?>
 <tr>
    <td><?= $i; ?></td>
    <td>
        <a href="">ubah</a>
        <a href="">hapus</a>
    </td> 
    <td><img src=""></td>
    <td><?= $row["NIK"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>

<table>
</body>
</html>