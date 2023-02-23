<!-- Modele.php représente le modèle par défaut du theme -->

<?php get_header();?>
<main>
    <section class="blocflex">
        <?php 
    /**
     * Category : permet d'afficher une categorie d'article
    */

if (have_posts()):
    while(have_posts()):the_post();?>
        <article>
            <h3><a href="<?php the_permalink(); ?>"><?=get_the_title() ?></a></h3>
            <p><?=wp_trim_words(the_excerpt(),4);?></p>

        </article>

        <?php endwhile; endif; ?>

    </section>
</main>
<?php get_footer();?>