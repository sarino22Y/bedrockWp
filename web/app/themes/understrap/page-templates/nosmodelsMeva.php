<?php
/**
 * Template Name: nosmodelesMeva
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
    <div id="blockTitrePage" class="container_fluid">
        <h1 id="titrePage">Nos modèles</h1>
    </div>
</div>

<?php
get_footer();