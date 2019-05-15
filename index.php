<?php

require_once "classes/ImageProcessing.php";


function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$img = new ImageProcessing('Desert.jpg');


$img->resize(150, 40);
$img->saveImage('res.jpg');


$img->cropImage('Desert.jpg', 500, 300, 500, 300, 'yty');

$img->thumbnail('Desert.jpg', 1000, 600,'fhgf');


