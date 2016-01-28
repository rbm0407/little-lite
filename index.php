<?php
include_once('controller/PostController.php');

if(!empty($_SERVER['QUERY_STRING'])) {
    $queryArray = explode('/',$_SERVER['QUERY_STRING']);
    
    $controller = new $queryArray[0];

    if(isset($queryArray[2])) {
        $controller->$queryArray[1]($queryArray[2]);
    }
    else {
        $controller->$queryArray[1]();
    }
}

echo '<a href="index.php?PostController/index">Ver Todos os Posts!</a>';
?> 
