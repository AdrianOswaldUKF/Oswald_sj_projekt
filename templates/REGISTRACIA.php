<?php
    include_once('partials/header.php');


    $user_object = new User();
?>

    <main>
        <section class="container border border-2 border-dark rounded bg-dark justify-content-center text-white generic-container">
            <div class="row">
                <div class="col-100">
                    <h1>Registrácia</h1>
                    <br>
                    <form action="" method="POST">
                    <div class="mb-3">
                        <label for="email">E-mail:</label>
                        <br>
                        <input type="email" id="email" name="email" required>
                        <br>
                    </div>
                    <div class="mb-3">
                        <label for="password">Heslo:</label>
                        <br>
                        <input type="password" id="password" name="password" required>
                        <br>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password">Zopakovať heslo:</label>
                        <br>
                        <input type="password" id="confirm_password" name="confirm_password" required>
                        <br>
                    </div>
                        <button type="submit" class="btn btn-success" name="user_register">Registrovať sa</button>
                        <?php
                            if(isset($_POST['user_register'])){
                                $email = $_POST['email'];
                                $password = $_POST['password'];
                                $confirm_password = $_POST['confirm_password'];
                        
                                if($password === $confirm_password) {
                                    if($user_object->register($email, $password)) {
                                        header("Location: PRIHLASENIE.php");
                                    } else {
                                        echo "<p>Registrácia zlyhala</p>";
                                    }
                                } else {
                                    echo "<p>Heslá sa nezhodujú</p>";
                                }
                            }
                        ?>
                    </form>
                </div>
            </div>
        </section>
    </main>

<?php
    include_once('partials/footer.php');
?>