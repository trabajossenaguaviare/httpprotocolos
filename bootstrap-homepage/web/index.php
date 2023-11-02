<?php

declare(strict_types=1);

// require_once __DIR__ . '/../src/components/Template.php';
require_once '../src/components/Template.php';

// var_dump(__DIR__ . '/../src/components/Template.php');
// die;



$mainTemplate = new \Components\Template('main');
$templateData = [
    'title' => 'My main template',
];

echo $mainTemplate->render($templateData);
