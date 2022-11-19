<?php

include "config.php";
if (isset($_POST["update"])){
    $id = $_POST['id'];

    $nama = $_POST['nama_mobil'];
    $pemilik = $_POST['pemilik_mobil'];
    $merk_mobil = $_POST['merk'];
    $tanggal = $_POST['tanggal_beli'];
    $deskripsi_mobil= $_POST['deskripsi'];
    $status = $_POST['status_pembayaran'];


    $pname = rand()."-".$_FILES["foto_mobil"]["name"];

    $tname = $_FILES["foto_mobil"]["tmp_name"];

    $upload_dir = 'images/';

    move_uploaded_file($tname, $upload_dir.$pname);

    $sql = "UPDATE tabelmodul3 SET nama_mobil='$nama', pemilik_mobil='$pemilik', merk='$merk_mobil', tanggal_beli='$tanggal', deskripsi='$deskripsi_mobil', foto_mobil='$pname', status_pembayaran='$status' WHERE id_mobil='$id' ";
    if(mysqli_query($connect,$sql)){
        echo "<script>alert('Data Berhasil DiUpdate')</script>";
        echo "<meta http-equiv='refresh' content='1 url=mycar.php'>";
    }
}

?>