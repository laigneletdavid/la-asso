<?php

if (isset($_GET['page']) && ($_GET['page'] === 'event')) {
    $content = './vue/event.phtml';
    include ('./layout/layout.phtml');
}
else {
    $content = './vue/accueil.phtml';
    include ('./layout/layout.phtml');
}



