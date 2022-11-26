<?php
session_start();
include 'config.php';
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($connect, "SELECT * FROM wad_modul4 WHERE id_user = '$username'");

    $ngecek = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    if($ngecek > 0){
        if($password == $row['password_user']){
            $_SESSION["id_user"] = $username;
            $_SESSION['status'] = "login";
            header("location: index.php");
        }
        else{
        echo "<script> alert('Wrong Password'); </script>";
        echo "<meta http-equiv='refresh' content='1 url=loginForm.php'>";
        }

    } else{
        echo "<script> alert('User Not Registered'); </script>";
        echo "<meta http-equiv='refresh' content='1 url=loginForm.php'>";
    }
}
?>