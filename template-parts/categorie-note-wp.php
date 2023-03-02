<?php

/**
 * 
 * template-part qui permettra d'afficher un article provenant d'un conteneur blocflex pour un article de categorie note-wp
 * 
 **/
$titre = get_the_title();
//if(substr($titre,0,1) == "0"){}
?>
<article>
    <h3><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h3>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>