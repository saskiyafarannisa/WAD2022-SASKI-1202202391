<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>WAD2022 SASKI 1202204094</title>
</head>
<body>
    <?php
    $carImg = array(
        "./img/rush.png",
        "./img/ayla.png",
        "./img/brio.png"
    );

    $desCar = array(
        array("Toyota Rush", 200000, "7 Kursi" , "1500 CC", "Manual"),
        array("Toyota Ayla", 150000, "5 Kursi" , "1200 CC", "Manual"),
        array("Honda Brio", 150000, "5 Kursi" , "1200 CC", "Automatic")
    );
    
    ?>


    <section>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container justify-content-center">
                <a class="navbar-brand" href="saski_home.php">Home</a>
                <a class="navbar-brand" href="saski_booking.php">Booking</a>
            </div>
        </nav>
    </section>

    <section>
        <div class="text-center">
            <h4>WELCOME TO EAD RENT <br></h4>
            <p>Find your best deal, here!</p>
        </div>
    </section>

    <section >
        <div class="container mt-3">
            <form action="saski_booking.php" method="GET">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img src="<?= $carImg[0]?>" class="card-img-top" alt="Toyota Rush.jpg"/>
                            <div class="card-body">
                                <h5 class="card-title"><?= $desCar[0][0]?></h5>
                                <p class="text-muted">Rp. <?= $desCar[0][1]?> / Day</p>
                            </div>
                            <div class="card">
                                <ul class="list-group list-group-flush  ">
                                    <li class="list-group-item d-flex justify-content-center fw-bold text-primary "><?= $desCar[0][2]?></li>
                                    <li class="list-group-item d-flex justify-content-center fw-bold text-primary"><?= $desCar[0][3]?></li>
                                    <li class="list-group-item d-flex justify-content-center fw-bold text-primary"><?= $desCar[0][4]?></li>
                                </ul>
                                <div class="card-footer d-flex justify-content-center">
                                    <form action="saski_booking.php" method="POST">
                                        <button type="submit" value="<?= $desCar[0][0]?>" name="bookNow" class="btn btn-primary"> Book Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="<?= $carImg[1]?>" class="card-img-top" alt="Toyota Ayla.jpg"/>
                            <div class="card-body">
                                <h5 class="card-title"><?= $desCar[1][0]?></h5>
                                <p class="text-muted">Rp. <?= $desCar[1][1]?> / Day</p>
                            </div>
                            <div class="card">
                                <ul class="list-group list-group-flush  ">
                                    <li class="list-group-item d-flex justify-content-center fw-bold text-primary "> <?= $desCar[1][2]?></li>
                                    <li class="list-group-item d-flex justify-content-center fw-bold text-primary"><?= $desCar[1][3]?></li>
                                    <li class="list-group-item d-flex justify-content-center fw-bold text-primary"><?= $desCar[1][4]?></li>
                                </ul>
                                <div class="card-footer d-flex justify-content-center">
                                    <form action="saski_booking.php" method="POST">
                                        <button type="submit" value="<?= $desCar[1][0]?>" name="bookNow" class="btn btn-primary"> Book Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                        <img src="<?= $carImg[2]?>" class="card-img-top" alt="Honda Brio.jpg"/>
                            <div class="card-body">
                                <h5 class="card-title"><?= $desCar[2][0]?></h5>
                                <p class="text-muted">Rp. <?= $desCar[2][1]?> / Day</p>
                            </div>
                            <div class="card">
                                <ul class="list-group list-group-flush  ">
                                    <li class="list-group-item d-flex justify-content-center fw-bold text-primary "><?= $desCar[2][2]?></li>
                                    <li class="list-group-item d-flex justify-content-center fw-bold text-primary"><?= $desCar[2][3]?></li>
                                    <li class="list-group-item d-flex justify-content-center fw-bold text-primary"><?= $desCar[2][4]?></li>
                                </ul>
                                <div class="card-footer d-flex justify-content-center">
                                    <form action="saski_booking.php" method="POST">
                                        <button type="submit" value="<?= $desCar[2][0]?>" name="bookNow" class="btn btn-primary"> Book Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section>
        <footer class="bg-light text-center text-lg-start">
            <p class="text-center">Created by SASKI_1202204094</p>
        </footer>
    </section>       

</body>
</html>