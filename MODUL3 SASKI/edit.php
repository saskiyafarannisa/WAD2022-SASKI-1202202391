<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <title>WAD2022 SASKI 1202204094</title>
</head>
<?php
    
include "config.php";

if(isset($_POST['edit'])){
$id = $_POST['id'];}
$query = mysqli_query($connect, "SELECT * FROM tabelmodul3 WHERE id_mobil = $id");
?>

<body>
<section>
        <nav class="navbar fixed-top justify-content-between navbar-dark bg-primary">
            <div class="d-flex justify-content-start">
                <a class="navbar-brand" href="#"></a>
                <a class="navbar-brand" href="#"></a>
                <a href="index.php" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Home</a>
                <a href="mycar.php" class="btn btn-primary btn-lg " role="button" aria-disabled="true">MyCar</a>
            </div>
        </nav>
    </section>
    <br>
    <br>
    <br>
    <br>
<table width="80%" align="center">
    <?php 
    if($query){
        while($data = mysqli_fetch_assoc($query)){ ?>

        <td colspan="2"><h2><?php echo $data['nama_mobil'] ?></h2></td>
    </tr>
    <tr>
        <td colspan="2" style="color:grey;">Edit <?php echo $data['nama_mobil'] ?></td>
    </tr>
    <tr>
        <td><img style="width: 23rem;" src="images/<?php echo $data['foto_mobil']; ?>"></td>
        <td>
            <form action="update.php" method="post" enctype="multipart/form-data"> 
            <div class="form-group">
                <label for="InputNamaMobil"><h6>Nama Mobil</h6></label>
                <input type="name" class="form-control" id="nama" name="nama_mobil" value="<?php echo $data['nama_mobil'] ?>">
            </div>
            <div class="form-group">
                <label for="InputNamaPemilik"><h6>Nama Pemilik</h6></label>
                <input type="name" class="form-control" id="pemilik_mobil" name="pemilik_mobil" value="<?php echo $data['pemilik_mobil'] ?>">
            </div>
            <div class="form-group">
                <label for="InputMerk"><h6>Merk</h6></label>
                <input type="name" class="form-control" id="merk" name="merk" value="<?php echo $data['merk'] ?>">
            </div>
            <div class="form-group">
                <label for="InputTanggal"><h6>Tanggal Beli</h6></label>
                <input type="date" id="start" name="tanggal_beli" class="form-control"
                value="<?php echo $data['tanggal_beli'] ?>"
                min="2022-01-01" max="2022-12-31">
            </div>
            <div class="form-group">
                <label for="exampleFormControlatextarea1"><h6>Deskripsi</h6></label>
                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"><?php echo $data['deskripsi'] ?>"
                </textarea>
            </div>
            <div class="form-group">
                <label class="form-label" for="customFile"><h6>Foto</h6></label>
                <input type="file" class="form-control" id="foto_mobil" name="foto_mobil" required="required" value="<?php echo $data['foto_mobil'] ?>">
            </div>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_pembayaran" id="inlineRadio1" value="Lunas">
                <label class="form-check-label" for="inlineRadio1">Lunas</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_pembayaran" id="inlineRadio1" value="Belum Lunas">
                <label class="form-check-label" for="inlineRadio1">Belum Lunas</label>
            </div>
            <br>
            <br>
            <div>
                <input type="hidden" name="id" value="<?php echo $data['id_mobil'] ?>">
                <input type="submit" name="update" class="btn btn-primary" value="Update" style="color:white">
            </div>
            </form>
    <?php
        }
    }
    ?>
    <tr>
        </td>
    </tr>
</table>
<br>
<br>
</body>
</html>
