<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>

<body>
    <header>
<<<<<<< Updated upstream
        <?php the_custom_logo() ?>
        <?php wp_nav_menu(array(
=======
        <section class='logomenu'>
            <?php wp_nav_menu(array(
>>>>>>> Stashed changes
            'menu'=>'entete',
            'container'=>'nav'
            
        ));?></section>
        <h2><?php bloginfo("description"); ?>
        </h2>
        <h2><?php bloginfo("url"); ?></h2>

        <h1><a href="<?php bloginfo("url"); ?>" target="_blank"><?php bloginfo("name"); ?></a></h1>
    </header>