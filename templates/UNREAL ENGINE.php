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
                        <img class="img-fluid mx-auto d-block" src="../assets/img/unreal_placeholder.jpg" alt="unreal engine placeholder" id="unreal_placeholder">
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
         <?php
            $read_object = new Read();
            $unreal_accordion = $read_object->select('unreal_accordion');

            echo '<div class="accordion" id="accordionExample">';

            for ($i=0; $i < count($unreal_accordion); $i++){
              $collapse = '';
              switch($i) {
                case 0:
                  $collapse .= 'collapseOne';
                  break;
                case 1:
                  $collapse .= 'collapseTwo';
                  break;
                case 2:
                  $collapse .= 'collapseThree';
                  break;
                case 3:
                  $collapse .= 'collapseFour';
                  break;
                case 4:
                  $collapse .= 'collapseFive';
                  break;
              }
              echo '<div class="accordion-item">';
              echo '<h2 class="accordion-header">';
  
              echo '<!-- Akordeón Nadpis -->';
                echo '<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#'.$collapse.'" aria-expanded="true" aria-controls="'.$collapse.'">';
                  echo $unreal_accordion[$i]->title;
                echo '</button>';
              echo '</h2>';
              if ($i == 0) echo '<div id="'.$collapse.'" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">';
              else echo '<div id="'.$collapse.'" class="accordion-collapse collapse" data-bs-parent="#accordionExample">';
  
                echo '<!-- Akordeón Text -->';
                echo '<div class="accordion-body">';
                  echo $unreal_accordion[$i]->text;
                echo '</div>';
              echo '</div>';
            echo '</div>';
            }
            echo '</div>';
            echo '</div>';
         ?>

        <!-- Container so Slideshow -->
        <div class="container border border-2 border-dark rounded bg-dark justify-content-center image_container">
            <h2>Obrázky</h2>

            <!-- Slideshow (Carousel) -->
            <?php
              $unreal_carousel = $read_object->select('unreal_carousel');
              
              echo '<div id="carouselExampleIndicators" class="carousel slide">';
              echo '<div class="carousel-indicators">';
              for ($i = 0; $i < count($unreal_carousel); $i++) {
                if ($i == 0) echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$i.'" class="active" aria-current="true" aria-label="Slide '.($i+1).'"></button>';
                else echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$i.'"    aria-label="Slide '.($i+1).'"></button>';
              }
              echo '</div>';

              echo '<div class="carousel-inner">';

              for ($i = 0; $i < count($unreal_carousel); $i++) {
                if ($i == 0) echo '<div class="carousel-item active">';
                else echo '<div class="carousel-item">';
                echo '<img src="'.$unreal_carousel[$i]->picture.'" class="d-block w-100" alt="unrealscreenshot'.($i+1).'">';
                echo '</div>';
              }
              echo '</div>';
            ?>
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

            <!-- Zoznam výhod/nevýhod -->
            <?php
              $unreal_container = $read_object->select('unreal_container');

              for ($i = 0; $i <= 1; $i++) {
                if ($i == 0) {
                  echo '<h2>Výhody</h2>';
                  echo '<hr>';
                } else {
                  echo '<h2>Nevýhody</h2>';
                  echo '<hr>';
                }
                echo '<ul class="list-group bg-dark text-light">';
                for ($j = 0; $j < count($unreal_container); $j++) {
                  if ($i == 0) echo '<li class="list-group-item bg-dark text-light">'.$unreal_container[$j]->pros.'</li>';
                  else echo '<li class="list-group-item bg-dark text-light">'.$unreal_container[$j]->cons.'</li>';
                }
                echo '</ul><br>';
              }
            ?>
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
                <?php
                    $unreal_pricing = $read_object->select('unreal_pricing');
                    for ($i = 0; $i < count($unreal_pricing); $i++) {
                      echo '<tr>';
                      echo '<th scope="row">'.$unreal_pricing[$i]->edition.'</th>';
                      echo '<td>'.$unreal_pricing[$i]->price.'</td>';
                      echo '</tr>';
                    }
                  ?>
                </tbody>
              </table>
        </div>
    </main>

<?php
include_once('partials/footer.php');
?>