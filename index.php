<?php

$page = $_GET['page'];

if (isset($page)) {
    
    if ($page == 'accueil') {

        require_once('pages/accueil.php');

    }elseif($page == 'apropos'){

        require_once('pages/apropos.php');

    }elseif($page == 'services'){
        
        require_once('pages/services.php');
    }
    
}else{

    header('Location: index.php?page=accueil');
}

?>