<?php 
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index,yang di mulai dari 0

// membuat array 
// cara satu
$hari =array("senin", "selasa", "rabu");
// cara dua
$bulan =["januari", "februari", "maret"];
$arrl =[123,"angka", false];

// menampilkan array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);


// menampilkan 1 elemen pada array
echo $arrl[0];
echo "<br>";
echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
echo "<br>";
var_dump($hari);

var_dump($hari);
$hari[] = "jumat";
echo "<br>";
var_dump($hari);


?>