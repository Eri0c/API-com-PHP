<?php 

    session_start();
    require('vendor/autoload.php');

    define('INCLUDE_PATH_STATIC','http://localhost/APIPHP/Api/Views/pages');
    define('INCLUDE_PATH','http://localhost/APIPHP/');
    
    $app = new Api\Application();

    $app->run();
    
?>