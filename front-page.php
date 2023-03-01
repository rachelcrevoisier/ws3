<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main">
    <code>front-page.php</code>
    <h3>index.php</h3>
    <section class=" blocflex">
        <?php 
        if (have_posts()):
            while (have_posts()) : the_post();
                //the_title('<h1>','</h1>');
                //the_permalink(); ?>
        <article>
            <h3><a href="<?php the_permalink(); ?>"><?= get_the_title();  ?> </a></h3>
            <?=wp_trim_words(the_excerpt(),20);?>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>