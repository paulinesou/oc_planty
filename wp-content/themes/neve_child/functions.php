<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
}


// 'theme-style' : identifiant unique que l’on donne au chargement de notre fichier CSS. Il permet de différencier les différentes injections de CSS.
// get_stylesheet_directory_uri() : URL publique vers le fichier CSS à charger. La fonction retourne l’URL publique vers le dossier du thème actuellement activé. 
    // Il nous reste juste à ajouter la fin de la route,  ‘/css/theme.css’
// array() : On ajoute ici un tableau de textes pour chaque script CSS dont le fichier CSS que nous importons dépend. 
    // La valeur est la clé unique définie en premier paramètre de wp_enqueue_style. L'intérêt est de s’assurer que les fichiers dont notre fichier dépend soient bien chargés en amont.
// filemtime(get_stylesheet_directory() . '/css/theme.css' : ce paramètre permet de gérer la version du fichier, et donc d’éviter tout problème de cache. 
    // Il faut donc y mettre une valeur unique liée à la version. Pour cela, nous utilisons la fonction filemtime, qui permet de récupérer le timestamp de la dernière mise 
    // à jour d’un fichier. Le fichier ici est notre fichier theme.css . En complément, nous utilisons la fonction get_stylesheet_directory(), qui retourne le chemin local 
    // vers le dossier de thème activé. Concrètement, à chaque fois qu’on sauvegarde le fichier, la fonction ‘filemtime’ retourne une nouvelle valeur, 
    // ce qui donne une nouvelle URL de fichier qui ne sera pas soumise au cache.