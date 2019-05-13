<?php


class ImageProcessing
{

    public $img;
    public $imgType;
    public $file;
//    public $infoImg;

    public function __construct($file)
    {
        $this->loadingImage($file);
    }

public  function loadingImage($file)
{
    $infoImg = exif_imagetype($file);



}

}