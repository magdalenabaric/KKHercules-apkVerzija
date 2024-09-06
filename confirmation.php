<?php
include 'database.php';
session_start();

// Ispis id korisnika iz sesije (ako je postavljen)
if (isset($_SESSION["id"])) {
    echo "ID korisnika u sesiji: " . $_SESSION["id"];
} else {
    echo "Sesija nije sadržavala ID korisnika.";
}

$aid = $_SESSION['id'];

// Prvo, izvršite upit prema bazi podataka kako biste dohvatili podatke o rezervaciji
$id_reservacije = $_GET['id_reservacije']; // Pretpostavka da dobivate id rezervacije iz URL-a
echo "ID rezervacije: " . $id_reservacije;
$stmt = $conn->prepare("SELECT * FROM reservation WHERE id_reservacije = ?");
$stmt->bind_param('i', $id_reservacije);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_assoc(); // Koristite fetch_assoc() za dohvat podataka kao asocijativnog niza

?>

<!DOCTYPE html>
<html>


<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container-fluid">
                <hr>
                <div class="card">
                    <div class="card-header">
                        Confirm Booking
                    </div>
                    <div class="card-body">
                        <!--Add User Form-->
                        <?php

                        $ret = "select * from reservation where id_reservacije=?";
                        echo "ID rezervacije: " . $id_reservacije;
                        $stmt = $conn->prepare($ret);
                        $stmt->bind_param('i', $id_reservacije);
                        $stmt->execute(); //ok
                        $res = $stmt->get_result();
                        //$cnt=1;
                        while ($row = $res->fetch_object()) {
                            $u_id = $_SESSION['id'];
                        ?>
                            <form method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Activity name</label>
                                    <input type="text" value="<?php echo $row->activity_name; ?>" readonly class="form-control" name="u_car_type">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">trainer</label>
                                    <input type="email" value="<?php echo $row->trainer; ?>" readonly class="form-control" name="u_car_regno">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">A ID</label>
                                    <input type="email" value="<?php echo $row->id_reservacije; ?>" readonly class="form-control" name="u_car_regno">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">A ID</label>
                                    <input type="email" value="<?php echo $user_id; ?>" readonly class="form-control" name="u_car_regno">
                                </div>
                                <input type="hidden" name="id_reservacije" value="<?php echo $row->id_reservacije; ?>">

                                <!-- Ovdje ostatak HTML-a za prikaz podataka o rezervaciji -->

                                <button type="submit" name="book_vehicle" class="btn btn-success">Confirm Booking</button>
                            </form>

                            <!-- End Form-->

                        <?php
                            if (isset($_POST['book_vehicle'])) {
                                // Dohvatite ID rezervacije iz POST-a
                                $id_reservacije = $_POST['id_reservacije'];
                                echo "ID rezervacije: " . $id_reservacije;

                                // Provjerite je li korisnik prijavljen
                                if (isset($_SESSION['id'])) {
                                    $user_id = $_SESSION['id']; // Dohvatite ID trenutno ulogiranog korisnika iz sesije
                                    echo "ID usera: " . $user_id;
                                } else {
                                    // Ako korisnik nije prijavljen, možete obraditi tu situaciju ili preusmjeriti korisnika
                                    // na stranicu za prijavu ili prikazati odgovarajuću poruku.
                                    // Ovdje možete dodati kod za obradu ove situacije.
                                    // Primjer:
                                    echo "Morate biti prijavljeni da biste izvršili rezervaciju.";
                                    exit();
                                }


                                // Izvršite SQL upit za ažuriranje statusa i user_id
                                $query = "UPDATE reservation SET status = 'Confirmed', user_id = ? WHERE id_reservacije = ?";
                                $stmt = $conn->prepare($query);
                                $stmt->bind_param('ii', $user_id, $id_reservacije);

                                if ($stmt->execute()) {
                                    // Uspješno ažurirano, možete prikazati poruku o uspješnoj potvrdi.
                                    $succ = "Booking Confirmed Successfully!";
                                    header("Location: user_dashboard.php"); // Preusmjerite korisnika na odgovarajuću stranicu nakon potvrde
                                    exit();
                                } else {
                                    // Neuspješno ažuriranje, prikažite poruku o pogrešci.
                                    header("Location: admin_dashboard.php");
                                    $err = "Error: Booking Confirmation Failed. Please Try Again Later.";
                                }
                            }
                        }
                        ?>

                    </div>
                </div>

                <hr>

            </div>

        </div>


</body>

</html>