<?php
  require('../_inc/functions.php');
?>
<!DOCTYPE html>
<html lang="sk">
  <head>
    <?php
        $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
        $head_object = new Page($page_name);
        $head_object->add_head();
    ?>
  </head>
    
    <!-- Navbar pre PC a mobilné telefóny (hamburger) -->
    <?php
        $pages = array('DOMOV'=>'DOMOV.php',
        'UNITY'=>'UNITY.php',
        'UNREAL ENGINE'=>'UNREAL ENGINE.php',
        'GODOT'=>'GODOT.php',
        'KONTAKT'=>'KONTAKT.php'
        );
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true && $_SESSION['is_admin'] == 1){
          $pages['ADMIN'] = 'ADMIN.php';
        }
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
          $pages['ODHLÁSIŤ SA   '] = 'ODHLASIT.php';
        } else {
          $pages['PRIHLÁSIŤ SA'] = 'PRIHLASENIE.php';
        }
        $menu_object  = new Menu($pages);
        echo($menu_object->generate_Mobilemenu());
        echo($menu_object->generate_menu());
    ?>