<!-- Modele.php représente le modèle par défaut du theme -->

<?php get_header();?>
<main>
    <code>Page search</code>
    <section class="recherche">



        <?php 
if (have_posts()):
    while(have_posts()):the_post();
        //the_title("<h1>", "</h1>");
        //the_permalink();?>
        <article>
            <h1><a href="<?php the_permalink(); ?>"><?=get_the_title() ?></a></h1>
            <?=wp_trim_words(the_excerpt(),4);?>
        </article>
        <?php
            endwhile;
            endif;
            ?>

    </section>
</main>
<?php get_footer();?>