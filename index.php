<?php
$titre = 'Accueil';
require 'head.php';
require 'header.php';
?>

<style>
    /*Les cercles de Services */
    .spa {
        background: url('images/spa.jpg');
    }

    .coiffure {
        background: url('images/coiffure.jpg');
    }

    .massage {
        background: url('images/massage.jpg');
    }

    .epilation {
        background: url('images/epilation.jpg');
    }

    .soins_du_visage {
        background: url('images/soins_de_visage.jpg');
    }

    .conseils {
        background: url('images/conseil.jpg');
    }

    .equipe .cheffe {
        background: url('images/1.jpg');
        background-position: center;
        background-size: cover;
    }

    .equipe .assistante1 {
        background: url('images/2.jpg');
        background-position: center;
        background-size: cover;
    }

    .equipe .assistante2 {
        background: url('images/3.jpg');
        background-position: center;
        background-size: cover;
    }

    .equipe .assistante3 {
        background: url('images/4.jpg');
        background-position: center;
        background-size: cover;
    }

    .service-cercle {
        width: 275px;
        height: 275px;
        border-radius: 50%;
        border: 1px solid White;
        background-position: center;
        background-size: cover;
        margin: 5%;
    }

    .container a {
        text-transform: uppercase;
        margin-left: 40%;
        transform: translateX(-40%);
    }

    .equipe p {
        text-align: center;
    }
</style>

<p class="intro">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos porro architecto, excepturi laboriosam modi recusandae earum voluptates sint, unde, cum esse rem maxime quisquam tempora vero delectus dolores minus nostrum!
    Mollitia eveniet dolorum numquam repellat impedit nihil architecto eligendi molestias voluptatem et labore similique vitae obcaecati minima, quibusdam laboriosam. Sit ut in labore maiores aperiam, eos rerum quibusdam eveniet veritatis!</p>

<h1 class="bg-success text-light mb-3 text-center">Services</h1>
<section class="container">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="service-cercle spa">

            </div>
            <a href="services.php#spa" class="btn btn-outline-success">Spa</a>
        </div>
        <div class="col-12 col-md-4">
            <div class="service-cercle coiffure">

            </div>
            <a href="services.php#coiffure" class="btn btn-outline-success">Coiffure</a>
        </div>
        <div class="col-12 col-md-4">
            <div class="service-cercle massage">

            </div>
            <a href="services.php#massage" class="btn btn-outline-success">Massage</a>
        </div>
        <div class="col-12 col-md-4">
            <div class="service-cercle epilation">

            </div>
            <a href="services.php#epilation" class="btn btn-outline-success">Epilation</a>
        </div>
        <div class="col-12 col-md-4">
            <div class="service-cercle soins_du_visage">

            </div>
            <a href="services.php#soins" class="btn btn-outline-success">Soins du visage</a>
        </div>
        <div class="col-12 col-md-4">
            <div class="service-cercle conseils">

            </div>
            <a href="services.php#conseils" class="btn btn-outline-success">Conseils</a>
        </div>
    </div>
</section>

<h1 class="bg-success text-light my-3 text-center">Qui sommes-nous?</h1>

<section class="container equipe">
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="service-cercle cheffe">

            </div>
            <p><strong>Armelle Gone</strong></p>
            <p>Veritatis, possimus dolor! Corporis doloremque consequuntur dolorem accusamus?</p>
        </div>
        <div class="col-12 col-md-3">
            <div class="service-cercle assistante1">

            </div>
            <p><strong>Mano Mano</strong></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>
        <div class="col-12 col-md-3">
            <div class="service-cercle assistante2">

            </div>
            <p> <strong>Adréas kuik</strong></p>
            <p> Praesentium possimus fugit sequi rerum, nemo quod nam officiis dolores, veritatis.</p>
        </div>
        <div class="col-12 col-md-3">
            <div class="service-cercle assistante3">

            </div>
            <p><strong>Boristine André</strong></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>
    </div>
</section>


<br>
<?php
require 'footer.php';
?>