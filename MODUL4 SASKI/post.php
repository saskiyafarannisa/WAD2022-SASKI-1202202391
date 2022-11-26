<?php

include "config.php";
if (isset($_POST["submit"])){

    $nama_mobil = $_POST['nama_mobil'];
    $pemilik_mobil = $_POST['pemilik_mobil'];
    $merk = $_POST['merk'];
    $tanggal_beli = $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];
    $status_pembayaran = $_POST['status_pembayaran'];


    $pname = rand()."-".$_FILES["foto_mobil"]["name"];

    $tname = $_FILES["foto_mobil"]["tmp_name"];

    $upload_dir = 'images/';

    move_uploaded_file($tname, $upload_dir.$pname);

    $sql = "INSERT INTO tabelmodul3 (nama_mobil, pemilik_mobil, merk, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$nama_mobil', '$pemilik_mobil', '$merk', '$tanggal_beli', '$deskripsi', '$pname', '$status_pembayaran')";
    if(mysqli_query($connect,$sql)){
        echo "<script>alert('Data Berhasil Ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=mycar.php'>";
    }
}

?>