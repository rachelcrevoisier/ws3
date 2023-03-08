<aside class="site__aside">
    <h3>Menu Secondaire</h3>
    <?php
    $category = get_queried_object();
    if (isset($category)) {
        $lemenu = $category->slug;
    } else {
        $lemenu = "cours";
    }

    wp_nav_menu(array(
        "menu" => $lemenu,
        "container" => "nav"
    )) ?>
</aside>