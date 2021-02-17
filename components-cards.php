<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

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
    <!-- Cards som er gode til call to action, der kan sættes billeder, knapper og tekst op på en nem måde -->
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-danger text-center">Gnome Child</h3>
                    </div>
                    <img class="card-img-top rounded-circle" src="https://i.ytimg.com/vi/CzYGR5nyHDc/maxresdefault.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-danger text-center">Gnome Child</h3>
                    </div>
                    <img class="card-img-top rounded-circle" src="https://i.ytimg.com/vi/CzYGR5nyHDc/maxresdefault.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-danger text-center">Gnome Child</h3>
                    </div>
                    <img class="card-img-top rounded-circle" src="https://i.ytimg.com/vi/CzYGR5nyHDc/maxresdefault.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-danger text-center">Gnome Child</h3>
                    </div>
                    <img class="card-img-top rounded-circle" src="https://i.ytimg.com/vi/CzYGR5nyHDc/maxresdefault.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-body border-top">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

<!-- Vi loader bootstrap javascript -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js" integrity="sha384-3ziFidFTgxJXHMDttyPJKDuTlmxJlwbSkojudK/CkRqKDOmeSbN6KLrGdrBQnT2n" crossorigin="anonymous"></script>
</body>
</html>