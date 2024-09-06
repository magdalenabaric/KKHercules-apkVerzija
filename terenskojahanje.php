<!DOCTYPE html>
<html lang="en">

<head>
    <title>Terensko jahanje</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/style_my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-... " crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body class="other-body">
    <?php include 'nav.php'; ?>

    <main>
        <img src="images/teren.jpg" class="skola1">
        <h1 class="school-title">TERENSKO JAHANJE</h1>

        <section class="about-us-text">
            <p>
                Terensko jahanje jedinstvena je prilika za uživanje u ljepotama krajolika
                Baranje u društvu ovih predivnih stvorenja. Rijeka Drava, Kopački rit i
                još razni puteljci koji vode kroz samo srce jednog od najljepših krajolika
                u cijeloj Hrvatskoj. Radimo terenska jahanja neovisno o prethodnom
                iskustvu jahača, stoga bilo da ste početnik ili iskusni jahač rado
                ćemo vas provesti kroz sve ljepote ovog kraja.
            </p>
            <br><br><br>
            <hr>
        </section>

        <section class="img-row">
            <img src="images/terenski (3).jpg">
            <img src="images/terenski (1).jpg">
            <img src="images/terenski (2).jpg">
        </section>

        <section class="about-us-text">
            <hr><br><br><br>
            <p>
                Prije odlaska na sam teren Vaše jahačko znanje provjerit će se u manježu
                kako bismo mogli prilagoditi rutu Vašim sposobnostima te kako bismo mogli
                poduzetI sve sigurnosne mjere. Na terenu vodit će Vas naše iskusne
                trenerice.
            </p>

        </section>
        <section class="about-us-text">
            <h2>Cijena terenskog jahanja:</h2>
            <div class="euro">
                <i class="fas fa-euro-sign"></i>
                <div class="layer">
                    <p><strong>20 eura</strong>, 1 sat</p>
                </div>
            </div>
            <br><br>
            <hr>
        </section>


        <section class="img-row">
            <img src="images/terens (3).jpg">
            <img src="images/terens (2).jpg">
            <img src="images/terens (1).jpg">

        </section>
        <br><br>
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