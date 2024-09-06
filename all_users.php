<?php
include 'database.php';
session_start();

// Provjerite postoji li ključ "u_id" u sesiji i ima li vrijednost
if (isset($_SESSION['id'])) {
    $u_id = $_SESSION['id'];
    // Sada možete koristiti $aid
} else {
    // Ključ "u_id" nije postavljen u sesiji, pa trebate obraditi ovu situaciju
    // Na primjer, preusmjerite korisnika ili izvedite neku drugu radnju
}

if (isset($_SESSION["user"])) {
    // Korisnik je prijavljen
    $isLoggedIn = true;
} else {
    // Korisnik nije prijavljen
    $isLoggedIn = false;
}
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

    <p class="dashboard-link"><a href="admin_dashboard.php"><i class="fa-solid fa-house"></i> Admin panel</a></p>
    <h1>Svi korisnici</h1>
    <table class="user-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Ime</th>
                <th>Email</th>
                <th>Adresa</th>
            </tr>
        </thead>
        <?php

        $ret = "SELECT * FROM users where user_type = 'User' ";
        $stmt = $conn->prepare($ret);
        $stmt->execute();
        $res = $stmt->get_result();
        $cnt = 1;
        while ($row = $res->fetch_object()) {
        ?>
            <tbody>
                <tr>
                    <td><?php echo $cnt; ?></td>
                    <td><?php echo $row->full_name; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->adresa; ?></td>
                </tr>
            </tbody>
        <?php $cnt = $cnt + 1;
        } ?>

    </table>




</body>

</html>