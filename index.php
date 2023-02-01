<!-- Modele.php représente le modèle par défaut du theme -->

<?php get_header();?>
<main>
    <h3>Index.php</h3>
<?php 
if (have_posts()):
    while(have_posts()):the_post();
        the_title("<h1>", "</h1>");
        the_content();
    endwhile;
endif;
?>


</main>
<?php get_footer();?>