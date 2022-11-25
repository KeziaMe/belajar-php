<?php

// tangkap data dari form submit
 if (isset($_POST["submit"])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $id_jurusan = $_POST['id_jurusan'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    // koneksi dg mysql
    $con = mysqli_connect("localhost","root","","fakultas");
    // cek koneksi
    if (mysqli_connect_errno()){
        echo "koneksi gagal".mysqli_connect_error();
    }else{
        echo "koneksi berhasil";
    }


    //  buat sql query untuk insert ke database
    // buat query insert dan jalankan
    $sql = "insert into mahasiswa (id_jurusan, nim, nama, jk, tempat_lahir, tgl_lahir, alamat)
            values ($id_jurusan,'$nim','$nama','$jk','$tempat_lahir','$tgl_lahir', '$alamat')";

    // jalankan query
    if (mysqli_query($con, $sql)){
        echo "Data berhasil ditambah";
    }else{
        echo "Ada error ". mysqli_error();
    }

    mysqli_close($con);
 }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <form action="" method="post">
        NIM: <input type="text" name="nim"><br>
        Nama: <input type="text" name="nama"><br>
        Id Jurusan: <input type="number" name="id_jurusan"><br>
        Jenis Kelamin: <input type="text" name="jk"><br>
        Tempat Lahir: <input type="text" name="tempat_lahir"><br>
        Tanggal Lahir (yyyy-mm-dd): <input type="text" name="tgl_lahir"><br>
        Alamat: <input type="text" name="alamat"><br>
        <button type="submit" name="submit">Tambah Data</button>
    </form>
</body>
</html>