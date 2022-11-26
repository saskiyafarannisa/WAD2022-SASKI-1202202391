<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <title>WAD2022 SASKI 1202202391</title>
</head>
<body>
    <section>
        <nav class="navbar fixed-top justify-content-between navbar-dark bg-primary">
            <div class="d-flex justify-content-start">
                <a class="navbar-brand" href="#"></a>
                <a class="navbar-brand" href="#"></a>
                <a href="index.php" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Home</a>
                <a href="#" class="btn btn-primary btn-lg " role="button" aria-disabled="true">MyCar</a>
            </div>
            <div align="right">
                <a href="form.php" class="btn btn-outline-light " role="button" aria-disabled="true">Tambah Mobil</a>
                <a href="logout.php" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Logout</a>
                <a class="navbar-brand" href="#"></a>
            </div>
        </nav>
    </section>
<br>
<br>
<br>
<table width="80%" align="center">
    <tr>
        <td><h2>My Show Room</h2></td>
    </tr>
    <tr>
        <td style="color:grey;">List Show Room Saskiya Farannisa - 1202202391</td>
    </tr>
<?php
    
    include "config.php";
    $no=1;
    $getdata = mysqli_query($connect, "SELECT * FROM tabelmodul3");
    while ($tampil = mysqli_fetch_array($getdata)){
?>

    <tr>
        <td><br></td>
    </tr>
    <tr align="center">
    <td><div class="card" style="width: 25rem;">
    
        <img style="width: 25rem;" src="images/<?php echo $tampil['foto_mobil']; ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $tampil['nama_mobil'] ?></h5>
            <p class="card-text"><?php echo $tampil['deskripsi'] ?></p>
            <table>
                <tr>
                    <td><form action="detail.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $tampil['id_mobil'] ?>">
                            <input type="submit" name="detail" class="btn btn-primary" value="Detail" style="color:white">
                    </td></form>
                    <td><form action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $tampil['id_mobil'] ?>">
                            <input type="submit" name="delete" class="btn btn-danger" value="Delete" style="color:white">
                    </td></form>
                </tr>
            </table>
        </div>
    </div></td>
    </tr>
    <?php
        $no++;
    }
    ?> 
</table>
   
</body>
</html>