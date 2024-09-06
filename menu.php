<?php
session_start();

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
    <title>Izbornik</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/style_my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-... " crossorigin="anonymous">
</head>

<body class="menu-body">
    <nav>
        <a href="home.php"><img src="images/LOGO.png" class="logo"></a>
        <a href="#" onclick="goBack()" class="x"><i class="fas fa-times"></i></a>
    </nav>

    <section class="menu-container">
        <div class="menu-item">
            <a href="aboutUs.php">
                <h2>O nama</h2>
            </a>
        </div>
        <div class="menu-item">
            <a href="skolajahanja.php">
                <h2>Škola jahanja</h2>
            </a>
        </div>
        <div class="menu-item">
            <a href="terenskojahanje.php">
                <h2>Terensko jahanje</h2>
            </a>
        </div>
        <div class="menu-item">
            <a href="rekreativnojahanje.php">
                <h2>Rekreativno jahanje</h2>
            </a>
        </div>
        <div class="menu-item">
            <a href="ujahivanje.php">
                <h2>Ujahivanje i trening</h2>
            </a>
        </div>
        <div class="menu-item">
            <a href="ostalo.php">
                <h2>Ostala ponuda</h2>
            </a>
        </div>
        <div class="menu-item">
            <a href="kontakt.php">
                <h2>Kontakt</h2>
            </a>
        </div>
    </section>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>