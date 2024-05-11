<?php
include_once('partials/header.php');
?>
<body id="dakujeme_body">
    <main>
        <div class="container border border-2 border-dark rounded bg-dark justify-content-center dakujeme_container">
            <h1>Ďakujeme Vám za to, že ste nás kontaktovali!</h1>
            <?php
                $contact_object = new Contact();
                $contact_object->insert();
            ?>
        </div>
    </main>

<?php
include_once('partials/footer.php');
?>