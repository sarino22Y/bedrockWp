<?php
/**
 * Template Name: accueilMeva
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div id="headerMevaDefault">
    <?php
    get_header();
    ?>  
</div>

<div id="contentMeva" class="container">
    <nav id="navMeva"class="navbar">
        <a href="https://localhost/bedrockWp/bedrockWp/web/accueilmeva/">
            <img id="logoMevaAccueil"src="https://localhost/bedrockWp/bedrockWp/web/app/uploads/2021/11/logomeva-1024x410.png" alt="logoMeva">
        </a>
        <ul class="nav navbar-nav" id="myNav"> 
            <li><a href="https://localhost/bedrockWp/bedrockWp/web/nos-modeles/">Nos modèles</a></li>
            <li><a href="#">Plan de lotissement</a></li>
            <li><a href="#">Accès</a></li>
            <li><a href="#">Contactez-nous</a></li>
        </ul>
    </nav>
    <div id="imageAccueilMeva">
        <div id="etiquetteInfo">
            <div id="trapezoid">
                <div class="phrase">Achetez la maison de vos rêves!</div>
            </div>
            <div id="infohover" class="">
                <p class="p1">+Surface 5 hectares</p>
                <p>+4 village de 164 villas</p> 
                <p>+Espace vert de 1700m²</p>
                <p>+A 15 minutes des centres commerciaux de Tanjombato</p>
                <button>Voir le lotissement</button>
            </div>
        </div>
        <img id="imgMaisonMeva"src="https://localhost/bedrockWp/bedrockWp/web/app/uploads/2021/11/u2-1024x484.png" alt="MaisonMeva">
        <img id="etiquette" src="https://localhost/bedrockWp/bedrockWp/web/app/uploads/2021/11/etiq.png" alt="imageEt">
    </div>
    <div id="blocknosmodeles" class="container_fluid">
        <h1 id="pagemodeles" class="titreblocs">Nos modèles</h1>
        <div id="blocPavillons" class="container-fluid">
            <div id="pavillonsAvaratra"></div>
            <div id="pavillonsAtsimo"></div>
        </div>
    </div>
    <div id="blockplanlotissement" class="container_fluid">
        <h1 id="pageLotissement" class="titreblocs">Plan de lotissement</h1>
        <div id="contentlotissement" class="container-fluid">
            <div id="planAvaratra"></div>
            <div id="descriptionAtsimo">
                <h1>Imerimanjaka, <br/>un lieu de bon vivre</h1>
                <p>Situé au sud de la Capitale, Imerimanjaka est un village de caractère qui a su préserver son âme en conjuguant son passé à ses envies de modernité sur un terrain encore vierge qui pourrait accueillir nos ambitions.</p>
                <p>Découvrez un magnifique lotissement résidentiel dans un environnement sécurisé et convivial, et un cadre panoramique avec vue sur Antananarivo</p>
                <div class="legendeLotissement">
                    <div id="lotReserve"></div>
                    <p>Lot réservé</p>
                </div>
                <div class="legendeLotissement">
                    <div id="lotVendu"></div>
                    <p>Lot vendu</p>
                </div>
                <div class="legendeLotissement">
                    <div id="legendeAvaratra"></div>
                    <p>Pavillon Avaratra / Surface habitable = 70 à 86 m² -<br/>parking - jardin de 15 m² - un espace courette</p>
                </div>
                <div class="legendeLotissement">
                    <div id="legendeAtsimo"></div>
                    <p>Pavillon Atsimo / Surface habitable = 70 à 86 m² -<br/>parking - un jardin en façade - un espace courette en arrière</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();