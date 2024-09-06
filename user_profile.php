<?php
include 'database.php';
session_start();
if (isset($_SESSION["user"])) {
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}
if (isset($_SESSION['id'])) {
    $u_id = $_SESSION['id'];
} else {
    header("Location: login.php");
    exit();
}


$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param('i', $u_id);
$stmt->execute();

$res = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Moj profil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/style_user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-... " crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>


<body>
    <nav>
        <a href="home.php"><img src="images/LOGO.png" class="logo"></a>
        <?php if (!$isLoggedIn) { ?>
            <div class="container-nav1">
                <div class="login">
                    <p><a href="login.php">PRIJAVA</a></p>
                </div>
                <div class="signup">
                    <p><a href="registration.php">REGISTRACIJA</a></p>
                </div>
            </div>
        <?php } else { ?>
            <div class="container-nav2">
                <div class="profil">
                    <p><a href="login.php"><i class="fas fa-user"></i> PROFIL</a></p>
                </div>
                <div class="login">
                    <p><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> ODJAVA</a></p>
                </div>
                <div class="signup">
                    <p><a href="logout.php"><i class="fa-solid fa-calendar-days"></i> REZERVACIJA</a></p>
                </div>
            </div>
        <?php } ?>

        <a href="menu.php"><img src="images/izbornik.jpg" class="menu"></a>
    </nav>
    <main class="u-profile">
        <?php
        while ($row = $res->fetch_object()) {
        ?>
            <p class="dashboard-link"><a href="user_dashboard.php"><i class="fa-solid fa-house"></i> Korisnički panel</a></p>
            <h1>Moj profil</h1>
            <div class="profile-container">
                <p class="user-name"><i class="fa-solid fa-user"></i> Korisničko ime:
                    <strong><?php echo $row->full_name; ?></strong>
                </p>
                <p><i class="fa-solid fa-envelope"></i> Email adresa:</b> <?php echo $row->email; ?></p>
                <p><i class="fa-solid fa-calendar-days"></i> Godine:</b> <?php echo $row->age; ?></p>
                <p><i class="fa-solid fa-location-dot"></i> Adresa:</b> <?php echo $row->adresa; ?></p>
            </div>
        <?php } ?>
    </main>
</body>

</html>