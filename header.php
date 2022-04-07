<?php

function menu(string $lien, string $title): string
{
    $classe = 'nav-link';

    if ($_SERVER['SCRIPT_NAME']  === $lien) {
        $classe .= ' active';
    }

    return '<li class = "nav-item">
        <a class = "' . $classe . '"  href="' . $lien . '">' . $title . '</a>
    </li>';
}

?>

<body>
    <header class="container-fluid">
        <div class="row bg-success text-center text-light">
            <div class="col-md-6 number">
                (00228) 93 84 57 94
            </div>
            <div class="col-md-6 social-links">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-whatsapp"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
        <nav>
            <ul class="nav nav-fill">
                <?= menu('index.php', 'Accueil') ?>
                <?= menu('services.php#spa', 'Spa') ?>
                <?= menu('services.php#coiffure', 'Coiffure') ?>
                <?= menu('services.php#massage', 'Massage et Epilation') ?>
                <?= menu('blog.php', 'Blog') ?>
                <?= menu('contact.php', 'Contact') ?>
            </ul>
        </nav>

        <h1>MALONA BEAUTY</h1>

        <a href="contact.php" class="btn btn-outline-success">Prendre rendez-vous en ligne</a>

    </header>