<!DOCTYPE html>
<html>

<head>
    <title>Konjički klub Herculess</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/style_my.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-... " crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
</head>

<body>
    <main>
        <?php include 'nav.php'; ?>
        <section>
            <div class="container reveal">
                <img src="images/naslovna2.jpg" class="picture">

                <div class="square">
                    <a class="nav-link active" href="aboutUs.php">O nama</a><br><br>
                    <p>Škola jahanja</p><br><br>
                    <p>Terensko jahanje</p><br><br>
                    <p>Rekreativno jahanje</p><br><br>
                    <p>Ujahivanje i trening</p><br><br>
                    <p>Ostala ponuda</p>
                </div>
            </div>
            <div class="text1">
                K.K. Hercules nalazi se u srcu Baranje, a samim time pruža pogled na ljepote Hrvatske.
                <br><br>
                <a href="aboutUs.php"><button type="button">VIŠE...</button></a>
                <hr>
            </div>

        </section>
        <section>
            <div class="container reveal">
                <img src="images/naslovna2strana.jpg" class="picture">

                <div class="square">
                    <p>O nama</p><br><br>
                    <a class="nav-link active" href="skolajahanja.php">Škola jahanja</a><br><br>
                    <p>Terensko jahanje</p><br><br>
                    <p>Rekreativno jahanje</p><br><br>
                    <p>Ujahivanje i trening</p><br><br>
                    <p>Ostala ponuda</p>
                </div>
                <div class="text1">
                    Naša škola jahanja jedna je od najdugovječnijih na ovim prostorima,
                    a samim time može se pohvaliti i visokom kvalitetom.
                    <br><br><a href="skolajahanja.php"><button type="button">VIŠE...</button></a>
                    <hr>
                </div>
            </div>
        </section>
        <section>
            <div class="container reveal">
                <img src="images/naslovna3.jpg" class="picture">

                <div class="square">
                    <p>O nama</p><br><br>
                    <p>Škola jahanja</p><br><br>
                    <a class="nav-link active" href="terenskojahanje.php">Terensko jahanja</a><br><br>
                    <p>Rekreativno jahanje</p><br><br>
                    <p>Ujahivanje i trening</p><br><br>
                    <p>Ostala ponuda</p>
                </div>
                <div class="text1">
                    Baranja je jedan od najljepših dijelova Hrvatske, a kod nas imate čast na konjima razgledati sve ljepote prirode.
                    <br><br><a href="terenskojahanje.php"><button type="button">VIŠE...</button></a>
                    <hr>
                </div>
            </div>
        </section>
        <section>
            <div class="container reveal">
                <img src="images/naslovna4.jpg" class="picture">

                <div class="square">
                    <p>O nama</p><br><br>
                    <p>Škola jahanja</p><br><br>
                    <p>Terensko jahanje</p><br><br>
                    <a class="nav-link active" href="rekreativnojahanje.php">Rekreativno jahanje</a><br><br>
                    <p>Ujahivanje i trening</p><br><br>
                    <p>Ostala ponuda</p>
                </div>
                <div class="text1">
                    Ukoliko imate slobodnog vremena, jedan od najboljih načina kako ga provesti je druženje s ovim divnim životinjama.
                    <br><br><a href="rekreativnojahanje.php"><button type="button">VIŠE...</button></a>
                    <hr>
                </div>
            </div>
        </section>
        <section>
            <div class="container reveal">
                <img src="images/naslovna5.jpg" class="picture">

                <div class="square">
                    <p>O nama</p><br><br>
                    <p>Škola jahanja</p><br><br>
                    <p>Terensko jahanje</p><br><br>
                    <p>Rekreativno jahanje</p><br><br>
                    <a class="nav-link active" href="ujahivanje.php">Ujahivanje i trening</a><br><br>
                    <p>Ostala ponuda</p>
                </div>
                <div class="text1">
                    Ujahivanje i trening konja neizostavan je dio u njihovu odrastanju, a mi ćemo Vam tu pomoći.
                    <br><br><a href="ujahivanje.php"><button type="button">VIŠE...</button></a>
                    <hr>
                </div>
            </div>
        </section>
        <section>
            <div class="container reveal">
                <img src="images/naslovna6.jpg" class="picture">

                <div class="square">
                    <p>O nama</p>
                    <p>Škola jahanja</p><br><br>
                    <p>Terensko jahanje</p><br><br>
                    <p>Rekreativno jahanje</p><br><br>
                    <p>Ujahivanje i trening</p><br><br>
                    <a class="nav-link active" href="ostalo.php">Ostala ponuda</a><br><br>
                </div>
                <div class="text1">
                    Pony školu jahanja, najam konja za fotografiranje, snimanje reklama, poklon bonove i još mnogo toga možete pronaći kod nas.
                    <br><br><a href="ostalo.php"><button type="button">VIŠE...</button></a>
                    <hr>
                </div>
            </div>
        </section>



        <script>
            window.addEventListener('scroll', scroll_slides)

            function scroll_slides() {
                const reveal_slides = document.querySelectorAll('.reveal');
                for (var i = 0; i < reveal_slides.length; i++) {
                    const windowheight = window.innerHeight;
                    const revealtop = reveal_slides[i].getBoundingClientRect().top;
                    const revealpoint = 120;

                    if (revealtop < windowheight - revealpoint) {
                        reveal_slides[i].classList.add('active');
                    } else {
                        reveal_slides[i].classList.remove('active');
                    }
                }
            }

            window.addEventListener("scroll", function() {
                var nav = document.querySelector("nav");
                nav.classList.toggle("sticky", window.scrollY > 0);
            })
        </script>
    </main>
</body>


</html>