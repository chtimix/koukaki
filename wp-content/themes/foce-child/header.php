<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">

        <nav id="site-navigation" class="main-navigation">
            <ul>
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
                <input type="checkbox" id="menu-toggle-anim" />
                <label for="menu-toggle-anim" class="menu-icon">
                <span></span>
                </label>
                <div class="submenu">
                    <ul>
                        <li><img src="<?php echo get_stylesheet_directory_uri() . '/images/logo-submenu.png'; ?>" alt="logo fleurs d'orangers & chats errants" ></li>
                        <li class="submenu-histoire"><a href="#story">Histoire</a></li>
                        <li class="submenu-personnages"><a href="#characters">Personnages</a></li>
                        <li class="submenu-lieu"><a href="#place">Lieu</a></li>
                        <li class="submenu-studio"><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                    <img class="logo-studio-koukaki" src="<?php echo get_stylesheet_directory_uri() . '/images/studio-koukaki.png'; ?>" alt="logo studio koukaki" >
                </div>
            </ul>
            
        </nav>

	</header><!-- #masthead -->
