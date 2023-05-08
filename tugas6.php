<!DOCTYPE html>
<html>
<head>
    <title>POST</title>
</head>
<body>
<?php if(isset($_POST["submit"]) ) : ?> 
     <h1>Halo, selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

<from action="latihan2.php" method="POST"> 
    Masukan nama :
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">kirim</button>
</body>
</html>