<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--  Links  -->
    <link rel="stylesheet" href="storage/{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@500&family=Martel&display=swap" rel="stylesheet">

    <title>Home - court-circuit Nancy</title>
</head>
<body>
    <!--  Header  -->
    <header>
        <div class="navbar">
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="">A propos</a></li>
                <li><a href="">Catalogue</a></li>
                <li><a href="">Panier</a></li>
                <li><a href="">Connexion</a></li>
            </ul>
        </div>
    </header>

    <!--  Main  -->
    <main>
        <!--  Background Image  -->
        <div class="background-image">
            <div class="vignette"></div>
            <div class="background-image__text">
                <h2>Bienvenue <br> à <br> court-circuit Nancy</h2>
                <h3>le local à vivre</h3>
            </div>
        </div>

    </main>
</body>
</html>
