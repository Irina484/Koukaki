<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <img class="titre-flottant" id ="logobanner" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="#story" class="story">
            <h2><span class="titre"> L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <div class="main-character">
                    <h3><span class="titre">Les personnages</span></h3>
                    
                </div>
                <?php
                    // Inclure le carrousel des personnages
                    get_template_part('template-parts/caroussel');
                ?>
                <div class="other-characters">
                   
                </div>
            </article>
            <article id="place">
                <div>
                    <section class="parallax-section" style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/Studio_Koukaki-image_place.png');">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/big_cloud.png" class="cloud cloud1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/little_cloud.png" class="cloud cloud2">
                    <!-- Autres contenus de la section -->
                    </section>
                    <h3><spanc class="titre">Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article> 
        </section>


        <section id="studio">
            <h2><span class="titre">Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
    </main><!-- #main -->
    <?php get_template_part( 'template-parts/oscar' ); ?>
<?php
get_footer();
