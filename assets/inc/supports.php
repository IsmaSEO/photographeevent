<?php

function photographeevent_supports()
{
    // Ajouter la prise en charge des images mises en avant
    add_theme_support('post-thumbnails');
    // Ajouter automatiquement le titre du site dans l'en-tête du site
    add_theme_support('title-tag');
    // ajout de la gestion du menu
    add_theme_support('menus');
    // ajout du logo dans le customizer
    add_theme_support('custom-logo');
    add_theme_support('html5');
    // register_nav_menu('main', 'menu principal');
    // format des images ;
    // add_image_size('thumbnail-medium', 500, 500, true);
  
}
add_action('after_setup_theme', 'photographeevent_supports');
