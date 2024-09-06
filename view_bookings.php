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
$_SESSION['user_id'] = $u_id;
// Trenutni datum
$currentDate = date("Y-m-d");

// Inicijalizacija $stmt
$stmt = $conn->prepare("SELECT * FROM reservation WHERE user_id = ? AND date >= ?");
$stmt->bind_param('is', $u_id, $currentDate);
$stmt->execute();

$res = $stmt->get_result();
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
    <h1>Moje rezervacije</h1>
    <table class="user-table">
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
                </tr>

            <?php  } ?>
        </tbody>
    </table>
</body>

</html>