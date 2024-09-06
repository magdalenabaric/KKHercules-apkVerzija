<?php
// Provjerite je li korisnik prijavljen
if (isset($_SESSION["user"])) {
    $user_type = $_SESSION["user_type"]; // Pretpostavljam da je $_SESSION["user_type"] postavljeno pri prijavi
?>

    <nav>
        <a href="home.php"><img src="images/LOGO.png" class="logo"></a>
        <div class="container-nav2">
            <?php if ($user_type == "admin") { ?>
                <div class="profil">
                    <p><a href="admin_profile.php"><i class="fas fa-user"></i> PROFIL</a></p>
                </div>
            <?php } else { ?>
                <div class="profil">
                    <p><a href="user_profile.php"><i class="fas fa-user"></i> PROFIL</a></p>
                </div>
            <?php } ?>
            <div class="login">
                <p><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> ODJAVA</a></p>
            </div>
            <div class="signup">
                <p><a href="logout.php"><i class="fa-solid fa-calendar-days"></i> REZERVACIJA</a></p>
            </div>
        </div>
        <a href="menu.php"><img src="images/izbornik.jpg" class="menu"></a>
    </nav>

<?php
} else {
    // Korisnik nije prijavljen, prikažite navigacijsku traku za neprijavljene korisnike
?>
    <nav>
        <a href="home.php"><img src="images/LOGO.png" class="logo"></a>
        <div class="container-nav1">
            <div class="login">
                <p><a href="login.php">PRIJAVA</a></p>
            </div>
            <div class="signup">
                <p><a href="registration.php">REGISTRACIJA</a></p>
            </div>
        </div>
        <a href="menu.php"><img src="images/izbornik.jpg" class="menu"></a>
    </nav>
<?php } ?>