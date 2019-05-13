<?php

require_once "classes/ImageProcessing.php";

$img = new ImageProcessing('Desert.jpg');
$uu = getimagesize('Desert.jpg');
var_dump($uu);