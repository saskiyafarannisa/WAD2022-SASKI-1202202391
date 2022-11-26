<?php
include 'config.php';
if(!empty($_SESSION["id_user"])){
  header("Location: index.php");
}
if(isset($_POST["register"])){
  $name = $_POST["nama_user"];
  $username = $_POST["id_user"];
  $email = $_POST["email_user"];
  $no_hp = $_POST['nohp_user'];
  $password = $_POST["password_user"];
  $confirmpassword = $_POST["repassword"];
  $duplicate = mysqli_query($connect, "SELECT * FROM wad_modul4 WHERE id_user = '$username' OR email_user = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo "<script> alert('Username or Email Has Already Taken'); </script>";
    echo "<meta http-equiv='refresh' content='1 url=register.php'>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO wad_modul4 (id_user, nama_user, email_user, password_user, nohp_user) VALUES ('$username', '$name', '$email', '$password', '$no_hp')";
      mysqli_query($connect, $query);
      echo "<script> alert('Registration Successful'); </script>";
      echo "<meta http-equiv='refresh' content='1 url=loginForm.php'>";
    }
    else{
      echo "<script> alert('Password Does Not Match'); </script>";
      echo "<meta http-equiv='refresh' content='1 url=register.php'>";
    }
  }
}
?>


<!doctype html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <title>WAD2022 SASKI 1202202391</title>

</head>

<body>

<table width="100%">
    <tr>
        <td width="50%"><img src="https://i.pinimg.com/736x/7a/d2/1f/7ad21f50f44011466df88bbff6d287a3.jpg" height="700px" width="650px"></td>
        <td width="50%">
            <table width="85%" height="90%" valign="center" align="center">
                <tr>
                    <td>
                        <h2>Register</h2>
                        <br>
                        <form class="" action="" method="post" autocomplete="off"> 
                        <div class="form-group">
                            <label for="InputNamaMobil">Email</label>
                            <input type="email_user" class="form-control" id="email" name="email_user">
                        </div>
                        <div class="form-group">
                            <label for="InputNamaMobil">Username</label>
                            <input type="email_user" class="form-control" id="id_user" name="id_user">
                        </div>
                        <div class="form-group">
                            <label for="InputNamaPemilik">Nama</label>
                            <input type="nama_user" class="form-control" id="nama" name="nama_user">
                        </div>
                        <div class="form-group">
                            <label for="InputMerk">Nomor Handphone</label>
                            <input type="name" class="form-control" id="no_hp" name="nohp_user">
                        </div>
                        <div class="form-group">
                            <label for="InputMerk">Password</label>
                            <input type="name" class="form-control" id="password" name="password_user" onkeyup="check();" required>
                        </div>
                        <div class="form-group">
                            <label for="InputMerk">Konfirmasi Password</label>
                            <input type="name" class="form-control" id="repassword" name="repassword" onkeyup="check();" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" name="register">Register</button>
                        <br>
                        <br>
                        <p>Already have an account?<a href="loginForm.php">Login</a></p>
                        </form>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>

</html>