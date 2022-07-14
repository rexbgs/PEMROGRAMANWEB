<?php
    include("config.php");

    if( isset($_GET['id']) ){

        //ambil id dari query
        $id = $_GET['id'];

        //buat query hapus
        $sql = "DELETE FROM calonsiswa WHERE id=$id";
        $query = mysqli_query($db, $sql);

        //apakah query berhasil dihapus?
        if( $query ){
            header('Location: list-siswa.php');
        } else {
            die("gagal menghapus . . .");
        }

    }else{
        die("Access Denied ! ! ! ");
    }
?>