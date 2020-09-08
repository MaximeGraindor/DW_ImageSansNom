<?php get_header(); ?>

<main>
    <div class="home__intro">
        <div class="home__wrap intro__content">
            <span class="isn-corner">l'</span>
            <span class="isn-corner">image</span>
            <span class="isn-corner">sans</span>
            <span class="isn-corner">nom</span>
            <div class="intro__left">
                <h1 class="intro__title" role="heading" aria-level="1">
                    <span>image</span> <span>sans</span> <span>nom</span>
                </h1>
                <p class="intro__description">
                    Lieu d'exposition photo et bibliothèque
                </p>
            </div>
            <div class="intro__right">
                <div class="wrap__img">
                    <img src="<?= path('/dist/assets/001_016-min.jpg') ?>" alt="Photo de Image sans nom" class="right__img">
                    <img src="<?= path('/dist/assets/001_020-min.jpg') ?>" alt="Photo de Image sans nom" class="right__img">
                    <img src="<?= path('/dist/assets/001_027-min.jpg') ?>" alt="Photo de Image sans nom" class="right__img">
                </div>
            </div>
        </div>
    </div>
    <?php
    $expositionHome = new WP_Query([
        'post_type' => 'exposition',
        'posts_per_page' => 2
    ]);
    ?>
    <section class="home__lastExpo">
        <div class="latExpo__wrap">
            <h2 class="lastExpo__title" class="intro__title" role="heading" aria-level="2">
                Dernières expositions
            </h2>
            <div class="lastExpo__content">
                <?php  if($expositionHome->have_posts()): while($expositionHome->have_posts()): $expositionHome->the_post(); ?>
                <article class="lastExpo__card">
                    <div class="card__left">
                        <a href="<?= the_permalink() ?>">
                            <img src="<?= get_field('image_page_expo') ?>" alt="" class="card__left__img">
                        </a>
                    </div>
                    <div class="card__right">
                        <h3 class="card__title" role="heading" aria-level="3">
                            <?= the_title() ?>
                        </h3>
                        <div>
                            <p class="card__date">
                                <?= get_field('expo_date_start') ?> - <?= get_field('expo_date_end') ?>
                            </p>
                            <p class="card__author">
                                <?= get_field('expo_auteur') ?>
                            </p>
                        </div>
                        <a href="<?= the_permalink() ?>" class="card__more">En savoir plus</a>
                    </div>
                </article>
                <?php endwhile;endif; ?>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <div class="newsletter__wrap newsletter__content">
            <div class="newsletter__left">
                <h2 class="newsletter__title" role="heading" aria-level="2">
                    Newsletter
                </h2>
                <p class="newsletter__desc">
                    Envie d'être au courant des dernières expositions ?
                </p>
                <form action="#" method="get" class="newsletter__form">
                    <label for="email" class="hidden">Email</label>
                    <input type="email" name="email" id="email" placeholder="exemple@hotmail.com">
                    <input type="submit" value=".">
                </form>
            </div>
            <div class="newsletter__right">
                <div class="newsletter__imgWrap">
                    <img src="<?= path('/dist/assets/affiches_007-min.jpg') ?>" alt="Affiche">
                    <img src="<?= path('/dist/assets/affiches_008-min.jpg') ?>" alt="Affiche">
                    <img src="<?= path('/dist/assets/affiches_009-min.jpg') ?>" alt="Affiche">
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
