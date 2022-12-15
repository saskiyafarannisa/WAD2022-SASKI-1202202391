<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <title>SASKI CREATE MODUL5</title>
</head>
<body>
    <section>
        <nav class="navbar justify-content-between navbar-dark bg-primary">
            <div class="d-flex justify-content-start">
                <a class="navbar-brand" href="#"></a>
                <a class="navbar-brand" href="#"></a>
                <a href="{{ url('showroom')}}" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Home</a>
                <a href="#" class="btn btn-primary btn-lg " role="button" aria-disabled="true">MyCar</a>
            </div>
        </nav>
    </section>
    <div class="container mt-5" style="width:80%">
        <h2>Tambah Mobil</h2>
        <p style="color:grey;">Tambah Mobil baru anda di list Show Room</p>
        <br>
        <form action="{{ url('showroom')}}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="form-group">
            <label for="InputNamaMobil"><h6>Nama Mobil</h6></label>
            <input type="name" class="form-control" id="nama" name="nama_mobil">
        </div>
        <div class="form-group">
            <label for="InputNamaPemilik"><h6>Nama Pemilik</h6></label>
            <input type="name" class="form-control" id="pemilik_mobil" name="pemilik_mobil">
        </div>
        <div class="form-group">
            <label for="InputMerk"><h6>Merk</h6></label>
            <input type="name" class="form-control" id="merk" name="merk">
        </div>
        <div class="form-group">
            <label for="InputTanggal"><h6>Tanggal Beli</h6></label>
            <input type="date" id="start" name="tanggal_beli" class="form-control"
             value="------"
             min="2022-01-01" max="2022-12-31">
        </div>
        <div class="form-group">
            <label for="exampleFormControlatextarea1"><h6>Deskripsi</h6></label>
            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi">
            </textarea>
        </div>
        <div class="form-group">
            <label class="form-label" for="customFile"><h6>Foto</h6></label>
            <input type="file" class="form-control" id="foto_mobil" name="foto_mobil" required="required">
        </div>
        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status_pembayaran" id="inlineRadio1" value="Lunas">
            <label class="form-check-label" for="inlineRadio1">Lunas</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status_pembayaran" id="inlineRadio2" value="Belum Lunas">
            <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>
</body>
</html>