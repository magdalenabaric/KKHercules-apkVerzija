<?php
include 'database.php';
session_start();
if (isset($_SESSION["user"])) {
    // Korisnik je prijavljen
    $isLoggedIn = true;
} else {
    // Korisnik nije prijavljen
    $isLoggedIn = false;
}
if (isset($_SESSION['id'])) {
    $u_id = $_SESSION['id'];
} else {
    header("Location: login.php");
    exit();
}
$_SESSION['user_id'] = $user_id;
// Inicijalizacija $stmt
$stmt = $conn->prepare("SELECT * FROM reservation WHERE id = ?");
$stmt->bind_param('i', $u_id);
$stmt->execute(); // Izvršava upit

$res = $stmt->get_result();
?>

<!DOCTYPE html>
<html>


<body>


    <!-- My Bookings-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Bookings
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Aktivnost</th>
                            <th>Cijena</th>
                            <th>Konj</th>
                            <th>Voditelj aktivnosti</th>
                            <th>Datum</th>
                            <th>Vrijeme</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = $res->fetch_object()) {
                        ?>
                            <tr>
                                <td><?php echo $row->activity_name; ?></td>
                                <td><?php echo $row->price; ?></td>
                                <td><?php echo $row->horse_name; ?></td>
                                <td><?php echo $row->trainer; ?></td>
                                <td><?php echo $row->date; ?></td>
                                <td><?php echo $row->time; ?></td>
                                <td><?php if ($row->status == "Pending") {
                                        echo '<span class = "badge badge-warning">' . $row->status . '</span>';
                                    } else {
                                        echo '<span class = "badge badge-success">' . $row->status . '</span>';
                                    } ?></td>
                                <td><a href="user-delete-booking.php?u_id=<?php echo $row->u_id; ?>" class="badge badge-danger"><i class="fa fa-trash"></i> Cancel</a>
                                    </i> </td>
                            </tr>

                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


</body>

</html>