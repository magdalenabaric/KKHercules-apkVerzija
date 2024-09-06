<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rekreativno jahanje</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/style_my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-... " crossorigin="anonymous">
</head>

<body class="other-body">
    <?php include 'nav.php'; ?>

    <main>
        <img src="images/naslovna4.jpg" class="skola1">
        <h1 class="school-title">REKREATIVNO JAHANJE</h1>

        <section class="about-us-text">
            <p>
                Jahanje samo po sebi ima jako puno prednosti, počevši od fizičkih kao
                što su jačanje mišića, povećanje izdržljivosti pa sve do psihičkih kao
                što je uklanjanje anksioznosti, opuštanje i slično. Upravo iz navedenih
                razloga jako je dobro okušati se u ovome, a ukoliko nemate vremena za
                članske obaveze, a svejedno biste se htjeli okušati u ovom sportu, onda
                su za Vas sati rekreativnog jahanja. Sami odabirete kada ćete doći te
                koliko vremena imate na raspolaganju, ali ostavljamo Vam i na izbor
                želite li svoje sate provesti na terenu ili pak u manježu. Također,
                potrebno je prije ove mogućnosti odraditi školu jahanja te imati
                samostalnost u hodu, kasu i galopu.
            </p>
            <br><br><br>
            <hr>
        </section>

        <section class="img-row2">
            <img src="images/sl1.jpg">
            <img src="images/sl2.jpg">
            <img src="images/sl3.jpg">
        </section>

        <section class="about-us-text">
            <hr><br><br><br>
            <h2>Zašto odabrati baš jahanje kao aktivnost za slobodno vrijeme?</h2>
            <p>
                Ima mnogo razloga zašto je najbolji način za iskoristiti slobodno vrijeme upravo jahanje.
                Jahanje je jedan od rijetkih sportova u kojima mogu neometano sudjelovati osobe gotovo svih
                dobnih skupina bez ikakvih ograničenja. Također, jahanjem se razvija empatija za druga živa
                bića jer u ovom sportu je vrlo važan odnos jahača i konja, stoga jahač ne može misliti samo
                o sebi već istovremeno mora razmišljati o dva živa bića. Rezultat jahanja su mnoge fizičke
                i psihičke prednosti. Jačaju se prsni, trbušni i leđni mišići, razvija se snaga, izdržljivost,
                popravljaju se ravnoteža i koordinacija... S druge strane, provođenje vremena na svježem zraku
                pridonosi dišnom sustavu čovjeka, a također i uklanja stres kojeg je današnji svijet prepun.
                Jahanje kao sport ne odnosi se samo na jahanje konja već i na njihovo četkanje, osedlavanje i
                slično. Upravo time razvija se i osobina odgovornosti koja u životu ima velik značaj.
            </p>

            <img src="images/poli-rekr.jpg" class="rekr-pic">
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