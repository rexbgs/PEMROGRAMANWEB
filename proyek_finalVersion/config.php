<?php

//proses untuk menyambungk ke mysql
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "data_siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
// else {
//     echo" Jadi ";
// }


?>