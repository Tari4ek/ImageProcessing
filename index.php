<?php

$file = 'Desert.jpg';
$image_mime = image_type_to_mime_type(exif_imagetype($file));

$h = exif_imagetype($file);

var_dump($image_mime);

var_dump($h);
