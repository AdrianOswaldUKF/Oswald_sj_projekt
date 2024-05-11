<?php
require_once('config.php');


function redirect_homepage(){
    header("Location: templates/DOMOV.php");
    die("Nepodarilo sa nájsť Domovskú stránku");
}
?>