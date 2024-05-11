<?php
    include_once('partials/header.php');
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){
    header('Location: 404.php');
}
?> 
    <main>
      <section class="container text-white">
        <h1>Admin rozhranie</h1>
        <hr>
        <br>
        <div class="row">
            <div class="col-100">
                <?php
                    if($_SESSION['is_admin'] == 1){
                        include('partials/ADMIN-KONTAKTY.php');
                    }
                ?>
            </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('partials/footer.php')
?> 