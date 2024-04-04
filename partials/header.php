<!DOCTYPE html>
<html lang="sk">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videoherné enginy</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="./img/icon.svg" type="image/x-icon">
  </head>
    
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
                        <a class="nav-link" href="./index.php">DOMOV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./unity.php">UNITY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./unreal.php">UNREAL ENGINE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./godot.php">GODOT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./kontakt.php">KONTAKT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar pre PC -->
    <header class="top fixed-top d-none d-lg-flex justify-content-center">
        <img src="img/icon.svg" alt="icon" class="rounded float-start navbar_icon" width="40" height="40">
        <a href="./index.php" class="text-white">DOMOV</a>
        <a href="./unity.php" class="text-white">UNITY</a>
        <a href="./unreal.php" class="text-white">UNREAL ENGINE</a>
        <a href="./godot.php" class="text-white">GODOT</a>
        <a href="./kontakt.php" class="text-white">KONTAKT</a>
    </header>