<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <title>WAD2022 SASKI 1202204094</title>
</head>
<body>
    <?php
    if(isset($_POST["bookNow"])){
        $data = $_POST["bookNow"];
        if ($data == "Toyota Rush") {
            $img = "./img/rush.png";
        }elseif ($data == "Toyota Ayla"){
            $img = "./img/ayla.png";
        }elseif ($data == "Honda Brio"){
            $img = "./img/brio.png";
        }
        
    } else {
        $data = "Choose...";
        $img    = "./img/rush.png";
    }
    
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
            <h4>Rent your car now! <br></h4>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img src="<?= $img ?>" class="card-img-top">
                    </div>
                </div>
                <div class="col">
                    <form action="saski_mybooking.php" method="post">
                        <div class="form-group">
                            <label for="nama">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="SASKI_1202204094" readonly>
                        </div>
                        <div class="form-group mt-3">
                            <label for="checkin" >Book Date</label>
                            <input class="form-control" required type="date" id="bookDate" name="bookDate">
                        </div>
                        <div class="form-group mt-3">
                            <label for="time" class="form-label">Start Time</label>
                            <input class="form-control" required type="time" id="startTime" name="startTime">
                        </div>
                        <div class="form-group mt-3">
                            <label for="duration">Duration (Days)</label>
                            <input type="number" required class="form-control" id="duration" name="duration">
                        </div>
                        <div class="form-group mt-3">
                            <label for="tipe">Car Type</label>
                            <div class="form-group">
                                <select class="form-select" required name="carType" value="car" id="carType">
                                    <option selected>Choose...</option>
                                    <option <?php if ($data == "Toyota Rush"){echo "selected";}?> value="Rush">Toyota Rush</option>
                                    <option <?php if ($data == "Toyota Ayla"){echo "selected";}?> value="Ayla">Toyota Ayla</option>
                                    <option <?php if ($data == "Honda Brio"){echo "selected";}?> value="Brio">Honda Brio</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="hp">Phone Number</label>
                            <input type="text" class="form-control" required id="phone" name="phone">
                        </div>
                        <div class="form-group mt-3">
                            <label for="service" required>Add Service(s)</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="health" id="health" name="service[]">
                                <label class="form-check-label" for="defaultCheck1">Health protocol /Rp25.000</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="driver" id="driver" name="service[]">
                                <label class="form-check-label" for="defaultCheck1">Driver /Rp.100.000</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="fuel" id="fuel" name="service[]">
                                <label class="form-check-label" for="defaultCheck1">Fuel filled /Rp250.000</label>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="d-grid">
                                <button type="submit" name="book" class="btn btn-success" required>Book</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <footer class="bg-light text-center text-lg-start ">
            <p class="text-center">Created by SASKI_1202204094</p>
        </footer>
    </section>
</body>
</html> 