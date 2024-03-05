<!DOCTYPE html>
<html lang="sk">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videoherné enginy</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="img/icon.svg" type="image/x-icon">
  </head>
<body id="index_body">
    
    <!-- Navbar pre mobilné telefóny (hamburger) -->
    <nav class="fixed-top navbar navbar-expand-lg d-lg-none top">
        <div class="container-fluid justify-content-center ">
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <img src="img/icon.svg" alt="icon" class="rounded float-start navbar_icon" width="40" height="40">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.html">DOMOV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./unity.html">UNITY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./unreal.html">UNREAL ENGINE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./godot.html">GODOT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./kontakt.html">KONTAKT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar pre PC -->
    <header class="top fixed-top d-none d-lg-flex justify-content-center">
        <img src="img/icon.svg" alt="icon" class="rounded float-start navbar_icon" width="40" height="40">
        <a href="./index.html" class="text-white">DOMOV</a>
        <a href="./unity.html" class="text-white">UNITY</a>
        <a href="./unreal.html" class="text-white">UNREAL ENGINE</a>
        <a href="./godot.html" class="text-white">GODOT</a>
        <a href="./kontakt.html" class="text-white">KONTAKT</a>
    </header>
    <main>
        <!-- Container s hlavným textom -->
        <div class="container justify-content-center" id="index_container">
            <h1 id="index_text">Videoherné enginy</h1>
        </div><br>
        <!-- Container s hlavným obrázkom -->
        <div class="container justify-content-center" id="index_imacontainer">
        <!-- Obrázok -->
        <img src="img/wheel.png" alt="coding" width="450" height="350" class="rounded float-start" id="code1">
        </div>
    </main>

    <!-- Footer -->
    <footer>

        <!-- Container s informáciami o stránke -->
        <div class="container justify-content-center" id="index_footer">
            <p class="footer_text">Stránka je určená len na edukačné účely!</p>
            <p class="footer_text">Zdroje sú riadne uvedené!</p>

            <!-- Copyright -->
            <p>©2023 Adrián Oswald</p>
        </div>
    </footer>
	<script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
