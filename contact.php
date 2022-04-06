<?php
$titre = 'Nous contacter';
require 'head.php';
require 'header.php';
?>
<div class="container-fluid my-3">
    <div class="row">
        <div class="col-12 col-md-8">
            <h3 class="text-light bg-success">Nous Contacter</h3>
            <fieldset>
                <form action="contact.php" method="POST">
                    <legend class="text-center">Informations personnelles</legend>
                    <div class="my-3">
                        <label for="name">Nom</label>
                        <input type="text" id="name" placeholder="Votre nom" class="form-control">
                    </div>
                    <div class="mb-3">

                        <label for="firstname">Prénoms</label>
                        <input type="text" id="firstname" placeholder="Votre prénom" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="mail">E-mail</label>
                        <input type="email" id="mail" placeholder="Votre mail" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="message">Votre message</label>
                        <textarea name="message" id="message" class="form-control" placeholder="Votre Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Envoyer !</button>
                </form>

            </fieldset>

        </div>
        <div class="col-12 col-md-4">
            <h3 class="text-light bg-success mb-5">Nos heures d'ouverture</h3>
            <p>Du Mardi au Vendredri : 8h30'- 20h</p>
            <p>Le samedi : 10h- 21h</p>
            <p>Dimanche et Lundi : Fermé</p>
        </div>
    </div>
</div>
<?php
require 'footer.php';
?>