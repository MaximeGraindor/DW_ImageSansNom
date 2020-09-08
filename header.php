<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Maxime Graindor">
    <meta name="description" content="L'image sans nom est un lieu qui sert principalement à exposé des photographies et des livres (+ de 4000 références).">
    <!--<link rel="icon" type="image/x-icon" href="https://example.com/favicon.ico">-->
    <title><?= isn_get_title() ?></title>
    <link rel="stylesheet" href=" <?= get_template_directory_uri(); ?>/dist/css/main.css">
</head>
<body>
    <header>
        <div class="header__wrap">
            <div class="header__title">
                <a href="<?php bloginfo('wpurl'); ?>" class="header__title__link"> Image sans nom</a>
            </div>
            <ul class="header__menu">
                <img src="<?= get_template_directory_uri(); ?>/dist/assets/close.svg" alt="" class="close-menu">
                <?php foreach (isn_get_menu('main') as $i => $link): ?>
                <li class="menu__item">
                    <a href="<?= $link->url ?>" class="menu__link">
                        <?= $link->label ?>
                    </a>
                </li>
                <?php endforeach; ?>
                <li class="menu__item">
                    <a href="#" title="united-kingdom" class="united-kingdom"></a>
                </li>
            </ul>
            <div class="img__responsive">
                <img src="<?= get_template_directory_uri(); ?>/dist/assets/open-menu.svg" alt="" >
            </div>
        </div>
    </header>