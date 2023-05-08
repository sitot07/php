<?php 
// $_GET
// $_GET["nama"] = "Raisa";
// $_GET["nik"] = "043040023";
// var_dump{$_GET};
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
 <?php foreach( $siswa as $ms ) : ?> 
     <ul>
        <li><img src="img/<?= $ms["gambar"] ; ?>"></li>
     </ul>  
     <?php endforeach; ?>
</body>
</html