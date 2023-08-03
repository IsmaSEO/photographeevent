<?php

// branchement du fichier CSS
function photographeevent_enqueue_styles()
{
    wp_enqueue_style("style.css", get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'photographeevent_enqueue_styles');

// branchement du fichier JS
function photographeevent_enqueue_scripts()
{
    wp_enqueue_script('script.js', get_template_directory_uri() . '/assets/js/script.js', '', '', true);
    wp_enqueue_script('contact-script.js', get_template_directory_uri() . '/assets/js/contact-script.js', '', '', true);
    wp_enqueue_script('lightbox-script.js', get_template_directory_uri() . '/assets/js/lightbox-script.js', '', '', true);
    // wp_enqueue_script('filtres-script-script.js', get_template_directory_uri() . '/assets/js/filtres-script.js', '', '', true);

    // wp_enqueue_script('requete-ajax-script.js', get_template_directory_uri() . '/assets/js/requete-ajax-script.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'photographeevent_enqueue_scripts');

function script_filtres()
{
    wp_enqueue_script('filtres-script.js', get_template_directory_uri() . '/assets/js/filtres-script.js', array('jquery'), '', true);
    wp_localize_script('filtres-script.js', 'filtres_script_js', array('ajax_url' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'script_filtres');


// Jquery

function photographeevent_scripts()
{
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'photographeevent_scripts');


// ajout de la page contact-script pour la modale

function script_modal()
{
    wp_enqueue_script('contact-script');
    wp_localize_script('contact-script', 'custom_data', array(
        'ref' => get_field('reference')
    ));
}
add_action('wp_enqueue_scripts', 'script_modal');
