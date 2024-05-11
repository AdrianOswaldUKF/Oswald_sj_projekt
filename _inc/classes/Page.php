<?php
    class Page{
        private $page_name;

        public function __construct($page_name)
        {
            $this->page_name = $page_name;
        }

        function add_head() {
            echo '<meta charset="UTF-8">';
            echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
            echo '<meta http-equiv="X-UA-Compatible" content="ie=edge">';
            echo '<link rel="stylesheet" href="../assets/css/style.css">';
            echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">';
            echo '<link rel="icon" href="../assets/img/icon.svg" type="image/x-icon">';
            echo '<title>'.(basename($_SERVER["SCRIPT_NAME"], '.php')).'</title>';
        }

        function add_footer() {
            echo '<footer>';
            echo '<div class="container justify-content-center" id="index_footer">';
            echo '<p class="footer_text">Stránka je určená len na edukačné účely!</p>';
            echo '<p class="footer_text">Zdroje sú riadne uvedené!</p>';
            echo '<p>2024 Adrián Oswald</p>';
            echo '</div>';
            echo '</footer>';
        }

        function add_scripts() {
            echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>';
            
            if ($this->page_name == 'KONTAKT') {
                echo '<script src="../assets/js/app.js"></script>';
            }
        }

    }
?>