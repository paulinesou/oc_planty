<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Neve
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du themeChild.css thèeme personnalisé
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
}
?>


<?php

// HOOK ADMIN