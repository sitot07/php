<?php 
$siswa = [
    ["Raisa", "043210000", "Rekayasa 
   perangkat lunak", "Raisaraisa0612.@com"],
   ["Musdalifa", "043211111", "Rekayasa 
   perangkat lunak", "Musdalifaifa0123.@com"]


];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar siswa</title>
</head>
<body>
 
<h1>Daftar siswa</h1>

<?php foreach($siswa as $swa) : ?>
<ul>
    <li>Nama : <?= $swa[0]; ?></li>
    <li>Nik : <?= $swa[1]; ?></li>
    <li>Jurusan : <?= $swa[2]; ?></li>
    <li>Email : <?= $swa[3 ]; ?></li>
</ul>
<?php endforeach; ?>


</body>
</html>