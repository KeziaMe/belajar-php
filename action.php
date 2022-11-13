<?php
// echo $_GET['nama'];
// echo "<br/>";
// echo $_GET['password'];

// if (isset ($_GET['p']) && $_GET['p'] == 'tampil') {
    if (isset($_GET['p'])) {
    if ($_GET['p'] == 'tampil') {

        // if(!empty($_POST['nama'])){
        echo $_POST['nama'];
        echo "<br/>";
        echo $_POST['password'];
        // if(!empty($_POST['password'])){
        //     echo $_POST['password'];
        // }

// } else {
//     echo "Anda tidak boleh mengakses halaman ini";
// }

// echo $_GET['q'];

    } else if ($_GET['p'] == "pesan") {
        echo "Hai...".$_POST['nama'];
        echo "<br/>";
        echo "Password anda adalah ".$_POST['password'];
    } else if ($_GET['p'] == "aman") { //tambahan error

        if (!empty( $_POST['nama'])) {
            echo $_POST['nama'];
        } else {
            echo "nama belum dimasukan";
        }
        echo "<br/>";
        if (!empty( $_POST['password'])) {
            echo $_POST['password'];
        } else {
            echo "password masih kosong"; 
        }
    } else if ($_GET['p'] == "gambar") {
        $size = getimagesize($_FILES['berkas']['tmp_name']);
        $image = "data:".$size['mime'].";base64,".
                base64_encode(file_get_contents($_FILES['berkas']['tmp_name']));

        echo "<image src='".$image."' width='720'>";
    }

// else {
//     echo "Anda tidak boleh mengakses halaman ini";
// }
} else {
        echo "Anda tidak boleh mengakses halaman ini";
}