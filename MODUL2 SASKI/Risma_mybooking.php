<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>WAD2022 RISMA 1202204094</title>
</head>
<body>
    <?php
        $bookingNumber = rand();
        $name = $_POST['name']; 
        $date = $_POST['bookDate'];
        $time = $_POST['startTime'];
        $duration = $_POST['duration'];
        $car = $_POST['carType'];
        $phone = $_POST['phone'];
        $checkIn = date('Y-m-d H:i:s', strtotime("$date $time"));
        $checkOut = date('Y-m-d H:i:s', strtotime($duration . " " . "days", strtotime($checkIn)));;
        
        if ($car == "Toyota Rush") {
            $totalPrice = 200000*$duration;
        } elseif ($car == "Toyota Ayla") {
            $totalPrice = 150000*$duration;
        } else{
            $totalPrice = 150000*$duration;
        }
        
        if (isset($_POST['service'])){
            $services = $_POST['service'];
        } else {
            $services = '';
        }

    ?>
   
    <section>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container justify-content-center">
                <a class="navbar-brand" href="Risma_home.php">Home</a>
                <a class="navbar-brand" href="Risma_booking.php">Booking</a>
            </div>
        </nav>
    </section>

    <section>
        <div class="text-center">
            <h4>Thank You <?= $name?> for Reserving<br></h4>
            <h6>Please double check your reservation details</h6>
        </div>
    </section>

    <div class="container-xl mt-5 d-flex justify-content-center align-item-center">
        <table class="table" style="width: 365mm;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">Booking Number</th>
                    <th scope="col" class="text-center">Name</th>
                    <th scope="col" class="text-center">Check-in</th>
                    <th scope="col" class="text-center">Check-out</th>
                    <th scope="col" class="text-center">Car Type</th>
                    <th scope="col" class="text-center">Phone Number</th>
                    <th scope="col" class="text-center">Service(s)</th>
                    <th scope="col" class="text-center">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><?= $bookingNumber?></th>
                    <td><?= $name?></td>
                    <td><?= $checkIn?></td>
                    <td><?= $checkOut?></td> 
                    <td><?= $car?></td>
                    <td><?= $phone?></td>
                    <td><ul>
                        <?php
                       if(!empty($services)){
                            echo '<ul>';
                            foreach ($services as $service) {
                                if ($service == "health") {
                                    $totalPrice += 25000;
                                    echo '<li>' . $service . '</li>';
                                } elseif ($service == "driver") {
                                    $totalPrice += 100000;
                                    echo '<li>' . $service . '</li>';
                                } elseif ($service == "fuel") {
                                    $totalPrice += 250000;
                                    echo '<li>' . $service . '</li>';
                                }
                            }
                            echo '</ul>';
                        } else {
                            echo 'no service';
                        }
                    ?></ul></td>
                    <td><?= 'Rp'.$totalPrice ?></td>
                </tr>
            </tbody>
        </table>
    </div>


    <section>
        <footer class="bg-light text-center text-lg-start fixed-bottom ">
            <p class="text-center">Created by RISMA_1202204094</p>
        </footer>
    </section>

</body>
</html>