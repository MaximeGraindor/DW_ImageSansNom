<?php
/*
    Template Name: Template page "Contact"
    Template Post Type: book
*/

get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

    <p>
        oui
    </p>

<?php endwhile;endif; ?>

<?php get_footer(); ?>