<?php get_header() ?>

<div class="expo">
    <h1 class="expos__title">
        <?= the_title()?>
    </h1>
    <div class="expo__infos">
        <p class="expo__author">
            by <?= get_field('expo_auteur') ?>
        </p>
        <p class="expo__affiche">
            <a href="<?= get_field('expo_affiche') ?>" target="_blank" title="Telecharger l'affiche">Télécharger l'affiche</a> - <a href="#" target="_blank" title="Partager">Partager</a>
        </p>
    </div>
    <p class="expo__date">
        <?= get_field('expo_date_start') ?> - <?= get_field('expo_date_end') ?>
    </p>
    <div class="expo__description">
        <?= get_field('expo_description') ?>
    </div>
    <div class="expo__img__wrap">
        <img src="<?= get_field('expo_image1') ?>" alt="" class="expo__img">
        <img src="<?= get_field('expo_image1') ?>" alt="" class="expo__img">
        <img src="<?= get_field('expo_image1') ?>" alt="" class="expo__img">

        <img src="<?= get_field('expo_image2') ?>" alt="" class="expo__img">
        <img src="<?= get_field('expo_image2') ?>" alt="" class="expo__img">
        <img src="<?= get_field('expo_image2') ?>" alt="" class="expo__img">

        <img src="<?= get_field('expo_image3') ?>" alt="" class="expo__img">
        <img src="<?= get_field('expo_image3') ?>" alt="" class="expo__img">
        <img src="<?= get_field('expo_image3') ?>" alt="" class="expo__img">
    </div>
</div>

<?php get_footer() ?>
