<?php
include_once('partials/header.php');
?>
<body id="unreal_body">
      <!-- Banner -->
         <div class="banner">
            <div class="container border border-2 border-dark rounded bg-dark justify-content-center start_container">
                <div class="row">

                    <!-- Banner text -->
                    <div class="col-sm-5">
                        <h1>Unreal Engine</h1>
                        <p>Unreal Engine (UE) je séria herných enginov pre 3D počítačovú grafiku vyvinutá spoločnosťou Epic Games, ktorá bola prvýkrát predstavená v roku 1998 v strieľačke z pohľadu prvej osoby Unreal. Pôvodne bol vyvinutý pre počítačové strieľačky z pohľadu prvej osoby, ale odvtedy sa používa v rôznych žánroch hier a bol prijatý aj v iných odvetviach, najmä vo filmovom a televíznom priemysle. Unreal Engine je napísaný v jazyku C++ a vyznačuje sa vysokou mierou prenosnosti, pričom podporuje širokú škálu platforiem pre stolové počítače, mobilné zariadenia, konzoly a virtuálnu realitu.

                            Najnovšia generácia, Unreal Engine 5, bola uvedená na trh v apríli 2022. Jeho zdrojový kód je k dispozícii na GitHub a komerčné využitie sa poskytuje na základe modelu licenčných poplatkov, pričom spoločnosť Epic si účtuje 5 % z príjmov nad 1 milión USD, od ktorých sa upúšťa v prípade hier uverejnených v obchode Epic Games Store. Epic do enginu zahrnul funkcie od získaných spoločností, ako je Quixel, čo sa považuje za pomoc pri príjmoch Fortnite.
                            
                            V roku 2014 bol Unreal Engine vyhlásený Guinnessovou knihou rekordov za "najúspešnejší videoherný engine na svete".</p>

                            <!-- Zdroj informácii -->
                            <p><a class="zdroj" href="https://en.wikipedia.org/wiki/Unreal_Engine" target="_blank">Zdroj</a></p>

                            <!-- Link na oficiálnu stránku -->
                            <a href="https://www.unrealengine.com/en-US" class="btn btn-success officialstranka" role="button">Oficiálna stránka</a>
                    </div>

                    <!-- Banner obrázok -->
                    <div class="col-sm-7">
                        <img class="img-fluid mx-auto d-block" src="img/unreal_placeholder.jpg" alt="unreal engine placeholder" id="unreal_placeholder">
                    </div>
                </div>
            </div>
        </div>

        <!-- Container s Históriou -->
        <div class="container border border-2 border-dark rounded bg-dark justify-content-center history_container">
         <h2>História</h2><br>

         <!-- Link na zdroj -->
         <p><a class="zdroj" href="https://en.wikipedia.org/wiki/Unreal_Engine" target="_blank">Zdroj</a></p>
         <hr>


         <!-- Akordeón -->
         <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">

              <!-- Akordeón Nadpis -->
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Prvá Generácia
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">

              <!-- Akordeón Text -->
              <div class="accordion-body">
                Prvá generácia Unreal Engine bola vyvinutá Timom Sweeneyom, zakladateľom spoločnosti Epic Games. Po vytvorení editačných nástrojov pre jeho shareware hry ZZT (1991) a Jill of the Jungle (1992), Sweeney začal v roku 1995 písať engine pre výrobu hry, ktorá neskôr vznikla ako first-person shooter známy ako Unreal. Po niekoľkých rokoch vývoja sa engine prvýkrát predstavil pri uvedení hry v roku 1998, aj keď MicroProse a Legend Entertainment mali už oveľa skôr prístup k tejto technológii a licencovali ju v roku 1996. Podľa rozhovoru napísal Sweeney 90 percent kódu v engine, vrátane grafiky, nástrojov a systému pre pripojenie sietí.

                Pôvodne sa engine úplne spoliehal na softvérové vykresľovanie, čo znamenalo, že výpočty grafiky vykonávala centrálne spracovávajúca jednotka (CPU). Avšak v priebehu času dokázal využívať možnosti poskytované dedikovanými grafickými kartami, s dôrazom na API Glide, špeciálne navrhnuté pre 3dfx akcelerátory. Hoci bola podpora pre OpenGL a Direct3D, uvádzali pomalší výkon v porovnaní s Glide kvôli ich nedostatočnému riadeniu textúr v danom období. Sweeney sa osobitne vyjadril o kvalite ovládačov OpenGL pre spotrebiteľský hardware, opisujúc ich ako "extrémne problematické, chybné a netestované", a označil kód implementácie za "strašný" na rozdiel od jednoduchšej a čistejšej podpory pre Direct3D. Pokiaľ ide o zvuk, Epic využíval Galaxy Sound System, softvér vytvorený v assembleri, ktorý integroval technológie EAX a Aureal a umožňoval používanie tracker hudby, čo poskytlo dizajnérom úrovní flexibilitu v tom, ako sa hudba hrala v konkrétnom bode na mapách. Steve Polge, autor doplnku Reaper Bots pre Quake, naprogramoval systém umelej inteligencie na základe znalostí, ktoré získal u svojho predchádzajúceho zamestnávateľa IBM pri navrhovaní routerových protokolov.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">

              <!-- Akordeón Nadpis -->
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Unreal Engine 2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">

              <!-- Akordeón Text -->
              <div class="accordion-body">
                V októbri informovala stránka IGN na základe rozhovoru so spoločnosťou Voodoo Extreme, že Sweeney robí výskum pre svoj engine nasledujúcej generácie. S vývojom začatým o rok neskôr, druhá verzia sa predstavila v roku 2002 s hrou America's Army, bezplatným multiplayerovým strieľačom vyvinutým armádou USA ako nástroj pre nábor. Krátko potom by Epic vydal Unreal Championship pre Xbox, jeden z prvých hier využívajúcich službu Xbox Live od Microsoftu.

                Aj keď táto generácia bola založená na svojom predchodcovi, videli sme významný pokrok v oblasti vykresľovania, ako aj nové vylepšenia v sade nástrojov. Engine bol schopný spúšťať úrovne takmer 100-krát podrobnejšie ako tie v hre Unreal, integroval rôzne funkcie, vrátane nástroja pre kinematografické úpravy, časticových systémov, exportných doplnkov pre 3D Studio Max a Maya a systému skeletálnej animácie, ktorý bol prvýkrát predstavený v verzii pre PlayStation 2 hry Unreal Tournament. Okrem toho bola používateľská rozhranie pre UnrealEd prepísaná v jazyku C++ s využitím sady nástrojov wxWidgets, o ktorej Sweeney povedal, že vtedy bola "najlepšou dostupnou vecou".

                Epic využívala fyzikálny engine Karma, softvér od tretej strany od štúdia Math Engine so sídlom vo Veľkej Británii, na riadenie fyzikálnych simulácií, ako sú kolízie hráčov typu ragdoll a ľubovoľná dynamika tuhých tiel. S Unreal Tournament 2004 bola úspešne implementovaná hratelnosť s vozidlami, umožňujúca boj na veľkú vzdialenosť. Zatiaľ čo Unreal Tournament 2003 mal podporu pre fyziku vozidiel cez engine Karma, čo demonštroval testovací mapu s "náhle zostrojeným vozidlom", až kým Psyonix nepoužil modifikáciu základného kódu od Epic, hra nedostala úplne vykódované vozidlá. Impresionovaní ich úsilím sa Epic rozhodol zahrnúť toto do svojho nástupcu ako oficiálny herný mód pod názvom Onslaught tým, že najal Psyonix ako dodávateľa. Psyonix neskôr vyvinula hru Rocket League, ktorá bola v roku 2019 odkúpená Epicom.

                Špecializovaná verzia UE2 nazývaná UE2X bola navrhnutá pre hru Unreal Championship 2: The Liandri Conflict na platforme pôvodného Xboxu a obsahovala optimalizácie špecifické pre túto konzolu. V marci 2011 odhalilo Ubisoft Montreal, že UE2 úspešne bežal na hernom systéme Nintendo 3DS vo hre Tom Clancy's Splinter Cell 3D. "3DS je výkonný a dokážeme na tejto konzole spustiť Unreal Engine, čo je pomerne impozantné pre prenosné zariadenie, a 3D neovplyvňuje výkon (vďaka mojim úžasným programátorom)," uviedol Ubisoft.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">

              <!-- Akordeón Nadpis -->
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Unreal Engine 3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">

              <!-- Akordeón Text -->
              <div class="accordion-body">
                Obrázky z Unreal Engine 3 boli prezentované v júli 2004, v čase, keď bol engine už viac ako 18 mesiacov vo vývoji. Engine bol založený na prvej generácii, ale obsahoval nové funkcie. "Základné architektonické rozhodnutia viditeľné pre programátorov v objektovo orientovanom návrhu, prístupe k skriptovaniu založenom na dátach a pomerne modulárnemu prístupu k podsystémom zostali [zo Unreal Engine 1]. Ale časti hry, ktoré sú skutočne viditeľné pre hráčov - renderovanie, fyzikálny systém, zvukový systém a nástroje - sú všetky viditeľne nové a dramaticky výkonnejšie," povedal Sweeney. Na rozdiel od Unreal Engine 2, ktorý stále podporoval fixnú funkčnú pipeline, bol Unreal Engine 3 navrhnutý tak, aby využíval plne programovateľný hardvér shaderov. Všetky výpočty osvetlenia a tieňovania sa vykonávali na úrovni pixelov, namiesto na úrovni vrcholov. Z hľadiska vykresľovania poskytoval Unreal Engine 3 podporu pre renderer s gama-korekciou vysokého dynamického rozsahu. Prvé hry vydané s použitím Unreal Engine 3 boli Gears of War pre Xbox 360 a RoboBlitz pre Windows, ktoré boli obidve vydané 7. novembra 2006.

                Pôvodne podporoval Unreal Engine 3 len platformy Windows, PlayStation 3 a Xbox 360, pričom iOS (prvýkrát demonštrované s Epic Citadel) a Android boli pridané neskôr v roku 2010, pričom Infinity Blade bol prvým titulom pre iOS a Dungeon Defenders prvým titulom pre Android. V roku 2011 bolo oznámené, že engine bude podporovať Adobe Flash Player 11 prostredníctvom hardvérovo akcelerovaných API pre Stage 3D a že sa používa v dvoch hrách pre Wii U, Batman: Arkham City a Aliens: Colonial Marines. V roku 2013 sa Epic spojil s Mozillou, aby priniesli Unreal Engine 3 na web; s použitím podjazyka asm.js a kompilátora Emscripten sa im podarilo portovať engine za štyri dni.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">

              <!-- Akordeón Nadpis -->
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Unreal Engine 4
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">

              <!-- Akordeón Text -->
              <div class="accordion-body">
                V auguste 2005 Mark Rein, viceprezident spoločnosti Epic Games, odhalil, že vývoj Unreal Engine 4 prebiehal už dva roky. "Ľudia si to neuvedomujú, ale sme už dva roky do vývoja Unreal Engine 4. Určite ešte nemáme kompletný tím, je to len jeden chlap a asi si viete tipnúť, kto to je," povedal C&VG. V rozhovore na začiatku roku 2008 Sweeney uviedol, že prakticky jedinou osobou pracujúcou na engine bol on sám, avšak potvrdil, že jeho výskumné a vývojové oddelenie sa začne neskôr v tom istom roku rozširovať a bude vyvíjať engine paralelne s Unreal Engine 3. "V niektorých ohľadoch pripomíname firmu vyvíjajúcu hardvér so svojím generatívnym vývojom technológií. Budeme mať tím vyvíjajúci Unreal Engine 3 ešte niekoľko rokov a tím, ktorý sa začne pripravovať na Unreal Engine 4. A potom, keď začne prechod na nasledujúcu generáciu, presunieme všetkých tam. V skutočnosti vyvíjame súčasne paralelne pre viaceré generácie," povedal.

                V februári 2012 Rein vyhlásil: "Ľudia budú neskôr tento rok šokovaní, keď uvidia Unreal Engine 4." Epic odhalil UE4 obmedzenému počtu účastníkov na Game Developers Conference 2012 a video enginu demonštrované technickým umelcom Alanom Willardom bolo zverejnené pre verejnosť 7. júna 2012 na GameTrailers TV. Jednou z hlavných plánovaných funkcií pre UE4 bola real-time globálna iluminácia pomocou voxel cone tracing, eliminujúca predvypočítané osvetlenie. Avšak táto funkcia, nazvaná Sparse Voxel Octree Global Illumination (SVOGI) a predstavená v deme Elemental, bola nahradená podobným, ale menej výpočtovo náročným algoritmom z dôvodu obáv o výkon. UE4 tiež zahŕňa nový vizuálny systém skriptovania "Blueprints" (nástupca "Kismet" z UE3), ktorý umožňuje rýchly vývoj herného logického systému bez použitia kódu a znižuje rozdiel medzi technickými umelcami, dizajnérmi a programátormi.
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
                    <img src="img/unreal1.png" class="d-block w-100" alt="unrealscreenshot1">
                  </div>

                  <!-- Druhý obrázok -->
                  <div class="carousel-item">
                    <img src="img/unreal2.png" class="d-block w-100" alt="unrealscreenshot2">
                  </div>

                  <!-- Tretí obrázok -->
                  <div class="carousel-item">
                    <img src="img/unreal3.png" class="d-block w-100" alt="unrealscreenshot3">
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
                <li class="list-group-item bg-dark text-light">Úžasné grafické schopnosti a fotorealistický rendering priamo zo základu.</li>
                <li class="list-group-item bg-dark text-light">Výkonný vizuálny skriptovací nástroj (Blueprints) pre ľudí bez programátorského zázemia.</li>
                <li class="list-group-item bg-dark text-light">Robustný a funkčne bohatý súbor nástrojov pre vývoj hier.</li>
                <li class="list-group-item bg-dark text-light">Vstavané fyzikálne a renderingové systémy pre vysokokvalitnú grafiku.</li>
                <li class="list-group-item bg-dark text-light">Pokročilé osvetlenie a efekty častíc pre pohlcujúce zážitky.</li>
                <li class="list-group-item bg-dark text-light">Silný dôraz na vývoj hier typu AAA.</li>
                <li class="list-group-item bg-dark text-light">Absencia podielu zo zisku do určitého prahu pre komerčné projekty.</li>
                <li class="list-group-item bg-dark text-light">Rozsiahla dokumentácia a vzdelávacie zdroje.</li>
                <li class="list-group-item bg-dark text-light">Silné sieťové schopnosti pre multiplayerové hry.</li>
                <li class="list-group-item bg-dark text-light">Nepretržité aktualizácie a vylepšenia podporované spoločnosťou Epic Games.</li>
            </ul><br>      
            <h2>Nevýhody</h2>
            <hr>

            <!-- Zoznam nevýhod -->
            <ul class="list-group bg-dark text-light">
                <li class="list-group-item bg-dark text-light">Tažší na naučenie, najmä pre začiatočníkov a ľudí bez programátorského zázemia.</li>
                <li class="list-group-item bg-dark text-light">Môže byť pre niektorých preplnený množstvom funkcií a zložitosťou.</li>
                <li class="list-group-item bg-dark text-light">Menej vhodný pre vývoj 2D hier v porovnaní s Unity.</li>
                <li class="list-group-item bg-dark text-light">Vyššie nároky na systémové prostriedky, čo môže ovplyvniť výkon na slabších zariadeniach.</li>
                <li class="list-group-item bg-dark text-light">Väčšie súbory a dlhšie načítanie projektov.</li>
                <li class="list-group-item bg-dark text-light">Obmedzený výber assetov v porovnaní s Unity Asset Store.</li>
                <li class="list-group-item bg-dark text-light">Vyžaduje silnejšiu hardvérovú výbavu pre plynulý vývoj.</li>
                <li class="list-group-item bg-dark text-light">Skriptovanie pomocou Blueprintov môže mať obmedzenia pre veľmi komplexné systémy.</li>
                <li class="list-group-item bg-dark text-light">Prispôsobovanie a úpravy môžu vyžadovať hlbšie znalosti v jazyku C++.</li>
                <li class="list-group-item bg-dark text-light">Problémy s optimalizáciou výkonu pre menej skúsených vývojárov.</li>
            </ul>
            <hr>
            <br>
        </div>

        <!-- Container s tabuľkou o cenách licencii -->
        <div class="container border border-2 border-dark rounded bg-dark justify-content-center pricing_container">
            <h1>Cena</h1>
            <p><a class="zdroj" href="https://www.unrealengine.com/en-US/license" target="_blank">Zdroj</a></p>

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
                    <th scope="row">Štandartná Licencia</th>
                    <td>Zdarma</td>
                  </tr>
                  <tr>
                    <th scope="row">Enterprise Licencia</th>
                    <td>1 500$ za 1 osobu/rok</td>
                  </tr>
                  <tr>
                    <th scope="row">Vlastná Licencia</th>
                    <td>Kontaktujte <a href="https://www.unrealengine.com/en-US/license">Unreal Engine</a></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </main>

<?php
include_once('partials/footer.php');
?>