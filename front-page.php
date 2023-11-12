<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video class="video-oscars" autoplay loop muted poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'?> ">
            <source src=<?php echo get_theme_file_uri() . '/assets/images/video.mp4'; ?> type="video/mp4">
            </video>
            <img class="logo-koukaki" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="image">
        </section>
        <section id="story" class="story">
            <h2><span>L'histoire</span></h2>
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
            <?php include('slider.php'); ?>
            <article id="place">
                <div>
                    <h3><span>Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <div class="clouds">
                <img class="bigcloud" src="wp-content\themes\foce-child\assets\images\big_cloud.png" alt="nuage">
                <img class="littlecloud" src="wp-content\themes\foce-child\assets\images\little_cloud.png" alt="nuage">
                </div>
            </article>
        </section>

        <section id="studio">
            <h2><span>Studio</span><span class="titlekoukaki">Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

        <section id="oscars">
            <div class="oscar">
                <img src=<?php echo get_theme_file_uri("./assets/images/oscars.png");?> alt="image oscar">
            </div>
        </section>
        
       
    </main><!-- #main -->

<?php
get_footer();
