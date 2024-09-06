<?php
session_start();
if (!isset($_SESSION["previous_url"])) {
    $_SESSION["previous_url"] = $_SERVER["HTTP_REFERER"];
}
if (isset($_SESSION["user"])) {
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prijava</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav>
        <a href="home.php"><img src="images/LOGO.png" class="logo"></a>
    </nav>
    <img src="images/login4.jpg" class="loginpicture">
    <div class="container">
        <p class="logintitle">Prijava</p>

        <?php
        if (isset($_POST["login"])) {
            $userEmail = $_POST["email"];
            $userPassword = $_POST["password"];
            require_once "database.php";

            $sqlQuery = "SELECT * FROM users WHERE email = '$userEmail'";
            $resultQuery = mysqli_query($conn, $sqlQuery);
            $dbUser = mysqli_fetch_array($resultQuery, MYSQLI_ASSOC);
            if (!$dbUser) {
                echo "<div class='error_message'>Pogrešna e-mail adresa!</div>";
            } else {
                if (password_verify($userPassword, $dbUser["password"])) {
                    if (password_needs_rehash($dbUser["password"], PASSWORD_DEFAULT)) {
                        $newHash = password_hash($userPassword, PASSWORD_DEFAULT);
                    }
                    session_start();
                    $_SESSION["user"] = "yes";
                    $_SESSION["id"] = $dbUser["id"]; // Postavite ID prijavljenog korisnika u sesiju.
                    /*header("Location: home.php");
                    header("X-Frame-Options: DENY");
                    header("Strict-Transport-Security: max-age=31536000; includeSubDomains");
*/

                    // Provjerite tip korisnika i preusmjerite na odgovarajuću stranicu
                    if ($dbUser["user_type"] == "admin") {
                        header("Location: admin_dashboard.php");
                    } else {
                        header("Location: user_dashboard.php");
                    }


                    die();
                } else {
                    echo "<div class='error_message'>Netočna lozinka!</div>";
                }
            }
        }
        ?>
        <form action="login.php" method="post">
            <div class="form-base">
                <input type="email" placeholder="Email:" name="email" class="form-control">
            </div>
            <div class="form-base">
                <input type="password" placeholder="Lozinka:" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="Prijava" name="login" class="btn btn-primary">
            </div>
        </form>
        <div class="registrationlink"><a href="registration.php">Registriraj se</a></div>
    </div>
</body>

</html>