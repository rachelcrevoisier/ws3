<?php
/**
    Modèle article représente le modèle par défaut du thème
*/
get_header() ?>
<main>
    <section class='lecturearticle'>
        <?php 
if (have_posts()):
   while(have_posts()): the_post();
        the_title('<h1>','</h1>');
        the_content();  
    endwhile;    
endif;
?>
    </section>
</main>
<?php get_footer(); ?>