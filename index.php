<?php

// Définition de la racine du site
if (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] == 'localhost') {
    define('ROOT_URL', '//localhost/studi/la-asso');
}
else {
    define('ROOT_URL', '');
}

// Affichage du contenu de la page en cours
if (isset($_GET['page']) && ($_GET['page'] === 'event')) {
    $content = './vue/event.phtml';
}
else {
    $content = './vue/accueil.phtml';   
}
include ('./layout/layout.phtml');
