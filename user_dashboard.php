<?php
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
    <title>Korisnički panel</title>
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
    <main>
        <div id="content-wrapper">
            <h1 class="h1-dashboard">Korisnički panel</h1>

            <!-- Icon Cards-->
            <section class="horses">
                <div class="row2">
                    <div class="horses-col">
                        <img src="images/SLIKE1.jpg">
                        <a href="user_profile.php">
                            <div class="layer">
                                <p>Više</p>
                            </div>
                        </a>
                    </div>
                    <div class="horses-col">
                        <img src="images/SLIKE3.jpg">
                        <a href="view_bookings.php">
                            <div class="layer">
                                <p>Više</p>
                            </div>
                        </a>
                    </div>
                    <div class="horses-col">
                        <img src="images/SLIKE4.jpg">
                        <a href="user_delete_b.php">
                            <div class="layer">
                                <p>Više</p>
                            </div>
                        </a>
                    </div>
                    <div class="horses-col">
                        <img src="images/SLIKE2.jpg">
                        <a href="rezervacija.php">
                            <div class="layer">
                                <p>Više</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
    </main>
</body>

</html>