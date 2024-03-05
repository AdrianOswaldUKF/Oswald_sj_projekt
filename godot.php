<!DOCTYPE html>
<html lang="sk">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Godot Engine</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="./img/icon.svg" type="image/x-icon">
  </head>
<body id="godot_body">

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

        <!-- Banner -->
         <div class="banner">
            <div class="container border border-2 border-dark rounded bg-dark justify-content-center start_container">
                <div class="row">

                    <!-- Banner text -->
                    <div class="col-sm-5">
                        <h1>Godot Engine</h1>
                        <p>Godot je multiplatformový, bezplatný a open-source herný engine vydaný pod permissívnou licenciou MIT. Bol pôvodne vyvinutý argentínskymi softvérovými vývojármi Juanom Linietsky a Arielom Manzurom pre niekoľko spoločností v Latinskej Amerike pred jeho verejným uvedením v roku 2014. Vývojové prostredie beží na mnohých platformách a môže exportovať aj do ďalších. Je navrhnutý na vytváranie 2D aj 3D hier zameraných na PC, mobilné zariadenia a webové platformy a môže byť tiež použitý na vývoj softvéru neobmedzeného na hry, vrátane editorov.</p>

                            <!-- Zdroj informácii -->
                            <p><a class="zdroj" href="https://en.wikipedia.org/wiki/Godot_(game_engine)" target="_blank">Zdroj</a></p>

                            <!-- Link na oficiálnu stránku -->
                            <a href="https://godotengine.org/" class="btn btn-success officialstranka" role="button">Oficiálna stránka</a>
                    </div>

                    <!-- Banner obrázok -->
                    <div class="col-sm-7">
                        <img class="img-fluid mx-auto d-block" src="img/godot_placeholder.jpg" alt="godot engine placeholder">
                    </div>
                </div>
            </div>
        </div>

        <!-- Container s Históriou -->
        <div class="container border border-2 border-dark rounded bg-dark justify-content-center history_container">
         <h2>História</h2><br>


         <!-- Link na zdroj -->
         <p><a class="zdroj" href="https://en.wikipedia.org/wiki/Godot_(game_engine)" target="_blank">Zdroj</a></p>
         <hr>

         <!-- Akordeón -->
         <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">

              <!-- Akordeón Nadpis -->
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Obdobie Closed-Source (2001–2014)
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">

              <!-- Akordeón Text -->
              <div class="accordion-body">
                Juan 'reduz' Linietsky a Ariel 'punto' Manzur spoluzaložili spoločnosť Codenix v roku 1999, konzultačnú spoločnosť pre vývoj hier. Už v roku 2001 začali pracovať na engine-i s kódovým názvom "Larvotor", ktorý bol licencovaný tretím stranám v Argentíne. Počas nasledujúcich desiatich rokov bol engine premenovaný na "Legacy", "NG3D", "Larvita" a nakoniec na "Godot". Názov "Godot" bol zvolený kvôli jeho vzťahu k divadelnej hre Samuela Becketta Čakanie na Godota, pretože reprezentuje nekonečné túžby po pridávaní nových funkcií do enginu, ktoré by ho priblížili k vyčerpávajúcemu produktu, ale nikdy sa to nedosiahne. Linietsky a Manzur sa pridali k spoločnosti OKAM a spolupracovali so viacerými štúdiami v období uzavretého zdrojového kódu vrátane Square Enix. Linietsky naznačil, že ich práca bola vtedy ovplyvnená politickou a ekonomickou nestabilitou v Argentíne.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">

              <!-- Akordeón Nadpis -->
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Éra voľného a Open-Source softvéru (2014 - súčasnosť)
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">

              <!-- Akordeón Text -->
              <div class="accordion-body">
                K roku 2014 plánoval Linietsky odísť z Argentíny a uvoľnil zdrojový kód pre Godot verejnosti na platforme GitHub pod licenciou MIT. Godot sa pripojil k organizácii Software Freedom Conservancy (SFC) 4. novembra 2015. 22. júna 2016 získal Godot ocenenie "Mission Partners" vo výške 20 000 dolárov od Mozilla Open Source Support (MOSS), ktoré bolo určené na pridanie podpory pre WebSockets, WebAssembly a WebGL 2.0.

                Aktualizácia 3.0 pre Godot zahŕňala riešenie dlhého zoznamu požadovaných funkcií, ktoré vyžadovali výraznú prepracovanie enginu, čo bolo v období uzavretého zdrojového kódu nemožné z dôvodu komerčných obmedzení. S podporou Miguela de Icazu získal Godot v roku 2017 dar vo výške 24 000 dolárov od Microsoftu na implementáciu jazyka C# ako skriptovacieho jazyka v Godote. Bola spustená platforma Patreon, vďaka ktorej mohli Linietsky a Verschelde pracovať na projekte na plný úväzok. Verzia 3.0 bola uvedená na trh v roku 2018. Aktualizácia 3.1 pridala renderovač OpenGL ES 2.0 zameraný na mobilné zariadenia, pretože v tom čase bola podpora ES 3.0 zo strany výrobcov obmedzená.

                V roku 2019 boli založené dva tímy, pričom tím Linietského sa zameral na vetvu Vulkan (následne vydanú ako 4.0), a tím Verschelde pokračoval v aktualizáciách pre vetvu 3.x. Linietsky naznačil, že problémom bolo, že vetva 3.x bola vytvorená so staršími architektonickými princípmi, ako sú jednojadrové procesory. Preto bola úmyslom prebudovať jadrové architektúry pre 4.0 a zohľadniť moderné princípy.

                V roku 2020 získal Godot ocenenie vo výške 250 000 dolárov od spoločnosti Epic Games na vylepšenie grafického renderovania a jazyka GDScript, ktorý bol použitý na financovanie Linietského a Georgea Marquesa na dva roky a uvoľnenie finančných prostriedkov z donácií na iné účely. Godot tiež získal granty od Reality Labs spoločnosti Meta Platforms v rokoch 2020 a 2021. Vetva 4.0 bola vydávaná vo forme alfy na začiatku roku 2022 a bola v priebehu roka doladená. V auguste Linietsky a niekoľko ďalších členov tímu Godot založili spoločnosť W4 Games, ktorá ponúka komerčné služby založené na enginu, vrátane portov na konzoly, ktoré nemôžu byť zahrnuté do jeho open-source kódového základu. V novembri Godot oznámil plány prechodu zo SFC na vlastnú novovytvorenú Godot Foundation.

                Plné vydanie aktualizácie 4.0 s podporou Vulkanu sa uskutočnilo v roku 2023, ako aj príchod Godot enginu na platformu Epic Games Store. Verzia na platforme Epic je identická s ostatnými z hľadiska obsahu a licencie, pričom platforma slúži len ako distribučný kanál a na aktualizácie. V septembri spoločnosť Unity Technologies oznámila zásadné zmeny v licencovaní pre Unity engine vrátane pridania "poplatkov za spustenie", ktoré by účtovali používateľov pri inštalácii hier v Unity. V dôsledku toho darovala spoločnosť Re-Logic 100 000 dolárov Godotu a ďalej oznámila, že bude prispievať 1 000 dolárov mesačne, aby podporila open-source alternatívu k Unity.
              </div>
            </div>
          </div>
        </div>

        <!-- Container so Slideshow -->
        <div class="container border border-2 border-dark rounded bg-dark justify-content-center image_container">
            <h2>Obrázky</h2>

            <!-- Slideshow (Carousel) -->
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    
                  <!-- Prvý obrázok -->
                  <div class="carousel-item active">
                    <img src="img/godot1.png" class="d-block w-100" alt="godotscreenshot1">
                  </div>

                  <!-- Druhý obrázok -->
                  <div class="carousel-item">
                    <img src="img/godot2.webp" class="d-block w-100" alt="godotscreenshot2">
                  </div>

                  <!-- Tretí obrázok -->
                  <div class="carousel-item">
                    <img src="img/godot3.png" class="d-block w-100" alt="godotscreenshot3">
                  </div>
                </div>

                <!-- Predošlý obrázok -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>

                <!-- Další obrázok -->
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
         </div>

        <!-- Container so zoznamom výhod/nevýhod -->
        <div class="container border border-2 border-dark rounded bg-dark justify-content-center image_container">
            <h2>Výhody</h2>
            <hr>

            <!-- Zoznam výhod -->
            <ul class="list-group bg-dark text-light">
                <li class="list-group-item bg-dark text-light">Open-source: Prístup k celému zdrojovému kódu umožňuje prispôsobenie a vývoj podľa komunity.</li>
                <li class="list-group-item bg-dark text-light">Multiplatformovosť: Podporuje viaceré platformy ako Windows, macOS, Linux, Android, iOS a web, čo zjednodušuje distribúciu.</li>
                <li class="list-group-item bg-dark text-light">Jednoduchosť použitia: Intuitívne rozhranie a skriptovací jazyk (GDScript) zjednodušujú vývoj hier pre začiatočníkov.</li>
                <li class="list-group-item bg-dark text-light">Nízka hmotnosť: Engine je ľahký, čo vedie k rýchlejšiemu načítaniu a lepšej výkonnosti, najmä na zariadeniach s nižšími špecifikáciami.</li>
                <li class="list-group-item bg-dark text-light">Aktívna komunita: Oddaná a rastúca komunita poskytuje podporu, návody a zdroje pre užívateľov.</li>
                <li class="list-group-item bg-dark text-light">Vizuálne programovanie: Ponúka vizuálny systém programovania okrem kódovania, čo umožňuje neprogramátorom vytvárať hry.</li>
                <li class="list-group-item bg-dark text-light">Podpora 2D a 3D: Schopný pracovať s 2D aj 3D vývojom hier s integrovanými nástrojmi pre obidva typy hier.</li>
                <li class="list-group-item bg-dark text-light">Pravidelné aktualizácie: Neustále vylepšenia a aktualizácie prinášajú nové funkcie a zlepšenia do enginu.</li>
                <li class="list-group-item bg-dark text-light">Fyzikálny engine: Integrovaný fyzikálny engine zjednodušuje implementáciu realistických fyzikálnych efektov.</li>
                <li class="list-group-item bg-dark text-light">Bez licenčných poplatkov: Žiadne licenčné poplatky, čo umožňuje vývojárom zarábať plné zisky z ich hier.</li>
            </ul><br>      
            <h2>Nevýhody</h2>
            <hr>

            <!-- Zoznam nevýhod -->
            <ul class="list-group bg-dark text-light">
                <li class="list-group-item bg-dark text-light">Obmedzené zdroje: V porovnaní s niektorými inými enginmi môže mať Godot menší obchod s prostriedkami a menej tretích strán ponúkajúcich zdroje.</li>
                <li class="list-group-item bg-dark text-light">Krivka učenia: Aj keď je priateľský pre začiatočníkov, ovládnutie pokročilejších funkcií môže vyžadovať čas a úsilie.</li>
                <li class="list-group-item bg-dark text-light">Adoptácia na trhu: Nie je tak široko prijímaný ako niektoré iné enginy, čo môže viesť k menšiemu množstvu zdieľaných zdrojov a podpory komunity.</li>
                <li class="list-group-item bg-dark text-light">Iba GDScript: Hoci je výkonný, GDScript môže obmedziť vývojárov, ktorí uprednostňujú prácu s inými programovacími jazykmi.</li>
                <li class="list-group-item bg-dark text-light">Výkon pri veľkých projektoch: Manipulácia s veľkými projekty môže spôsobiť výkonnostné problémy v porovnaní s niektorými inými enginmi.</li>
                <li class="list-group-item bg-dark text-light">Menej zabudovaných nástrojov: Môže chýbať niektoré špecializované zabudované nástroje dostupné v iných enginoch pre špecifické úlohy.</li>
                <li class="list-group-item bg-dark text-light">Optimalizácia pre mobilné zariadenia: Aj keď sa zlepšuje, optimalizácia pre mobilné zariadenia môže potrebovať ďalšie vylepšenia pre určité typy zariadení.</li>
                <li class="list-group-item bg-dark text-light">Pipeline pre zdroje: Pracovný postup pre import a manipuláciu so zdrojmi môže byť menej prepracovaný v porovnaní s inými enginmi.</li>
                <li class="list-group-item bg-dark text-light">Veľkosť komunity: Aj keď rastie, komunita môže byť menšia v porovnaní s etablovanými enginmi, čo ovplyvňuje dostupnú podporu.</li>
            </ul>
            <hr>
            <br>
        </div>

        <!-- Container s tabuľkou o cenách licencii -->
        <div class="container border border-2 border-dark rounded bg-dark justify-content-center pricing_container">
            <h1>Cena</h1>
            <p><a class="zdroj" href="https://godotengine.org/license/" target="_blank">Zdroj</a></p>

            <!-- Tabuľka s cenami licencii -->
            <table class="table table-dark">   
                <thead>
                  <tr>
                    <th scope="col">Edícia</th>
                    <th scope="col">Cena</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Licencia</th>
                    <td>Zdarma</td>
                  </tr>
                </tbody>
              </table>
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
