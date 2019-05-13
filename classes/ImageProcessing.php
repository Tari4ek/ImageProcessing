<?php


class ImageProcessing
{

    public $img;
    public $type;
    public $file;
    public $image_mime;

    public function __construct($file)
    {
        $this->loadingImage($file);
    }

    public function loadingImage($file)
    {
        $this->image_mime = image_type_to_mime_type(exif_imagetype($file));
var_dump($this->image_mime);
        switch ($this->image_mime) {
            case "image/gif":
                $this->img = imagecreatefromgif($file);
                echo "Image is a gif";

                break;
            case "image/jpeg":
                $this->img = imagecreatefromjpeg($file);
                echo "Image is a jpeg";
                break;
            case "image/png":
                $this->img = imagecreatefrompng($file);
                echo "Image is a png";
                break;
            default:
                echo "Не тот формат изображения (допустимые JPEG, PNG, GIF)";
        }
    }

    public function getWidth()
    {
       return imagesx($this->img);
    }

    public function gerHeight()
    {
       return imagesy($this->img);
    }


}