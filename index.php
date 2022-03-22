<?php
// Silence is golden.
// Affichage de la liste des articles avec la boucle
get_header();
the_archive_title('<h1>', '</h1>');
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <article>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        </article>
<?php
    endwhile;
endif;
get_footer();
