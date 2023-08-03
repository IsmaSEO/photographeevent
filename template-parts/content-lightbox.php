<div class="lightbox active">
    <button class="lightbox-close"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/croix.png" alt="Croix de fermeture" /></button>
    <button class="lightbox-prev"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fleche_gauche.png" alt="Flèche vers la gauche" /> </button>
    <button class="lightbox-next"><img class="#" src="<?php echo get_template_directory_uri(); ?>/assets/images/fleche_droite.png" alt="Flèche vers la droite" />
    </button>
 
    <div class="lightbox-container">
        <div class="lightbox-img-info">
          
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" class="post-thumbnail" />
                <div class="lightbox-photo-info">
                    <h2 class="lightbox-titre"></h2>
                    <div class="lightbox-cat-annee">
                        <p class="lightbox-cat"></p>
                        <p class="lightbox-annee"></p>
                    </div>
                </div>
            <?php endif; ?>
            <?php the_content(); ?>
        </div>
    </div>
</div>