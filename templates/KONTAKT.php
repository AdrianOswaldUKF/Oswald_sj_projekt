<?php
include_once('partials/header.php');
?>
<body id="kontakt_body">
    <main>

        <!-- Formulár -->
        <div class="container border border-2 border-dark rounded bg-dark justify-content-center kontakt_container" id="form_container">
            <h1 style="text-align: center;">Kontakt</h1>
            <hr>

            <!-- Redirect na thank you page, Alert -->
            <form id="contact" onsubmit="sucess()" action="DAKUJEME.php" method="POST">

                <!-- Pole Meno -->
                <div class="mb-3">
                    <label for="meno" class="form-label">Meno</label>
                    <input type="text" class="form-control" id="meno" name="name">
                </div>

                <!-- Pole Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <!-- Pole Textarea -->
                <div class="mb-3">
                    <label for="poznamka" class="form-label">Poznámka</label>
                    <textarea class="form-control" id="poznamka" rows="5" name="message"></textarea>
                </div>

                <!-- Súhlas so spracovaním osobných údajov -->
                <div class="mb-3">
                    <label for="acceptance" class="checkmark">Súhlasím so spracovaním mojích údajov: </label> 
                    <input type="checkbox" id="acceptance" name="acceptance" value="1" required>                   
                </div>
                <input type="submit" name="contact_submitted" class="btn btn-primary" value="Odoslať">
            </form>
            <br>
            <p>Kontaktujte nás aj priamo, <a href="mailto:mail@email.com">mail@email.com</a>.</p>
            <p>Telefonné číslo: <a href="tel:+421912345678">+421 912 345 678</a>.</p>
        </div><br>
    </main>
<?php
include_once('partials/footer.php');
?>