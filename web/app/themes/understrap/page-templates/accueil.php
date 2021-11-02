<?php
/**
 * Template Name: accueil
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div id="contentA" class="container">
    <div id="meva">
        <h2 class="titleC">Projet Meva lotissement</h2>
        <img id="logoMevaAccueil"src="https://localhost/bedrockWp/bedrockWp/web/app/uploads/2021/11/logomeva-1024x410.png" class="img-fluid" alt="Meva">
    </div>
    <div id="jardin">
        <h2 class="titleC">Projet Jardin Est</h2>
        <div class="container">
            <h1 id="logoJardinEstAccueil">Logo Projet Jardin Est</h1>
        </div>
    </div>
</div>

<?php
get_footer();