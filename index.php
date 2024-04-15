<?php 

    session_start();
    require('vendor/autoload.php');

    define('INCLUDE_PATH_STATIC','http://localhost/api/Views/pages');
    define('INCLUDE_PATH','http://localhost/apiphp/');
    
    $app = new Api\Application();

    $app->run();
    
?>