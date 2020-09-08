<?php get_header(); ?>
<div class="expos__intro">
    <div class="expos__wrap expos__intro__content">
        <span class="isn-corner">l'</span>
        <span class="isn-corner">image</span>
        <span class="isn-corner">sans</span>
        <span class="isn-corner">nom</span>
        <div class="expos__intro__left">
            <h1 class="expos__intro__title" role="heading" aria-level="1">
                <span>Nos</span> <span>Expo'</span>
            </h1>
            <p class="expos__intro__description">
                Venez découvrir nos expositions photos directement dans nos locaux. Ouvert a tout public!
            </p>
        </div>
        <div class="expos__intro__right">
            <img src="<?= path('/dist/assets/001_016-min.jpg') ?>" alt="" class="right__img">
        </div>
    </div>
</div>

<?php
    $exposition = new WP_Query([
    'post_type' => 'exposition',
    'posts_per_page' => 6
    ]);
?>
<section class="expos">
    <h2 class="hidden">
        Liste des expositions
    </h2>
    <?php  if($exposition->have_posts()): while($exposition->have_posts()): $exposition->the_post(); ?>
    <article class="expos__card">
        <div class="expos__card__left">
            <a href="<?= the_permalink() ?>">
                <img src="<?= get_field('image_page_expo') ?>" alt="Photo de l'expo">
            </a>
        </div>
        <div class="expos__card__right">
            <h3 class="card__right__title" role="heading" aria-level="3">
                <a href="">
                    <?= the_title() ?>
                </a>
            </h3>
            <img src="<?= get_field('image_page_expo_petite') ?>" alt="Photo de l'expo">
        </div>
    </article>
    <?php endwhile;endif; ?>
</section>
<?php get_footer(); ?>
