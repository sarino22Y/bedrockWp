<?php
/**
 * Template Name: Empty Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="container">
	<div id="row" class="container-fluid">
		<div id="titreHead">
			<h1 id="titreAccueil">Imerimanjaka, un lieu de bon vivre</h1>
			<p id='paragraphe1' class="show">Situé au sud de la Capitale,
        Imerimanjaka est un village de caractère qui a su préserver son âme en conjuguant 
        son passé à ses envies de modernité sur un terrain encore vierge qui pourrait accueillir 
        nos ambitions.<br>Découvrez un magnifique lotissement résidentiel dans un environnement sécurisé 
        et convivial, et un cadre panoramique avec vue sur Antananarivo</p>
		</div>
<?php
while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;
?>
 </div>
</div>
<?php
get_footer();
