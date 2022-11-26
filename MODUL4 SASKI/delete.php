<?php
include "config.php";
$getdata = mysqli_query($connect, "SELECT * FROM tabelmodul3");
$tampil = mysqli_fetch_array($getdata);

if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $query = "DELETE FROM tabelmodul3 WHERE id_mobil='$id'";
    $query_run = mysqli_query($connect, $query);

    if($query_run){
        echo "<script>alert('Data Berhasil Dihapus')</script>";
        echo "<meta http-equiv='refresh' content='1 url=mycar.php'>";
    }else{
        echo "<script>alert('Data Tidak Berhasil Dihapus')</script>";
        echo "<meta http-equiv='refresh' content='1 url=mycar.php'>";
    }
}

?>