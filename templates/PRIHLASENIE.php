<?php
include_once('partials/header.php');
if(isset($_SESSION['logged_in'])&&$_SESSION['logged_in']==true){
    header('Location: ADMIN.php');
}
?> 
    <main>
      <section class="container border border-2 border-dark rounded bg-dark justify-content-center text-white generic-container">
        <h1>Prihlásenie</h1>
        <form action="" method="POST">
            <br>
            <!-- Pole Meno -->
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <br>
                <input type="email" name="email" placeholder="Váš email">
                <br>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Heslo:</label>
                <br>
                <input type="text" name="password" placeholder="Vaše heslo">
                <br>
            </div>
            <button type="submit" class="btn btn-primary" value="Odoslať" name="user_login">Prihlásiť sa</button>
            <a href ="REGISTRACIA.php">
                <button type="button" class="btn btn-danger">Registrácia</button>
            </a>
        </form>
        <?php
            if(isset($_POST['user_login'])){
                $email = $_POST['email'];
                $password = $_POST['password']; 

                $user_object = new User();

                $login_success = $user_object->login($email,$password);
                if($login_success == true){
                    if ($_SESSION['is_admin'] == 1) {
                        header('Location: ADMIN.php');
                        die;
                    } else {
                        header("Location: DOMOV.php");
                        die;
                    }
                }else{
                    echo 'Nesprávne meno alebo heslo';
                }
            }
        ?>
      </section>
    </main>
    
<?php
    include_once('partials/footer.php')
?> 