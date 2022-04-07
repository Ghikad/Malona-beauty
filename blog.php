<?php

$titre = 'Blog';
require 'head.php';

?>

<nav>
    <ol class="breadcrumb bg-light">
        <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
        <li class="breadcrumb-item"><a href="services.php">Nos services</a></li>
        <li class="breadcrumb-item active">Blog</li>
        <li class="breadcrumb-item"><a href="contact.php">Contact</a></li>
    </ol>
</nav>

<section class="container-fluid">
    <article class="row my-3">
        <div class="col-12 col-lg-6">
            <img src="images/banner.jpg" alt="Buraux de Malona Beauty" class="img-fluid img-thumbnails rounded">
        </div>
        <div class="col-12 col-lg-6 p-5 bg-light rounded">
            <h3>Vous pouvez afficher votre article phare ici</h3>
            <p class="my-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi harum corrupti est amet maiores enim molestiae! Illum ex exercitationem tempora accusamus, maxime ad laborum! In facere dolores sequi neque consectetur.</p>
            <a href="#" class="btn btn-outline-success">Lire la suite</a>
        </div>
    </article>
</section>
<section class="container-fluid my-3">
    <div class="row">
        <div class="col-12 col-md-3 card">
            <img src="images/1.jpg" alt="Photo anonyme" class="img-fluid">
            <div class="card-body">
                <h4 class="card-title">Lorem Ipsum</h4>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At quaerat sapiente consequatur nesciunt dolorum, non dolor saepe? Sit dolores accusantium, quibusdam velit ullam, cumque optio architecto qui illum inventore amet?</p>
                <a href="#" class="btn btn-outline-success">Lire la suite</a>
            </div>
        </div>
        <div class="col-12 col-md-3 card">
            <img src="images/2.jpg" alt="Photo anonyme" class="img-fluid">
            <div class="card-body">
                <h4 class="card-title">Lorem Ipsum</h4>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At quaerat sapiente consequatur nesciunt dolorum, non dolor saepe? Sit dolores accusantium, quibusdam velit ullam, cumque optio architecto qui illum inventore amet?</p>
                <a href="#" class="btn btn-outline-success">Lire la suite</a>
            </div>
        </div>
        <div class="col-12 col-md-3 card">
            <img src="images/conseil.jpg" alt="Photo anonyme" class="img-fluid">
            <div class="card-body">
                <h4 class="card-title">Lorem Ipsum</h4>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At quaerat sapiente consequatur nesciunt dolorum, non dolor saepe? Sit dolores accusantium, quibusdam velit ullam, cumque optio architecto qui illum inventore amet?</p>
                <a href="#" class="btn btn-outline-success">Lire la suite</a>
            </div>
        </div>
        <div class="col-12 col-md-3 card">
            <img src="images/4.jpg" alt="Photo anonyme" class="img-fluid">
            <div class="card-body">
                <h4 class="card-title">Lorem Ipsum</h4>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At quaerat sapiente consequatur nesciunt dolorum, non dolor saepe? Sit dolores accusantium, quibusdam velit ullam, cumque optio architecto qui illum inventore amet?</p>
                <a href="#" class="btn btn-outline-success">Lire la suite</a>
            </div>
        </div>
    </div>

</section>

<?php require 'footer.php' ?>