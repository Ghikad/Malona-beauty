<?php
$titre = 'Nous contacter';
require 'head.php';
require 'header.php';
?>

<div class="container-fluid my-3">
    <div class="row">
        <div class="col-12 col-md-8">
            <h4 class="text-light bg-success">Nous Contacter</h4>
            <fieldset>
                <form action="contact.php" method="POST">
                    <legend class="text-center">Informations personnelles et Message</legend>
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
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" placeholder="Votre Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mb-3">Envoyer !</button>
                </form>

            </fieldset>

        </div>
        <div class="col-12 col-md-4">
            <h4 class="text-light bg-success mb-5">Nos heures d'ouverture</h4>
            <p>Du Mardi au Vendredri : 8h30'- 20h</p>
            <p>Le samedi : 10h- 21h</p>
            <p>Dimanche et Lundi : Fermé</p>
            <h4 class="text-light bg-success">Prendre un rendez-vous !</h4>
            <form action="coontact.php" method="POST">
                <fieldset>
                    <div class=" mb-1">
                        <label for="name">Nom</label>
                        <input type="text" id="name" class="form-control" placeholder="Votre nom">

                    </div>

                    <div class=" mb-1">
                        <label for="firstname">Prénoms</label>
                        <input type="text" id="firstname" class="form-control" placeholder="Vos prénoms">
                    </div>

                    <div class=" mb-1">
                        <label for="message">Heure de rendez-vous !</label>
                        <input type="text" id="message" class="form-control" placeholder="Jour et heure de votre rendez-vous !">
                    </div>

                    <button type="submit" class="btn btn-success mb-3">Reservez !</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>