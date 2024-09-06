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
    <title>Škola jahanja</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/style_my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-... " crossorigin="anonymous">

</head>

<body class="other-body">
    <main>
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

        <img src="images/skola1.jpg" class="skola1">
        <h1 class="school-title">ŠKOLA JAHANJA</h1>
        <div class="about-us-text">
            Škola jahanja Konjičkog kluba Hercules
            jedna je od najuspješnijih u ovom dijelu
            Hrvatske. Mnogi dobri i kvalitetni jahači
            potekli su upravo iz naše škole što nam je
            dodatan vjetar u leđa kako bismo još više
            ulagali u razvoj našeg kluba pa tako i same
            škole jahanja.
            <br><br><br>
            <hr>
        </div>

        <div class="about-us-text">
            Škola jahanja sastoji se od dva stupnja. U prvom
            stupnju savladava se prilazak konju, briga o konju,
            briga o opremi, postupak zasedlavanja konja te osnove
            što se tiče samog jahanja. Uči se samostalno pokrenuti
            konja u hod i kas te u krajnjem slučaju savladati i
            samostalno hodanje te kasanje. U drugom stupnju škole
            jahanja učvršćuje se znanju u prethodne dvije stavke te
            se uči galopirati, prvo na lonži, a zatim i samostalno.
            Svaki od ova dva stupnja škole jahanja sadrži 10 sati treninga,
            a kada se savlada samostalno kretanje u hodu, kasu i galopu za sve
            jahače postoji mogućnost članstva u klubu.
        </div>


        <img src="images/za turist..jpg" class="skola2">

        <section class="about-us-text">
            <h2>Cijena škole jahanja:</h2>
            <div class="euro">
                <i class="fas fa-euro-sign"></i>
                <div class="layer">
                    <p><strong>130 eura</strong>, 10 sati</p>
                </div>
            </div>
            <br>
            <hr>
            <br><br>
            <h2>Cijena članarine:</h2>
            <div class="euro">
                <i class="fas fa-euro-sign"></i>
                <div class="layer">
                    <p><strong>70 eura</strong> mjesečno</p>
                </div>
            </div>
            <br><br>
            <hr>
        </section>

        <section class="about-us-text">
            <h2>Pony škola jahanja</h2>
            <p>
                U sklopu škole jahanja pružamo i pony školu jahanja koja je namijenjena
                za najmanje uzraste. Na ovaj način djeca od najranijih dana stječu
                povezanost sa ovim prekrasnim životinjama, ali i svoj život ispunjavaju
                zabavom. Pony škola jahanja također sadrži dva stupnja po 10 sati te je
                nakon završetka otvorena opcija članstva u klubu. Ukoliko dva stupnja
                škole jahanja nisu dovoljna, postoji mogućnost za dodatnim stupnjevima.
            </p>
        </section>

        <div class="gallery">
            <div class="galery-img">
                <img src="images/poni1 (1).jpg" alt="">
            </div>
            <div class="galery-img">
                <img src="images/poni1 (2).jpg">
            </div>
            <div class="galery-img">
                <img src="images/poni1 (3).jpg">
            </div>
            <div class="galery-img">
                <img src="images/poni1 (4).jpg">
            </div>
            <div class="galery-img">
                <img src="images/poni1 (6).jpg">
            </div>
            <div class="galery-img">
                <img src="images/poni1 (7).jpg">
            </div>
            <div class="galery-img">
                <img src="images/poni1 (8).jpg">
            </div>


            <div class="galery-btn">
                <a onclick="followinImg(-1)" class="prev">&#10094;</a>
                <a onclick="followinImg(1)" class="next">&#10095;</a>
            </div>

        </div>

        <section class="about-us-text">
            <hr><br><br><br>
            <h2>Cijena pony škole jahanja:</h2>
            <div class="euro">
                <i class="fas fa-euro-sign"></i>
                <div class="layer">
                    <p><strong>130 eura</strong>, 10 sati</p>
                </div>
            </div>
        </section>

        <section class="about-us-text">
            <hr><br><br>
            <h1>Konji</h1>
            <div class="row2">
                <div class="horses-col">
                    <img src="images/regi.jpeg">
                    <div class="layer">
                        <p>REGI</p>
                    </div>
                </div>
                <div class="horses-col">
                    <img src="images/pia.jpeg">
                    <div class="layer">
                        <p>PIA ENWARA</p>
                    </div>
                </div>
                <div class="horses-col">
                    <img src="images/pioggia.jpeg">
                    <div class="layer">
                        <p>PIOGGIA</p>
                    </div>
                </div>
                <div class="horses-col">
                    <img src="images/abbas.jpeg">
                    <div class="layer">
                        <p>ABBAS PSYHE</p>
                    </div>
                </div>
                <div class="horses-col">
                    <img src="images/ares.jpeg">
                    <div class="layer">
                        <p>ARES</p>
                    </div>
                </div>
                <div class="horses-col">
                    <img src="images/IMG_7920.jpeg">
                    <div class="layer">
                        <p>GRETA</p>
                    </div>
                </div>
                <div class="horses-col">
                    <img src="images/IMG_7917.jpeg">
                    <div class="layer">
                        <p>GROM</p>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="item">
                <div class="footerp">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <p>Konjički klub Hercules</p>
                </div>
                <div class="footerp">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <p>kk.hercules</p>
                </div>
            </div>
            <div class="item">
                <div class="footerp">
                    <a href="#"><i class="far fa-envelope"></i></a>
                    <p>konjickiklubhercules@gmail.com</p>
                </div>
                <div class="footerp">
                    <a href="#" class="telefon"><i class="fas fa-phone"></i></a>
                    <p>098/938 48 46</p>
                </div>
            </div>
        </div>
        <div class="loc">
            <a href="#" class="location"><i class="fas fa-map-marker-alt"></i></a>
            <p>Ružina 4, Vardarac</p>
        </div>


    </footer>

    <!--sticky navigacijska traka-->
    <script>
        window.addEventListener("scroll", function() {
            var navbar = document.querySelector("nav");
            navbar.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>

    <script>
        let numberImg = 1;
        showImg(numberImg);

        function followinImg(i) {
            showImg(numberImg = numberImg + i)
        }

        function nowImg(i) {
            showImg(numberImg = i)
        }

        function showImg(i) {
            var j;
            const img = document.getElementsByClassName("galery-img");
            var len = img.length
            for (let j = 0; j < img.length; j++) {
                img[j].style.display = "none";
            }
            if (i > len) {
                numberImg = 1;
            }

            if (i < 1) {
                numberImg = len;
            }

            img[numberImg - 1].style.display = "block";

        }
    </script>
</body>

</html>