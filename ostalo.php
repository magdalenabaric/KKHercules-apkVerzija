<!DOCTYPE html>
<html lang="en">

<head>
    <title>Terensko jahanje</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/style_my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-... " crossorigin="anonymous">
</head>

<body class="other-body">
    <?php include 'nav.php'; ?>

    <main>
        <img src="images/ostalo.jpg" class="skola1">
        <h1 class="school-title">OSTALA PONUDA</h1>

        <section class="about-us-text">
            <p>Osim škole jahanja, pony škole jahanja, terenskog i rekreativnog jahanja,
                ujahivanja te treninga konja u našoj ponudi nalazi se još puno zanimljivih
                mogućnosti.
            </p>
            <br><br>
            <hr>

        </section>

        <section class="about-us-text">
            <h2>PRIPREMA I POLAGANJE JAHAČIH I NATJECATELJSKIH DOZVOLA</h2>
            <p>Jahača dozvola je dokument koji tumači da je jahač spreman i sposoban
                upravljati konjem. Stoga, za samostalno kretanje konjem jahača
                dozvola je vrlo važna te je za svakog jahača poželjno polaganje,
                a upravo kod nas možete proći pripreme, ali i samo polaganje.
                S druge strane, ukoliko imate težnju za natjecanjem, kod nas se
                također možete pripremati za polaganje natjecateljskih dozvola za
                dresurno, preponsko i daljinsko jahanje, ali ih, također, možete i
                polagati.
            </p>
            <section class="img-row">
                <img src="images/pol (2).jpg">
                <img src="images/pol1.jpg">
                <img src="images/pol (1).jpg">
            </section>
            <br><br>
            <hr>
        </section>

        <section class="about-us-text">
            <h2>GRUPNI POSJETI ŠKOLA I VRTIĆA</h2>
            <p>
                Za naše najmlađe osigurali smo grupne posjete škola i vrtića kako bi se
                od malih nogu upoznali s ovim životinjama te imali priliku projahati na
                njima. Za svako dijete je važno da je što više na svježem zraku, a na
                ovaj način to im je upravo i omogućeno. Također, dobivaju uvid u sve
                obaveze koje bi morali ispuniti te ako se odluče za ovaj sport razvit
                će razne vještine korisne za život.
            </p>
            <section class="img-row4">
                <img src="images/posjet (1).jpg">
                <img src="images/posjet (2).jpg">
            </section>
            <br><br>
            <hr>
        </section>

        <section class="about-us-text">
            <h2>SUDJELOVANJE NA MANIFESTACIJAMA</h2>
            <p>
                Mnoge manifestacije zahtjevaju prisustvo konja, a nama će biti
                zadovoljstvo ukoliko se odlučite upravo za naše konje. Do sada smo
                sudjelovali na raznim manifestacijama te su se naši konji prikazali
                u najboljem svjetlu, kakvi i jesu.
            </p>
            <section class="img-row4">
                <img src="images/manif.jpg">
                <img src="images/manif2.jpg">
            </section>
            <br><br>
            <hr>
        </section>


        <section class="about-us-text">
            <h2>NAJAM KONJA ZA FOTOGRAFIRANJE</h2>
            <p>
                Ukoliko želite ovjekovječiti neki trenutak, naši konji Vam stoje na
                raspolaganju da taj trenutač učine čarobnim. Stoga, ukoliko ste
                zainteresirani za fotografiranje s našim konjima za vjenčanje, zaruke
                ili bilo koju drugu prigodu obratite nam se s punim povjerenjem.
            </p>
            <section class="img-row5">
                <img src="images/vjencanje.jpg" class="img-row5-2">
                <img src="images/zaruke.jpg" class="img-row5-1">

            </section>
            <br><br>
            <hr>
        </section>

        <section class="about-us-text">
            <h2>SNIMANJE REKLAMA S KONJIMA</h2>
            <p>
                Ukoliko želite ovjekovječiti neki trenutak, naši konji Vam stoje na
                raspolaganju da taj trenutač učine čarobnim. Stoga, ukoliko ste
                zainteresirani za fotografiranje s našim konjima za vjenčanje, zaruke
                ili bilo koju drugu prigodu obratite nam se s punim povjerenjem.
            </p>
            <section class="img-row6">
                <img src="images/doris (1).jpg" class="img-row6-1">
                <img src="images/doris (2).jpg" class="img-row6-2">
            </section>
            <br><br>
            <hr>
        </section>

        <section class="about-us-text">
            <h2>CIJENE NAŠE PONUDE</h2>
            <div class="row2">
                <div class="horses-col">
                    <img src="images/cijena1.jpg">
                    <div class="layer">
                        <p>PRIPREMA I POLAGANJE DOZVOLA - ovisi o vrsti dozvole</p>
                    </div>
                </div>
                <div class="horses-col">
                    <img src="images/cijena2.jpg">
                    <div class="layer">
                        <p>GRUPNI POSJETI ŠKOLA I VRTIĆA - ovisi o veličini grupe</p>
                    </div>
                </div>
                <div class="horses-col">
                    <img src="images/cijena3.jpg">
                    <div class="layer">
                        <p>SUDJELOVANJE NA MANIFESTACIJAMA - ovisi o trajanju i broju konja(od 20e)</p>
                    </div>
                </div>
                <div class="horses-col">
                    <img src="images/cijena4.jpg">
                    <div class="layer">
                        <p>NAJAM KONJA ZA FOTOGRAFIRANJE - ovisi o potrebnim satima (od 10e)</p>
                    </div>
                </div>
                <div class="horses-col">
                    <img src="images/cijena5.jpg">
                    <div class="layer">
                        <p>SNIMANJE REKLAMA S KONJIMA (od 30e)</p>
                    </div>
                </div>

            </div>
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