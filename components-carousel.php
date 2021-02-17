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

    <!-- Kode eksempel på coursel fra bootstrap -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="1000">
                <img class="d-block w-100" src="https://scontent-cph2-1.xx.fbcdn.net/v/t1.0-9/62511738_2512152185485403_2482693286968426496_n.jpg?_nc_cat=103&ccb=3&_nc_sid=8bfeb9&_nc_ohc=-dBUiHAQBMwAX9DVGV-&_nc_ht=scontent-cph2-1.xx&oh=332cd71092f35d3f482b3299dd8d1313&oe=60526B83" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-primary">Gnome</h5>
                    <p class="text-primary">Child 1</p>
                </div>
            </div>
            <div class="carousel-item" data-interval="1000">
                <img class="d-block w-100" src="https://www.pngitem.com/pimgs/m/88-889877_transparent-gnome-child-png-gnome-child-png-download.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-primary">Gnome</h5>
                    <p class="text-primary">Child 2</p>
                </div>
            </div>
            <div class="carousel-item" data-interval="1000">
                <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYRZ16n7EELYq79fouS6exRuhGHIIM7gAzJQ&usqp=CAU" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-primary">Gnome</h5>
                    <p class="text-primary">Child 3</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-primary bg-dark" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Forrige</span>
        </a>
        <a class="carousel-control-next text-primary bg-dark" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Næste</span>
        </a>
    </div>


<!-- Vi loader bootstrap javascript -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js" integrity="sha384-3ziFidFTgxJXHMDttyPJKDuTlmxJlwbSkojudK/CkRqKDOmeSbN6KLrGdrBQnT2n" crossorigin="anonymous"></script>
</body>
</html>