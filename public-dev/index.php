<?php

require '../vendor/autoload.php';

$app = new \Myrotvorets\Application(['settings' => require __DIR__ . '/../config/config.php']);
$app->initialize();
$app->run();
