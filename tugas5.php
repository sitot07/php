<?php 
// $_GET
$siswa = [
    [
        "nik" => "043040023",
        "nama"=> "Raisa",
        "email"=> "raisaraisa0617@gmail.com",
        "jurusan"=> "rekayasa perangkat lunak"
    ],
    [
        "nik" => "043040024",
        "nama"=> "Musdalifa",
        "email"=> "imusda733@.com",
        "jurusan"=> "rekayasa perangkat lunak"   
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
 <h1>Daftar siswa</h1>
 <ul>
 <?php foreach( $siswa as $siw ) : ?> 
    <li>
        <a href="belajar4.php?nama=<?= $siw["nama"]; ?>&nik=
        <?= $siw["nik"]; ?>&email=<?= $siw["email"]; ?>
        &jurusan=<?= $siw["jurusan"]; ?>"><?= $siw["nama"]; ?> </a>

    </li>
    <?php  endforeach; ?> 
 </ul>
</body>
</html>