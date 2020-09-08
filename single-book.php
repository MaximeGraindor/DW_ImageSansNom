<?php get_header() ?>

<main class="single_book">
    <div class="book">
        <div class="book__wrap">
            <div class="book__left">
                <h1 class="book__title">
                    <?= the_title(); ?>
                </h1>
                <div class="book__content">
                    <?= get_field('text_book') ?>
                </div>
                <div class="book__back">
                    <a href="">Retourner aux livres</a>
                </div>
            </div>
            <div class="book__right">
                <img src="<?= get_field('mainImg_book')['url'] ?>" alt="" class="book__mainImg">
                <div class="book__gallery">
                    <img src="<?= get_field('img1_book')['url'] ?>"" alt="">
                    <img src="<?= get_field('img2_book')['url'] ?>"" alt="">
                    <img src="<?= get_field('img3_book')['url'] ?>"" alt="">
                </div>
                <div class="book__video">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/<?= isn_extractString(get_field('video_book')); ?>" class="book__video"></iframe>
                </div>
            </div>
        </div>
    </div>

    <section class="book__others">
        <div class="book__wrap"></div>
    </section>
</main>

<?php get_footer() ?>
