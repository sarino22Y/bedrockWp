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

<div id="headerMeva" class="container-fluid">
        <a id="logoMTAccueil" href="https://localhost/bedrockWp/bedrockWp/web/">
            <img alt="">
        </a>
</div>
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
            <li><a href="#">Nos modèles</a></li>
            <li><a href="#">Plan de lotissement</a></li>
            <li><a href="#">Plan d'accès</a></li>
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
    <div id="etiq">
        <h2>Achetez la maison de vos rêves</h2>
    </div>
</div>

<?php
get_footer();