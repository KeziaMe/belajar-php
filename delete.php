<?php

// tangkap data dari form submit
 if (isset($_GET["id"])){
    $id = $_GET['id'];

    // koneksi dg mysql
    $con = mysqli_connect("localhost","root","","fakultas");
    // cek koneksi
    if (mysqli_connect_errno()){
        echo "koneksi gagal".mysqli_connect_error();
    }else{
        echo "koneksi berhasil";
    }

    $query = "SELECT * FROM mahasiswa where id=3";

    //  buat sql query untuk delete ke database
    // buat query delete dan jalankan
    $sql = "DELETE FROM mahasiswa WHERE id=$id";

    // jalankan query
    if (mysqli_query($con, $sql)){
        echo "Data berhasil dihapus";
    }else{
        echo "Ada error ". mysqli_error($con);
    }

    mysqli_close($con);
 }
    
?>