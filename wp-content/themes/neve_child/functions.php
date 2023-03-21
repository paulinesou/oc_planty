<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Neve
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du themeChild.css thème personnalisé
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
}
?>


<?php

// HOOK ADMIN

add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );

function add_admin_link( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location == 'primary') {
        $items .= '<li class="admin"><a href="'. get_admin_url() .'">Admin</a></li>';
    }
    return $items;
}
