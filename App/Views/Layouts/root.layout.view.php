<?php

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= App\Configuration::APP_NAME ?></title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $link->asset('favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $link->asset('favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $link->asset('favicons/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= $link->asset('favicons/site.webmanifest') ?>">
    <link rel="shortcut icon" href="<?= $link->asset('favicons/favicon.ico') ?>">
    <!-- Písma Amatic SC a Nunito. Zdroj: fonts.google.com -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Nunito:wght@400;700&display=swap">
    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
</head>
<body class="public">
<header class="site-header">
    <a class="brand" href="<?= $link->url('home.index') ?>">
        <img src="<?= $link->asset('images/logo.svg') ?>" alt="" width="48" height="48">
        <span>FS Drienovec</span>
    </a>

    <nav aria-label="Hlavná navigácia">
        <ul>
            <li><a href="<?= $link->url('home.index') ?>" aria-current="page">Úvod</a></li>
            <li><a href="#">Repertoár</a></li>
            <li><a href="#">Vystúpenia</a></li>
            <li><a href="#">O súbore</a></li>
        </ul>
    </nav>

    <div class="header-actions">
        <!-- dočasne: prihlásenie ešte nie je, odkaz vedie do portálu -->
        <a class="btn btn-outline" href="<?= $link->url('library.index') ?>">Prihlásiť sa</a>
        <a class="btn btn-primary" href="#">Pridaj sa k nám</a>
    </div>
</header>
<main>
    <?= $contentHTML ?>
</main>

<div class="lem" aria-hidden="true"></div>

<footer class="site-footer">
    <div>
        <p class="footer-name">FS Drienovec</p>
    </div>

    <div>
        <h2>Kontakt</h2>
        <address>
            <a href="mailto:kontakt@example.com">kontakt@example.com</a><br>
            Bánovce nad Bebravou
        </address>
    </div>

    <div>
        <h2>Sledujte nás</h2>
        <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
        </ul>
    </div>
</footer>
</body>
</html>
