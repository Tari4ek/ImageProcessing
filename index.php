<?php

require_once "classes/ImageProcessing.php";

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$img = new ImageProcessing();

$img->resize(150, 40);
$img->saveImage('res.jpg');

//
//$img->chop(500, 500);
//$img->saveImage('re555s.jpg');
//debug($img->chopImage('Desert.jpg'));


//$img->cropImage(__DIR__ . '/Desert.jpg', 500, 300, 500, 300, 'yty');
//
//
//$img->thumbnailImage(__DIR__ . '/Desert.jpg', 30, 50);
