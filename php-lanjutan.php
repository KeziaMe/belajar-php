<?php

// $nama = "Kezia";

// echo "$nama <br>";
// echo "$nama <br>";
// echo "$nama <br>";
// echo "$nama <br>";

// perulangan
// $no = 10;

// for ($i=0; $i<$no; $i++){
//     $n = $i+1;
//     echo $n." ".$nama."<br>";
// }

// while

// $no = 10;
// $i = 0;

// while ($i<$no){
//     $n = $i+1;
//     echo $n. " ".$nama."<br>";
//     $i++;
// }

// do while

// $no = 10;
// $i = 0;
// do {
//     $n = $i+1;
//     echo $n. " ".$nama."<br>";
//     $i++;
// } while ($i < $no)

// foreach
// $data = array("Brio","Honda","Nissan","Suzuki","Mazda");

// echo $data[3];
// foreach($data as $value) {
//     echo $value."<br>";
// }

// percabangan
// if else
// $nama = "Kezia";

// if ($nama == "Kezia") {
//     echo $nama." adalah nama saya";
// } else {
//     echo $nama." adalah bukan nama saya ";
// }

// switch
// $nama = "Kezia";

// switch ($nama) {
//     case "Kezia";
//     $pesan = $nama." adalah nama saya";
//     break; 
//     default;
//     $pesan = $nama." adalah bukan nama saya ";
// }   
// echo $pesan;

// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Kezia":
                    $pesan = $_POST['nama']." adalah nama saya";
                break;
                case "Mega":
                    $pesan = $_POST['nama']." bukan nama saya";
                break;
                default:
                    $pesan = $_POST['nama']." siapa ya?";
            
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Anda belum input nama dan jumlah.";
        }
    ?>
</body>
</html>