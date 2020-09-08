<?php get_header(); ?>
<main>
    <div class="livres__intro">
        <div class="livres__wrap livres__intro__content">
            <span class="isn-corner">l'</span>
            <span class="isn-corner">image</span>
            <span class="isn-corner">sans</span>
            <span class="isn-corner">nom</span>
            <div class="livres__intro__left">
                <h1 class="livres__intro__title" role="heading" aria-level="1">
                    <span>Nos</span><span>livres</span>
                </h1>
                <p class="livres__description">
                    Nous possèdent une bibliothèque qui se remplit de pas loin de 1000 exemplaires principalement de photographie  et d’autres arts également, disponibles en consultation.
                </p>
            </div>
            <div class="livres__intro__right">
                <div class="wrap__img">
                    <img src="<?= get_template_directory_uri(); ?>/dist/assets/001_019-min.jpg" alt="" class="right__img">
                </div>
            </div>
        </div>
    </div>
    <?php

    $book = new WP_Query([
        'post_type' => 'book',
        'posts_per_page' => 5
    ]);
    ?>

    <section class="livres__liste">
        <h2 class="hidden">
            Liste de livres
        </h2>
        <div class="livres__wrap">
            <div class="livres__liste__search">
                <form action="#" method="get" class="search__form">
                    <label for="bookName">Rechercher un livre</label>
                    <input type="text" id="bookName" name="bookName">
                    <input type="submit" value=".">
                </form>
            </div>
            <div class="livres__liste__content">
                <?php  if($book->have_posts()): while($book->have_posts()): $book->the_post(); ?>
                <article class="liste__card">
                    <div class="liste__card__left">
                        <a href="<?= the_permalink(); ?>">
                            <img src="<?= get_field('mainImg_book')['url'] ?>" alt="">
                        </a>
                    </div>
                    <div class="liste__card__right">
                        <h3 role="heading" aria-level="3">
                            <a href="<?= the_permalink(); ?>"><?= the_title(); ?></a>
                        </h3>
                        <p><?= get_field('author_book') ?></p>
                    </div>
                </article>
                <?php endwhile;endif; ?>
            </div>
            <div class="livres__pages">
                <a href="#" class="livres__pages__back" title="back"></a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#" class="livres__pages__next" title="next"></a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
