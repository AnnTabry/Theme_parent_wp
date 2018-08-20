<?php
//============================================================================
// inclusions des styles et des scripts ds wp : ==============================
//============================================================================

function ann_scripts() {
    wp_enqueue_style('ann_custom', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all'); //pour charger ma feuille de style j'utilise la fonction wp-enqueue_style

    wp_enqueue_script('ann_script', get_template_directory_uri() . '/js/SuperTheme.js', array('jquery'), '1.0.0', 'true');//je charge mon script js & jquery est inclus ds wp pas besoin de telecharger ;)
}

add_action('wp_enqueue_scripts', 'ann_scripts');


//===========================================================
//                                              utilitaires
//============================================================

function ann_setup() { //mes fonctionnalités suppplémentaires

    //support des vignettes
    add_theme_support('post-thumbnails'); // pour rajouter des images à la une à mes articles

    //pour enlever le générateur de version de wp (sécurité)
    remove_action('wp_head', 'wp_generator');

    // pour remplacer la balise title de l'index.php
    add_theme_support('title-tag');

    //j'appelle mon fichier pour le menu bootstrap :
    require_once('includes/wp_bootstrap_navwalker.php');

    //active la gestion des menus
    register_nav_menus(array('primary' => 'principal')); //cela me permet d'accéder à l'interface de gestion de menus dans le tableau de bord wp

}

add_action('after_setup_theme', 'ann_setup');

//===========================================================
//                            pour l'affichage des catégories + tags
//============================================================

function ann_give_me_cat ($cat, $tags) {
    $chaine = 'Catégorie(s) : ';
    $chaine .= $cat;
    $chaine .= '<br>Etiquette(s) : '. $tags;

    return $chaine;
}