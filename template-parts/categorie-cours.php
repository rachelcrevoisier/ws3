<?php

/**
 * 
 * template-part qui permettra d'afficher un article provenant d'un conteneur blocflex pour un article de categorie cours
 * 
 **/
$titre = get_the_title();
$sigle = substr($titre, 0, 7);
$sigle_long = substr($titre, 7, -5);
$duree = "90h";
?>
<article class="bloxflex__article">
    <h3><a href="<?php the_permalink(); ?>"> <?= $sigle; ?></a></h3>
    <p><?=$sigle_long?></p>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <p><?=$duree?></p>
</article>