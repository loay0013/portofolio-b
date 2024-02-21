<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html class="h-100 has-background-black" lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Lasellah|Multimediedesigner portfolio</title>
    <meta name="description" content=" jeg er kreativ multimediedesigner, Jeg arbejder med web-design
      og webudvikling (HTML, CSS, JavaScript,..)">

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/b7f7f27b49.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet">
    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="J6u67RSpJQc8zAta_JrpOyyXqgVbY5zUhOjR_iK6WEQ" />
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="has-background-black">

<!-- Her skal sidens indhold ligge -->

<?php include "includes/nav.php"; ?>


<header class="is-relative h-100">
    <div class="video">
        <video playsinline autoplay muted loop id="myVideo" class="is-block has-ratio">
            <source src="images/HTML%20Tutorial%20for%20Beginners%20HTML%20Crash%20Course%20%5B2021%5D.mp4" type="video/mp4">
        </video>
        <div class="text-header has-text-centered">
            <p class="has-text-light is-size-4">
                velkommen til
            </p>
            <h1 class="has-text-light is-size-1 py-3">
                >/Lasellah>
            </h1>
        </div>

        <div class="m-2 mt-5 has-text-centered">
            <a class="button btn1" href="#projekter" >
                <p class="m-0 has-text-light">>/Projekter></p>
            </a>
        </div>
    </div>


</header>

<section  class="container mt-5">
    <div class="columns is-gapless">
        <div id="ommig" class="column is-6 is-flex is-align-items-center is-justify-content-center py-5">
            <img class="image" src="images/IMG_6051.JPG" alt="mig selv" style="width: 50%; border-radius: 8px;">
        </div>

        <div class="column is-6 py-5 is-flex is-flex-direction-column is-justify-content-end" style="padding: 3rem;">
            <h2 class="has-text-centered has-text-light py-4">
                >/Om mig>
            </h2>
            <p class="has-text-light has-text-centered" style="padding: 3rem;">
                Mit navn er Loay, 29 år og studerende inden for webudvikling.
                <br>
                Min styrke ligger inden for en bred vifte af teknologier, herunder HTML, CSS, samt forskellige CSS-frameworks.
                Derudover har jeg solid erfaring med PHP, databaser, og WordPress - inklusiv kodning og tilpasning i WordPress-miljøet.
                Jeg besidder også kompetencer inden for SEO, hvilket forstærker mit arbejde med webudvikling.
            </p>
            <div class="has-text-centered py-5">
                <a class="button is-primary" href="images/cv.pdf" target="_blank">
                    <p class="has-text-light m-0">
                        >/Se Mit CV>
                    </p>
                </a>
            </div>
        </div>
    </div>

    <div class="has-text-centered py-5">
        <div class="line">
        </div>
    </div>
</section>


<section class="container">
    <div id="projekter">
        <h2 class="has-text-light has-text-centered py-5">
            >/Projekter>
        </h2>
        <div class="columns py-5">
            <div class="column is-flex-direction-column">
                <a class="has-text-light" href="DinIndreJuvel.php">
                    <img class="py-5" src="images/dij.png" alt="Asellah">
                    <h2 class="has-text-light has-text-centered py-3">
                        Din Indre Juvel
                    </h2>
                </a>
            </div>

            <div class="column">
                <a class="has-text-light" href="marittima.php">
                    <img class="py-5" src="images/marittima.png" alt="marittima">
                    <h2 class="has-text-centered py-3 has-text-light">
                        Marittima
                    </h2>
                </a>
            </div>

            <div class="column">
                <a class="has-text-light" href="Musik.php">
                    <img class="py-5" src="images/Melsroom.png" alt="melsroom">
                    <h2 class="has-text-light has-text-centered py-3">
                        Mel´s Room
                    </h2>
                </a>
            </div>
        </div>

        <div class="has-text-centered py-5">
            <div class="line is-align-items-center">
            </div>
        </div>
    </div>
</section>



<section>
    <div id="kontakt">
        <div>
            <p class="has-text-centered has-text-light p-4">
                >/Håber at jeg har vagt din interesse.
                <br>
                Har du lyst til at vi skal arbejde sammen,
                eller vil du vide mere <br>kan jeg let kontaktes via denne formular>
            </p>
        </div>
    </div>

    <div class="has-text-centered mt-2 columns is-mobile is-centered mb-5">
        <form action="mailto:louy.hajjo21@gmail.com" method="post" enctype="text/plain">
            <div class="field">
                <label class="label has-text-light">>/Navn></label>
                <div class="control">
                    <input class="input" id="Name" name="Navn" type="text" placeholder="Dit Navn">
                </div>
            </div>

            <div class="field">
                <label class="label has-text-light">>/Mobilnummer></label>
                <div class="control">
                    <input class="input" id="phone" name="phone" type="text" placeholder="Dit Mobilnummer">
                </div>
            </div>

            <div class="field">
                <label class="label has-text-light">>/Email></label>
                <div class="control">
                    <input class="input" id="email" name="email" type="email" placeholder="Din Email">
                </div>
            </div>

            <div class="field">
                <label class="label has-text-light">>/Besked></label>
                <div class="control">
                    <textarea class="textarea" id="besked" name="besked" placeholder="Din Besked"></textarea>
                </div>
            </div>

            <div class="field is-grouped is-grouped-centered">
                <div class="control">
                    <input type="submit" value="Send" class="button is-light">
                </div>
            </div>
        </form>
    </div>
</section>



<?php include "includes/footer.php"; ?>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
