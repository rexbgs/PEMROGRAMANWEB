<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    // buat query
    $sql = "INSERT INTO calonsiswa (nama, alamat, jenis_kelamin, agama) VALUE ('$nama', '$alamat', '$jk', '$agama')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: data.php?status=success');

    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: data.php?status=denied');
    }


} else {
    die("Akses dilarang...");
}

?>