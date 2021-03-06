<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Bootstrap Utility</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Vi benytter os af bootsrap.css filen -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

    <!-- Flexbox som sikre at indholdet er på samme linje og i dette tilfæde er de i hver deres side af skærmen-->
    <div class="d-flex justify-content-between">
        <div>Flex1</div>
        <div>Flex2</div>
    </div>

    <!-- Stretched Link som gælder hele div boksen da position er sat til relative hvilket gør man kan klikke hvor som helt for at komme videre-->
    <div class="bg-primary position-relative" style="width: 200px; height: 200px;">
        <a href="https://google.dk" target="_blank" class="stretched-link">Google Stretched</a>
    </div>

<!-- Vi loader bootstrap javascript -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>