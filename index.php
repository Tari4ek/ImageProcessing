<?php

require_once "classes/ImageProcessing.php";

$img = new ImageProcessing('Desert.jpg');

$img->resize(150, 40);
$img->saveImage('res.jpg');
