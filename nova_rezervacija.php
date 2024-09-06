<?php
include 'database.php';
session_start();
$aid = $_SESSION['id'];
if (isset($_POST['add_reservation'])) {
    $activity_name = $_POST['activity_name'];
    $activity_date = $_POST['activity_date'];
    $activity_time = $_POST['activity_time'];
    $horse_name = $_POST['horse_name'];
    $price = $_POST['price'];
    $trainer = $_POST['trainer'];

    $status = "Available"; // Možete postaviti početni status na "Pending"

    // Ovdje umetnite podatke u tablicu "reservation"
    $query = "INSERT INTO reservation (activity_name, date, time, horse_name, price, status, trainer) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sssssss', $activity_name, $activity_date, $activity_time, $horse_name, $price, $status, $trainer);


    if ($stmt->execute()) {
        $succ = "Reservation Added";
    } else {
        $err = "Please Try Again Later";
    }
}

?>
<!DOCTYPE html>
<html>

<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper">

            <div class="container-fluid">
                <?php if (isset($succ)) { ?>
                    <!--This code for injecting an alert-->
                    <script>
                        setTimeout(function() {
                                swal("Success!", "<?php echo $succ; ?>!", "success");
                            },
                            100);
                    </script>

                <?php } ?>
                <?php if (isset($err)) { ?>
                    <!--This code for injecting an alert-->
                    <script>
                        setTimeout(function() {
                                swal("Failed!", "<?php echo $err; ?>!", "Failed");
                            },
                            100);
                    </script>

                <?php } ?>

                <hr>
                <div class="card">
                    <div class="card-header">
                        Dodaj novi termin
                    </div>
                    <div class="card-body">
                        <!--Add User Form-->
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="activity_name">Aktivnost: </label>
                                <input type="text" class="form-control" name="activity_name" required>
                            </div>

                            <div class="form-group">
                                <label for="activity_date">Datum: </label>
                                <input type="date" class="form-control" name="activity_date" required>
                            </div>

                            <div class="form-group">
                                <label for="activity_time">Vrijeme: </label>
                                <input type="time" class="form-control" name="activity_time" required>
                            </div>

                            <div class="form-group">
                                <label for="horse_name">Konj: </label>
                                <input type="text" class="form-control" name="horse_name" required>
                            </div>

                            <div class="form-group">
                                <label for="trainer">Trener: </label>
                                <input type="text" class="form-control" name="trainer" required>
                            </div>


                            <div class="form-group">
                                <label for="price">Cijena: </label>
                                <input type="text" class="form-control" name="price" required>
                            </div>

                            <button type="submit" name="add_reservation" class="btn btn-success">Dodaj aktivnost</button>
                        </form>

                        <!-- End Form-->
                    </div>
                </div>

                <hr>

            </div>

        </div>


</body>

</html>