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
            <li><a href="#blockplanlotissement">Plan de lotissement</a></li>
            <li><a href="#blockacces">Accès</a></li>
            <li><a href="#contactfluid">Contactez-nous</a></li>
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
    <div id="etiq">
        <h2>Achetez la maison de vos rêves</h2>
    </div>
    <div id="blockacces" class="container_fluid">
        <h1 id="pageAcces" class="titreblocs">Accès</h1>
        <div id="contentAcces" class="container-fluid">
            <div id="AccesAvaratra"></div>
            <div id="descriptionAtsimo">
                <p>Le lotissement se trouve à 1 km du By Pass à Imerimanjaka en bordure de la route goudronnée d'Ambohijanaka.</p>
                <p>Dans un environnement calme, en très fort développement, MEVA est à 15 minutes des centres commerciaux de Tanjombato et à 2 minutes du Lycée Peter Pan.</p>
                <p>Le site sera aménagé en un parc arboré avec des cheminements piétons, une piste cyclable, des éclairages et des places de parking qui valorisent les futures construction</p>
                <button>Voir le lotissement</button>
            </div>
        </div>
    </div>
</div>

<div id ="contactfluid">
    <div id="blockcontact">
    <h1 id="pageContact" class="titreblocs">Contact</h1>
        <div id="contentcontact" class="container-fluid">
            <?php 
                Ninja_Forms()->display(2);
            ?>
        </div>
        <div id="coordonees" class="container-fluid">
            <h1 id="titreCoordonnees" class="">Coordonées</h1>
            <p id="coordonneesTel">+261 34 34 034 34</p>
            <p id="coordonneesMail">contact.mevalot@solidis.com</p>
        </div>
    </div>
</div>

<?php
get_footer();