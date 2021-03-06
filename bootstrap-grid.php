<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Bootstrap Grid</title>

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


    <div class="container">

        <!-- Resposive grid som skifter i størrelse col=Mobil col-md=Tablet col-xl=Pc -->
        <div class="row">
            <div class="col-12 col-md-6 col-xl-3">
                <div class="bg-primary">Basic</div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="bg-danger">Basic</div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="bg-logoColor">Basic</div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="bg-success">Basic</div>
            </div>
        </div> <br> <br>

        <!-- Grid på 2x2 kolonner som kommer under hinanden grundet de fylder 6/12 -->
        <div class="row">
            <div class="col-6">
                <div class="bg-primary">Basic</div>
            </div>
            <div class="col-6">
                <div class="bg-danger">Basic</div>
            </div>
            <div class="col-6">
                <div class="bg-logoColor">Basic</div>
            </div>
            <div class="col-6">
                <div class="bg-success">Basic</div>
            </div>
        </div> <br> <br>

        <!-- Grid på 4x1 kolonner som fylder lige meget hver -->
        <div class="row">
            <div class="col">
                <div class="bg-primary">Basic</div>
            </div>
            <div class="col">
                <div class="bg-danger">Basic</div>
            </div>
            <div class="col">
                <div class="bg-logoColor">Basic</div>
            </div>
            <div class="col">
                <div class="bg-success">Basic</div>
            </div>
        </div> <br> <br>

        <!-- row g-3 betyder at der er en gutter på 3 som laver mere mellemrum både mellem indhold og for neden -->
        <!-- gy og gx laver mellemrum på x aksen og på y aksen hvilket vil sige den laver enten mellem eller for neden-->
        <div class="row g-2">
            <div class="col-6">
                <div class="bg-primary">Advanced</div>
            </div>
            <div class="col-6">
                <div class="bg-danger">Advanced</div>
            </div>
            <div class="col-6">
                <div class="bg-logoColor">Advanced</div>
            </div>

            <!-- Nested grid som ligger inde i den første grid del som en under sektion -->
            <div class="col-6">
                <div>
                    <div class="row g-2">
                        <div class="col-6 bg-info">
                            <div>Advanced Nested</div>
                        </div>
                            <div class="col-6 bg-secondary">
                                <div>Advanced Nested</div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Vi loader bootstrap javascript -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>