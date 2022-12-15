<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <section>
        <nav class="navbar justify-content-between navbar-dark bg-primary">
            <div class="d-flex justify-content-start">
                <a class="navbar-brand" href="#"></a>
                <a class="navbar-brand" href="#"></a>
                <a href="#" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Home</a>
                <a href="#" class="btn btn-primary btn-lg " role="button" aria-disabled="true">MyCar</a>
            </div>
            <div align="right">
                <a href="{{ url('showroom/create')}}" class="btn btn-outline-light " role="button" aria-disabled="true">Tambah Mobil</a>
                <a href="logout.php" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Logout</a>
                <a class="navbar-brand" href="#"></a>
            </div>
        </nav>
    </section>
<br>
<br>
<table align="center" width="80%">
    @foreach($datas as $key=>$value)
    <tr align="center" >
        <td>
            <div class="card" style="width: 25rem;">
            <img style="width: 25rem;" src="https://i.pinimg.com/550x/42/64/14/426414c97264657bebb33d11a0205c04.jpg">
            <div class="card-body">
                <h5 class="card-title">{{ $value->nama }}</h5>
                <p class="card-text">{{ $value->description }}</p>
            </div>
                <table align="center">
                    <tr>
                        <td><form action="detail.php" method="post">
                                <input type="hidden" name="id" value="">
                                <input type="submit" name="detail" class="btn btn-primary" value="Edit" style="color:white">
                        </td></form>
                        <td><form action="{{url('showroom/'.$value->id)}}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" name="delete" class="btn btn-danger" style="color:white">Delete</button>
                        </td></form>
                    </tr>
                </table>
                </div>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
    