<!DOCTYPE html>
<html>

<head>
    <title>O nama</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/style_my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body class="other-body">
    <?php include 'nav.php'; ?>

    <div class="video-onama">
        <video autoplay muted loop>
            <source src="images/video-hercules.mp4" type="video/mp4">
        </video>
    </div>
    <h1 class="about-us-title">O NAMA</h1>

    <section class="about-us-text1">
        <p>
            Konjički klub Hercules smješten je na istoku Hrvatske u samom srcu Baranje,
            u prekrasnom mjestu - Vardarac. Sudeći prema geografskom smještaju, klub ima
            sve predispozicije za pružanje avantura na konjima uz najljepše poglede na
            prirodu, počevši od rijeke Drave koja se nalazi u neposrednoj blizini pa sve
            do šuma te Parka prirode Kopačkog rita.

        </p>
        <img src="images/WhatsApp Image 2023-08-01 at 21.19.54.jpeg">
    </section>

    <section class="about-us-text">
        <hr><br><br><br>
        <p>
            K.K. Hercules je sportska udruga nastala 2010. godine, a pruža usluge sportskog,
            terapijskog, rekreativnog te turističkog jahanja. Također, pruža i usluge škole
            jahanja, a naša škola jahanja rezultirala je vrlo dobrim i uspješnim jahačima.
            Sukladno tome, možemo se pohvaliti i sa brojnim uspjesima naših članova, na koje
            smo iznimno ponosni.
        </p>
        <img src="images/309222642_429779062579363_7079548246616748848_n.jpg" class="pic1">
    </section>

    <section class="about-us-text">
        <h1>Naše trenerice</h1><br>
        <div class="trenerice">

            <div class="trenerice2">
                <div class="trainer1">
                    <img src="images/tihana (2).JPG">
                    <p>Tihana Kraiček</p>
                </div>

                <div class="trainer1">
                    <img src="images/viki.jpg">
                    <p>Viktorija Bulić</p>
                </div>
            </div><br>
            <p>
                Trenutačno, klub broji 20-ak članova koji marljivo, zajedničkim snagama
                sa našim trenericama nastoje održavati klub na visokom nivou.
            </p>

        </div>
    </section>

    <section class="horses">
        <br><br><br>
        <hr class="line">
        <br><br><br>
        <h1>Konji</h1>
        <div class="row2">
            <div class="horses-col">
                <img src="images/regi.jpeg">
                <div class="layer">
                    <p>REGI</p>
                </div>
            </div>
            <div class="horses-col">
                <img src="images/poly.jpeg">
                <div class="layer">
                    <p>POLY</p>
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
                <img src="images/pia.jpeg">
                <div class="layer">
                    <p>PIA ENWARA</p>
                </div>
            </div>
            <div class="horses-col">
                <img src="images/aalyah.jpeg">
                <div class="layer">
                    <p>AALYAH ENWARA</p>
                </div>
            </div>
            <div class="horses-col">
                <img src="images/adara.jpeg">
                <div class="layer">
                    <p>ADARA</p>
                </div>
            </div>

        </div>


        <div class="row2">
            <div class="horses-col">
                <img src="images/IMG_7900.jpeg">
                <div class="layer">
                    <p>RUMBA</p>
                </div>
            </div>
            <div class="horses-col">
                <img src="images/ares.jpeg">
                <div class="layer">
                    <p>ARES</p>
                </div>
            </div>
            <div class="horses-col">
                <img src="images/feike.jpeg">
                <div class="layer">
                    <p>FEIKE</p>
                </div>
            </div>
            <div class="horses-col">
                <img src="images/sarga.jpeg">
                <div class="layer">
                    <p>ŠARGA</p>
                </div>
            </div>
            <div class="horses-col">
                <img src="images/legra.jpeg">
                <div class="layer">
                    <p>LEGRA</p>
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

    <?php include 'footer.php'; ?>
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var nav = document.querySelector("nav");
            nav.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
</body>

</html>