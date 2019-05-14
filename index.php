<?php

require_once "classes/ImageProcessing.php";

$img = new ImageProcessing('Desert.jpg');

$img->borderImage('Desert.jpg', 'white', 150, 500);

$img->resize(150, 40);
$img->saveImage('res.jpg');
