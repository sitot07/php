(<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root","", "
    phpdasar");

function query($query) {
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysql_fetch_assoc($result) ) {
       $rows[] = $row; 
    }
    return $rows;
}


?>
