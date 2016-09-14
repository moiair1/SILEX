<?php

// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

use Silex\Application AS aabbcc;


$app = new aabbcc();
$app['debug'] = true;

 

$app->get('/hola/{visitante}', function ($visitante) use($app) {
    
   
    
    return "Binvenidos al sistema,  {$app->escape($visitante)}.";
});

// ... definitions

$app->run();

?>
