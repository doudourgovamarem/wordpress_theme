<?php

get_header();

// Affichage de la page d'accueil sans la boucle
if (have_posts()) :
    the_post();
?>
    <article>
        <><?php the_title();  ?></h1>
            <div><?php the_content(); ?></div>
    </article>
<?php
endif;

get_footer();
