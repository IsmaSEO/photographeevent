<?php

/**
 * Template Name: template page accueil
 */
?>

<?php get_header(); ?>


<!-- hero -->

<div class="hero-container">
    <h1 class="nom-site"><?php the_title() ?></h1>

    <?php query_posts(
        array(
            'post_type' => 'photo',
            'showposts' => 1,
            'orderby' => 'rand',
            // 'terms' => 'paysage',
        )
    ); ?>
    <?php if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>"> <?php
                                                                                                endwhile;
                                                                                            endif; ?>
</div>



<!-- galerie -->

<section class="galerie">

    <!-- filtres -->

    <div class="filtres-container">
        <!-- récupère les catégories -->

        <?php function affichageCat($nomTaxonomie)
        {
            if ($terms = get_terms(array(
                'taxonomy' => $nomTaxonomie,
                'orderby' => 'name'
            ))) {
                foreach ($terms as $term) {
                    echo '<option class="js-filter-item" value="' . $term->slug . '">' . $term->name . '</option>';
                }
            }
        }

        ?>

        <div class="filtres">

            <!-- categories -->

            <div class="filtres-cat  js-filter">
                <form id="categories" class="js-filter-form colonne">

                    <label for="categories-select">Catégories</label>
                    <select id="categories-select"> -->
                        <option value="all" hidden></option>
                        <option value="all">Toutes les catégories</option>
                        <?php
                        $categories = get_terms(array(
                            "taxonomy" => "categories",
                            "hide_empty" => false,
                        ));
                        foreach ($categories as $categorie) {
                            echo '<option value="' . $categorie->slug . '">' . $categorie->name . '</option>';
                        }
                        ?>
                    </select>
                </form>

            </div>

            <!-- formats -->

            <div class="filtre-format">
                <form id="format" class="js-filter-form  colonne">
                    <label for="format-select">Formats</label>
                    <select id="format-select">
                        <option value="all" hidden></option>
                        <option value="all">Tous les formats</option>
                        <?php
                        $formats = get_terms(array(
                            "taxonomy" => "formats",
                            "hide_empty" => false,
                        ));
                        foreach ($formats as $format) {
                            echo '<option value="' . $format->slug . '">' . $format->name . '</option>';
                        }
                        ?>
                    </select>
                </form>

            </div>

        </div>

        <!-- tri -->

        <div class="filtre-tri">
            <form id="ordre" class="js-filter-form colonne">
                <label for="date">Trier par</label>
                <select id="date-select">
                    <option value="all" hidden></option>
                    <option value="DESC">Nouveautés</option>
                    <option value="ASC">Les plus anciennes</option>
                </select>
        </div>
        </form>
    </div>
    </div>

    <!-- affichage des images  -->

    <div class="galerie-container container_thumbnail_block" id="container_thumbnail_block">

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $galerie = new WP_Query(array(
            'post_type' => 'photo',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 12,
            'paged' => $paged,
        ));

        galeriePhotos($galerie, false);
        ?>

    </div>

    <!-- pagination -->

    <div class="galerie-btn-container">
        <a id="load-more" data-current-index="1" href="#!"><button class="galerie-btn">Charger plus<img class="galerie-btn-img" src="wp-content/themes/photographeevent/assets/images/appareil_photo.png" alt="Icon d'un appareil photo"></button></a>
    </div>
</section>

<?php get_footer(); ?>