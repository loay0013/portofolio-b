<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html class="h-100 has-background-black" lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Din indre Juvel</title>
    <meta name="description" content="Din indre Juvel er en forretning der udbyder spirituelle og alternative produkter, som f.eks. røgelse og urter. ">
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
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="h-100 has-background-black">
<?php include "includes/nav.php"; ?>

<div class="has-text-centered mt-5 p-5">
    <figure class="image is-inline-block">
        <img src="images/dijlogofooterhvid.svg" alt="logo">
    </figure>
</div>
<div>
    <h1 class="has-text-light p-4 has-text-centered mt-5 p-5 ">
        Din Indre Juvel
    </h1>
</div>
<!-- Link to website -->
<div class="has-text-centered mt-5 p-5">
    <a class="has-text-link" href="https://dinindrejuvel.dk/" target="_blank">
        <h2>/Link til Github></h2>
    </a>
</div>
<!-- Text -->
<h2 class="has-text-light has-text-centered pt-4">
    >/Projekt uden for skoletiden>
</h2>
<div class="container mt-5 p-5">
    <p class="has-text-light my-4 p-4">
        Din Indre Juvel er en forretning der udbyder spirituelle og alternative produkter, som f.eks. røgelse og urter.
        Som et led i Din Indre Juvels forretningsstrategi, har de valgt at tilbyde deres varesortiment online via en webshop.
        Jeg har skabt deres webshop ved brug af WordPress. Jeg har stået for alt det tekniske
        ved projektet - inklusive skabelsen af logo, og varefotografering.
    </p>
</div>
<!-- Link to next project -->
<div class="has-text-centered pb-5 mt-5 p-5">
    <a class="næste" href="dijblog.php">
        <h2>>/Næste projekt></h2>
    </a>
</div>



<?php include "includes/footer.php"; ?>


</body>
</html>
