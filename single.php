<!-- Modele.php représente le modèle par défaut du theme -->

<?php get_header();?>
<main>
<a href="<?php bloginfo("url"); ?>" >
<?php 
if (have_posts()):
    
        the_title("<h1>", "</h1>");
        the_content();
    
endif;
?>
</a> 

</main>
<?php get_footer();?>