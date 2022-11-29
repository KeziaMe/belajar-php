<?php

if (isset($_GET['id'])){

$id = $_GET['id'];

// koneksi dg mysql
$con = mysqli_connect("localhost","root","","fakultas");
// cek koneksi
if (mysqli_connect_errno()){
    echo "koneksi gagal".mysqli_connect_error();
}else{
    echo "koneksi berhasil";
}

// membaca data dari table mysql
$query = "SELECT * FROM mahasiswa WHERE id=$id" ;

// tampilkan data dg menjalankan sql query
$result = mysqli_query($con,$query);
$mahasiswa = [];
if ($result){
    // $row = mysqli_fetch_assoc($result);
    // var_dump($row);
    // echo $row["nama"];
    // echo $row["alamat"];

    while($row = mysqli_fetch_assoc($result)){
        // echo "<br>".$row["nama"];
        // var_dump ($row);
        $mahasiswa = $row;
    }
    mysqli_free_result($result);
}

// tutup koneksi mysql
mysqli_close($con);

// foreach($mahasiswa as $value){
//     echo $value["nama"];
// }

// tangkap data dari form submit

}

if (isset($_POST["submit"])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $id_jurusan = $_POST['id_jurusan'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $id = $_POST['id'];

    // koneksi dg mysql
    $con = mysqli_connect("localhost","root","","fakultas");
    // cek koneksi
    if (mysqli_connect_errno()){
        echo "koneksi gagal".mysqli_connect_error();
    }else{
        echo "koneksi berhasil";
    }

    $query = "SELECT * FROM mahasiswa where id=$id";

    //  buat sql query untuk insert ke database
    // buat query insert dan jalankan
    $sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', id_jurusan='$id_jurusan', 
    tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat' WHERE id=$id ";

    // jalankan query
    if (mysqli_query($con, $sql)){
        echo "Data berhasil diubah";
    }else{
        echo "Ada error ". mysqli_error($con);
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
    <title>Update Data Mahasiwa</title>
</head>
<body>
    <h1>Update Data Mahasiswa</h1>
    <?php //var_dump($mahasiswa); ?>
<form action="update.php" method="post">
        NIM: <input type="text" name="nim" value = "<?php echo $mahasiswa['nim']?>"><br>
        Nama: <input type="text" name="nama" value = "<?php echo $mahasiswa['nama']?>"><br>
        Id Jurusan: <input type="number" name="id_jurusan" value = "<?php echo $mahasiswa['id_jurusan']?>"><br>
        Jenis Kelamin: <input type="text" name="jk" value = "<?php echo $mahasiswa['jk']?>"><br>
        Tempat Lahir: <input type="text" name="tempat_lahir"value = "<?php echo $mahasiswa['tempat_lahir']?>"><br>
        Tanggal Lahir (yyyy-mm-dd): <input type="text" name="tgl_lahir" value = "<?php echo $mahasiswa['tgl_lahir']?>"><br>
        Alamat: <input type="text" name="alamat" value = "<?php echo $mahasiswa['alamat']?>"><br>
        <input type="number" name="id" value="<?php echo $mahasiswa['id'] ?>" hidden>
        <button type="submit" name="submit" >Tambah Data</button>
    </form>
</body>
</html>