<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ujahivanje i trening</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/style_my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-... " crossorigin="anonymous">
</head>

<body class="other-body">
    <?php include 'nav.php'; ?>
    <main>
        <img src="images/poli-rekr2.jpg" class="skola1">
        <h1 class="school-title">UJAHIVANJE I TRENING</h1>

        <section class="about-us-text">
            <p>
                U našem klubu brinemo se za konje od najranije dobi, a za one od 3 godine
                starosti pružamo mogućnost ujahivanja. Konja ćemo naučiti hod, kas i
                galop uz naredbe te ga izvježbati kako bi njegovi vlasnici kasnije imali
                ugodne avanture s njim.

            </p>
            <br><br>
            <hr>
            <section class="img-row3">
                <img src="images/ujah.jpg">
                <img src="images/ujah2.jpg">
                <img src="images/ujah3.jpg">
            </section>
            <br><br>
            <hr>
            <br><br>
            <p>Nakon što smo konja pripremili na osnovne kretnje te ga naučili kako se
                kretati u njima, odrađivat ćemo potrebne treninge kako bi kasnije jahanje
                bilo sigurno. Privikavat ćemo konja na jahanje na terenu, povećavat ćemo
                mu izdržljivost i snagu odgovarajućim treninzima, privikavati ga na
                treniranje s drugim konjima i još mnogo stvari koje su potrebne za
                kvalitetno jahanje samog konja.
            </p>

            <br><br>
            <hr>
            <section class="img-row3">
                <img src="images/ujahj (2).jpg">
                <img src="images/ujahj (3).jpg">
                <img src="images/ujahj (1).jpg">
            </section>
            <br><br>
            <hr>
            <br><br>
            <p>
                Ukoliko imate neujahanog konja slobodno nam se obratite te ćemo dogovoriti
                sve detalje i brinuti se o njemu kao da je dio naše obitelji!
            </p>
        </section>
    </main>
    <?php include 'footer.php'; ?>

    <!--sticky navigacijska traka-->
    <script>
        window.addEventListener("scroll", function() {
            var navbar = document.querySelector("nav");
            navbar.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
</body>

</html>