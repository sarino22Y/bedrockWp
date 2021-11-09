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

<div id="contentA" class="container-fluid">
    <div id="akanySoa">
        <h2 class="titleAkany">Projet Akany Soa</h2>
        <a id="lienLogoMevaAccueil" href="https://localhost/bedrockWp/bedrockWp/web/accueilmeva/">
            <img id="logoMevaAccueilMT" src="https://localhost/bedrockWp/bedrockWp/web/app/uploads/2021/11/logomeva-1024x410.png">
        </a>
    </div>
    <div id="meva">
        <h2 class="titleMeva">Projet Meva lotissement</h2>
        <a id="lienLogoMevaAccueil" href="https://localhost/bedrockWp/bedrockWp/web/accueilmeva/">
            <img id="logoMevaAccueilMT" src="https://localhost/bedrockWp/bedrockWp/web/app/uploads/2021/11/logomeva-1024x410.png">
        </a>
    </div>
    <div id="jardin">
        <h2 class="titleJardin">Projet Jardin Est</h2>
        <div class="container">
            <h1 id="logoJardinEstAccueil">Logo Projet Jardin Est</h1>
        </div>
    </div>
</div>
<div class="container">
<div class="row" id="ninjaForme">
<?php 
    Ninja_Forms()->display(2);
    ?>
    </div>
</div>
<?php
get_footer();