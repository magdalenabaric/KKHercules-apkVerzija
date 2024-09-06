<?php
include 'database.php';
session_start();
if (isset($_SESSION["user"])) {
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}
if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
} else {
    header("Location: login.php");
    exit();
}

$stmt = $conn->prepare("SELECT * FROM reservation WHERE status = 'Available'");
$stmt->execute();
$todayDate = date("Y-m-d");
$res = $stmt->get_result();
$count = 1;
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/style_my.css">
    <link rel="stylesheet" href="styles/style_admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-... " crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php include 'nav2.php'; ?>
</head>

<body class="other-body">
    <p class="dashboard-link"><a href="user_dashboard.php"><i class="fa-solid fa-house"></i> Korisnički panel</a></p>
    <h1>Slobodni termini</h1>
    <table class="user-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Aktivnost</th>
                <th>Cijena</th>
                <th>Ime konja</th>
                <th>Voditeljica</th>
                <th>Status</th>
                <th>Datum</th>
                <th>Vrijeme</th>
            </tr>
        </thead>

        <tbody>
            <?php
            while ($data = $res->fetch_object()) {
                $reservationDate = $data->date;
                if ($reservationDate < $todayDate) {
                    continue;
                }
            ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $data->activity_name; ?></td>
                    <td><?php echo $data->price; ?> eura</td>
                    <td><?php echo $data->horse_name; ?></td>
                    <td><?php echo $data->trainer; ?></td>
                    <td>
                        <a href="confirmation.php?id_reservacije=<?php echo $data->id_reservacije; ?>"><i class="fa-solid fa-bars"></i> Rezerviraj termin</a>

                    </td>
                    <td><?php echo $data->date; ?></td>
                    <td><?php echo $data->time; ?></td>
                </tr>
            <?php $count = $count + 1;
            } ?>

        </tbody>
    </table>

</body>

</html>