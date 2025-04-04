<?php

get_header();
?>
    <main id="primary" class="site-main">
        <section class="banner">
            <video class="banner-video" autoplay muted loop playsinline poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>">
                <source src="<?php echo get_stylesheet_directory_uri() . '/images/video-koukaki.mp4'; ?>" type="video/mp4">
                Votre navigateur ne supporte pas la vidéo HTML5.
            </video>
            <div class="banner-logo">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            </div>
        </section>

        <section id="#story" class="story">
            <h2>L'histoire</h2>
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
                <div>
                    <h3>Les personnages</h3>
                    <!-- Slider main container -->
                    <div class="swiper mySwiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                        <?php
                            while ( $characters_query->have_posts() ) {
                                $characters_query->the_post();
                                echo'<div class="swiper-slide">';
                                echo '<figure>';
                                echo get_the_post_thumbnail( get_the_ID(), 'full' );
                                echo '<figcaption>';
                                the_title();
                                echo'</figcaption>';
                                echo '</figure>';
                                echo '</div>';
                            }
                        ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </article>
            <article id="place" class="parallax-container" data-0="position:relative;" data-end="position:relative;">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <div class="big-cloud blur" data-bottom-top="transform: translateX(300px);" data-top-bottom="transform: translateX(-300px);">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/images/big_cloud.png'; ?> " alt="gros nuage">
                </div>
                <div class="little-cloud blur" data-bottom-top="transform: translateX(-300px);" data-top-bottom="transform: translateX(300px);">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/images/little_cloud.png'; ?> " alt="petit nuage">
                </div>

            </article>
        </section>
        <section id="studio">
            <h2>Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
        
        <section id="oscars">
            
                <h3>Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</h3>
            
            <div class="logo-oscars">
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/logo-oscars.png'; ?> " alt="logo oscars short film animated">
            </div>

        </section>




    </main><!-- #main -->

<?php
get_footer();
