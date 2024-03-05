<!DOCTYPE html>
<html lang="sk">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unity</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="./img/icon.svg" type="image/x-icon">
  </head>
<body id="unity_body">
  
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
                        <h1>Unity</h1>
                        <p>Unity je multiplatformový herný engine vyvinutý spoločnosťou Unity Technologies, ktorý bol prvýkrát oznámený a vydaný v júni 2005 na konferencii Apple Worldwide Developers Conference ako herný engine pre Mac OS X. Odvtedy bol engine postupne rozšírený tak, aby podporoval rôzne platformy pre počítače, mobilné zariadenia, konzoly a virtuálnu realitu. Je obľúbený najmä pre vývoj mobilných hier pre systémy iOS a Android, považuje sa za ľahko použiteľný pre začínajúcich vývojárov a je populárny pre vývoj nezávislých hier.

                            Engine sa dá použiť na tvorbu trojrozmerných (3D) a dvojrozmerných (2D) hier, ako aj interaktívnych simulácií a iných zážitkov. engine si osvojili aj odvetvia mimo videoherného priemyslu, napríklad filmový, automobilový, architektonický, strojársky, stavebný a ozbrojené sily Spojených štátov.</p>

                            <!-- Zdroj informácii -->
                            <p><a class="zdroj" href="https://en.wikipedia.org/wiki/Unity_(game_engine)" target="_blank">Zdroj</a></p>

                            <!-- Link na oficiálnu stránku -->
                            <a href="https://unity.com/" class="btn btn-success" role="button">Oficiálna stránka</a>
                    </div>

                    <!-- Banner obrázok -->
                    <div class="col-sm-7">
                        <img class="img-fluid mx-auto d-block" src="img/unity_placeholder.jpg" alt="unity placeholder">
                    </div>
                </div>
            </div>
        </div>

        <!-- Container s Históriou -->
        <div class="container border border-2 border-dark rounded bg-dark justify-content-center history_container">
         <h2>História</h2><br>

         <!-- Link na zdroj -->
         <p><a class="zdroj" href="https://en.wikipedia.org/wiki/Unity_(game_engine)" target="_blank">Zdroj</a></p>
         <hr>

         <!-- Akordeón -->
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">

              <!-- Akordeón Nadpis -->
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Unity 2.0 (2007)
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">

              <!-- Akordeón Text -->
              <div class="accordion-body">
                Unity 2.0 bolo uvedené na trh v roku 2007 s približne 50 novými funkciami. verzia obsahovala optimalizovaný terénny engine pre detailné 3D prostredia, dynamické tiene v reálnom čase, smerové svetlá a reflektory, prehrávanie videa a ďalšie funkcie. verzia tiež pridala funkcie, vďaka ktorým mohli vývojári ľahšie spolupracovať. Obsahovala sieťovú vrstvu pre vývojárov na vytváranie hier pre viacerých hráčov založenú na protokole User Datagram Protocol, ktorá ponúkala preklad sieťových adries, synchronizáciu stavu a volanie vzdialených procedúr. Keď spoločnosť Apple v roku 2008 spustila svoj obchod App Store, Unity rýchlo pridalo podporu pre iPhone. Niekoľko rokov bol engine na iPhone bezkonkurenčný a stal sa známym medzi vývojármi hier pre iOS.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">

              <!-- Akordeón Nadpis -->
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Unity 3.0 (2010)
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">

              <!-- Akordeón Text -->
              <div class="accordion-body">
                Unity 3.0 bolo uvedené na trh v septembri 2010 a obsahovalo funkcie rozširujúce grafické funkcie enginu pre stolové počítače a herné konzoly. Okrem podpory Androidu obsahovalo Unity 3 okrem iného integráciu nástroja Beast Lightmap od spoločnosti Illuminate Labs, odložené vykresľovanie, zabudovaný editor stromov, natívne vykresľovanie písma, automatické UV mapovanie a zvukové filtre. V roku 2012 VentureBeat napísal: "Len málo spoločností prispelo k toku nezávisle produkovaných hier tak ako Unity Technologies. Viac ako 1,3 milióna vývojárov používa jej nástroje na vytváranie gee-whiz grafiky vo svojich hrách pre iOS, Android, konzoly, PC a webové hry. Unity chce byť engine pre multiplatformové hry, bodka. V prieskume časopisu Game Developer z mája 2012 sa Unity označil za najlepší herný engine pre mobilné platformy.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">

              <!-- Akordeón Nadpis -->
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Unity 4.0 (2012)
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">

              <!-- Akordeón Text -->
              <div class="accordion-body">
                V novembri 2012 spoločnosť Unity Technologies dodala Unity 4.0. Táto verzia pridala podporu DirectX 11 a Adobe Flash, nové animačné nástroje s názvom Mecanim a prístup k náhľadu pre Linux.

            V roku 2013 spoločnosť Facebook integrovala softvérovú vývojovú sadu pre hry využívajúce herný engine Unity, ktorá obsahovala nástroje umožňujúce sledovanie reklamných kampaní a hĺbkové prepojenie, pri ktorom boli používatelia priamo prepojení z príspevkov na sociálnych sieťach na konkrétne časti v hrách, a jednoduché zdieľanie obrázkov v hrách. v roku 2016 spoločnosť Facebook vyvinula novú platformu pre počítačové hry so systémom Unity. Unity poskytovalo podporu pre herné platformy Facebooku a vývojári Unity mohli rýchlejšie exportovať a publikovať hry na Facebooku.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">

              <!-- Akordeón Nadpis -->
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Unity 5 (2015)
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">

              <!-- Akordeón Text -->
              <div class="accordion-body">
                The Verge povedal o vydaní Unity 5 v roku 2015: "Unity začalo s cieľom urobiť vývoj hier univerzálne prístupným. Unity 5 je dlho očakávaným krokom k tejto budúcnosti.V Unity 5 engine vylepšil osvetlenie a zvuk. Prostredníctvom WebGL mohli vývojári Unity pridať svoje hry do kompatibilných webových prehliadačov bez toho, aby hráči potrebovali zásuvné moduly. Unity 5.0 ponúklo globálne osvetlenie v reálnom čase, náhľady svetelných máp, Unity Cloud, nový zvukový systém a fyzikálny engine Nvidia PhysX 3.3. Unity 5.0 ponúka aj nové funkcie. Piata generácia enginu Unity tiež predstavila Cinematic Image Effects, ktoré pomáhajú, aby hry Unity vyzerali menej genericky. 5.6 Unity pridalo nové efekty osvetlenia a častíc, aktualizovalo celkový výkon enginu a pridalo natívnu podporu pre Nintendo Switch, Facebook Gameroom, Google Daydream a grafické API Vulkan.
              </div>
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
                    <img src="img/unity1.png" class="d-block w-100" alt="unityscreenshot1">
                  </div>

                  <!-- Druhý obrázok -->
                  <div class="carousel-item">
                    <img src="img/unity2.png" class="d-block w-100" alt="unityscreenshot2">
                  </div>

                  <!-- Tretí obrázok -->
                  <div class="carousel-item">
                    <img src="img/unity3.png" class="d-block w-100" alt="unityscreenshot3">
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

        <!-- Container so zoznamom výhod/nevýhod -->
        <div class="container border border-2 border-dark rounded bg-dark justify-content-center image_container">
            <h2>Výhody</h2>
            <hr>

            <!-- Zoznam výhod -->
            <ul class="list-group bg-dark text-light">
                <li class="list-group-item bg-dark text-light">Veľká komunitná podpora a rozsiahla dokumentácia pre začiatočníkov.</li>
                <li class="list-group-item bg-dark text-light">Vývoj na rôznych platformách vrátane mobilných zariadení, stolových počítačov, konzol a AR/VR.</li>
                <li class="list-group-item bg-dark text-light">Obchod s Assetmi ponúka široký sortiment predpripravených assetov a doplnkov pre rýchly vývoj.</li>
                <li class="list-group-item bg-dark text-light">Jednoduché používateľské rozhranie a vizuálny editor pre rýchle prototypovanie.</li>
                <li class="list-group-item bg-dark text-light">Vhodný pre nezávislých vývojárov a malé tímy vďaka nižšej vstupnej bariére.</li>
                <li class="list-group-item bg-dark text-light">Silná podpora pre vývoj 2D hier.</li>
                <li class="list-group-item bg-dark text-light">Prispôsobivosť a flexibilita pre tvorbu hier v 2D aj 3D.</li>
                <li class="list-group-item bg-dark text-light">Podpora pre programovací jazyk C#, ktorý je známy svojou jednoduchosťou.</li>
                <li class="list-group-item bg-dark text-light">Pravidelné aktualizácie a zlepšenia na základe spätnej väzby užívateľov.</li>
                <li class="list-group-item bg-dark text-light">Škálovateľnosť pre jednoduché aj komplexné projekty.</li>
            </ul><br>      
            <h2>Nevýhody</h2>
            <hr>

            <!-- Zoznam nevýhod -->
            <ul class="list-group bg-dark text-light">
                <li class="list-group-item bg-dark text-light">Obmedzenia výkonu pre grafiku vyššej úrovne kvôli svojej architektúre.</li>
                <li class="list-group-item bg-dark text-light">Tazšie učenie pre pokročilé funkcie a optimalizácie.</li>
                <li class="list-group-item bg-dark text-light">Obmedzené grafické schopnosti v porovnaní s Unreal Engine priamo zo základu.</li>
                <li class="list-group-item bg-dark text-light">Nástroje vstavané do enginu môžu byť menej robustné v porovnaní s Unreal pre určité funkcionality.</li>
                <li class="list-group-item bg-dark text-light">Kvalita grafiky môže vyžadovať dodatočné úsilie a optimalizáciu.</li>
                <li class="list-group-item bg-dark text-light">Licenčné poplatky alebo podiel zo zisku pre komerčné projekty prekračujúce určité hranice.</li>
                <li class="list-group-item bg-dark text-light">Sieťové a multiplayerové funkcie môžu vyžadovať riešenia tretích strán.</li>
                <li class="list-group-item bg-dark text-light">Náročnejšie pre fotorealistické renderovanie a filmové zážitky.</li>
                <li class="list-group-item bg-dark text-light">Vyžaduje doplnkové pluginy alebo rozšírenia pre niektoré pokročilé funkcie.</li>
                <li class="list-group-item bg-dark text-light">Aktualizácie môžu prinášať problémy s kompatibilitou so existujúcimi projektmi.</li>
            </ul>
            <hr>
            <br>
        </div>

        <!-- Container s tabuľkou o cenách licencii -->
        <div class="container border border-2 border-dark rounded bg-dark justify-content-center pricing_container">
            <h1>Cena</h1>
            <p><a class="zdroj" href="https://unity.com/pricing" target="_blank">Zdroj</a></p>

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
                    <th scope="row">Student</th>
                    <td>Zdarma</td>
                  </tr>
                  <tr>
                    <th scope="row">Personal</th>
                    <td>Zdarma</td>
                  </tr>
                  <tr>
                    <th scope="row">Unity Pro</th>
                    <td>170€ Mesačne/1 877€ Ročne</td>
                  </tr>
                  <tr>
                    <th scope="row">Unity Enterprise</th>
                    <td>Kontaktujte <a href="https://unity.com/pricing#plans-enterprise">Unity</a></td>
                  </tr>
                  <tr>
                    <th scope="row">Unity Industry</th>
                    <td>414€ Mesačne/4 554€ Ročne</td>
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
