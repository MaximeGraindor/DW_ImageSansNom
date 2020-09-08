<?php get_header(); ?>
<main>
    <div class="lieu__intro">
        <div class="lieu__wrap lieu__intro__content">
            <span class="isn-corner">l'</span>
            <span class="isn-corner">image</span>
            <span class="isn-corner">sans</span>
            <span class="isn-corner">nom</span>
            <div class="lieu__intro__left">
                <h1 class="lieu__intro__title" role="heading" aria-level="1">
                    <span>Le lieu</span>
                </h1>
                <p class="lieu__description">
                    L’Image sans nom est lieu d’expositions liées à la photographie et au livre, souvent aux deux. Il est aussi un centre de documentation : fort de quelques milliers de titres, principalement de photographie, et d’autres arts également, disponibles en consultation. Il est enfin un atelier d’impression jet d’encre ouvert à toute demande.
                </p>
            </div>
            <div class="lieu__intro__right">
                <img src="<?= get_template_directory_uri(); ?>/dist/assets/\000_ISNbefore_005-min.jpg" alt="" class="right__img">
            </div>
        </div>
    </div>
    <div class="lieu__second">
        <div class="lieu__wrap">
            <div class="lieu__second__left">
                <img src="<?= get_template_directory_uri(); ?>/dist/assets/001_001-min.jpg" alt="" class="right__img">
            </div>
            <div class="lieu__second__right">
                <p class="lieu__second__description">
                    Le lieu se veut un point de rencontre pour tous les amateurs ou amoureux de livres et de photographie, et il propose depuis février 2018, sous la houlette d’Olivier Cornil, Emmanuel d’Autreppe, Christophe Collas et Matthieu Litt une série d’événements (pour) petits et grands, ateliers et rencontres, lectures et projections, expositions et interventions, séminaires et réveillons…
                </p>
            </div>
        </div>
    </div>
    <div class="lieu__last">
        <div class="lieu__wrap">
            <p>
                Un lieu à taille humaine et à hauteur d’images, pour prendre le temps de grignoter avec les yeux, découvrir, échanger!
            </p>
            <p>
                N'hésitez pas a nous <a href="">contacter</a>!
            </p>
            <div class="last__img__content">
                <img src="<?= get_template_directory_uri(); ?>/dist/assets/lieuLast1.jpg" alt="" class="right__img">
                <img src="<?= get_template_directory_uri(); ?>/dist/assets/lieuLast2.jpg" alt="" class="right__img">
                <img src="<?= get_template_directory_uri(); ?>/dist/assets/lieuLast3.jpg" alt="" class="right__img">
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
