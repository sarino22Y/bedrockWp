<?php
/**
 * Template Name: test
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
 <?php
echo do_shortcode('[smartslider3 slider="2"]');
?> 
<div class="container-fluid">
    <div class="col-md-6" id="accordion">
        <h2>Pavillon Avaratra</h2>
        <div>
            <ul>
                <li>Nombre de pièces :<p>5 avec 3 chambres de 11 m² chacune, 2 salles de bain et 1 séjour</p></li>
                 <li>Nombre de pièces :<p>5 avec 3 chambres de 11 m² chacune, 2 salles de bain et 1 séjour</p></li>
            </ul>
            <p></p>
            <div class="widget">          
                <input type="submit" value="Simuler un prêt">
                <button>Je suis intéressé(e)</button>
            </div>
        </div>
        <h2>Pavillon Atsimo</h2>
        <div>
            <ul>
                <li>Nombre de pièces :<p>5 avec 3 chambres de 11 m² chacune, 2 salles de bain et 1 séjour</p></li>
                 <li>Nombre de pièces :<p>5 avec 3 chambres de 11 m² chacune, 2 salles de bain et 1 séjour</p></li>
            </ul>
            <p></p>
            <div class="widget">          
                <input type="submit" value="Simuler un prêt">
                <button>Je suis intéressé(e)</button>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();