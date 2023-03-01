<!-- Modele.php représente le modèle par défaut du theme -->

<?php get_header();?>
<main class="site__main">

    <?php 
if (have_posts()):
    while(have_posts()):the_post();
        //the_title("<h1>", "</h1>");
        //the_permalink();?>
    <h1><a href="<?php the_permalink(); ?>"><?=get_the_title() ?></a></h1>
    <?php
        //the_excerpt();
        wp_trim_words(the_excerpt(),4);
        //echo wp_trim_words(get_the_excerpt(),14);
    endwhile;
endif;
?>


</main>
<?php get_footer();?>