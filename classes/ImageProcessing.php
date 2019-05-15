<?php


class ImageProcessing
{

    public $img;
    public $type;
    public $file;
    public $image_mime;

    public function __construct($file)
    {
        if (file_exists($file)) {
            $this->loadingImage($file);
        }
    }

    public function loadingImage($file)
    {
        $this->image_mime = image_type_to_mime_type(exif_imagetype($file));

        switch ($this->image_mime) {
            case "image/gif":
                $this->img = imagecreatefromgif($file);
                echo "Image is a gif </br>";

                break;
            case "image/jpeg":
                $this->img = imagecreatefromjpeg($file);
                echo "Image is a jpeg </br>";
                break;
            case "image/png":
                $this->img = imagecreatefrompng($file);
                echo "Image is a png </br>";
                break;
            default:
                echo "Не тот формат изображения (допустимые JPEG, PNG, GIF)";
        }
    }

    public function saveImage($file)
    {
        switch ($this->image_mime) {
            case "image/gif":
                imagegif($this->img, $file);
                imagedestroy($this->img);
                echo "Картинка gif сохранена </br>";
                break;
            case "image/jpeg":
                imagejpeg($this->img, $file);
                imagedestroy($this->img);
                echo "Картинка jpeg сохранена</br>";
                break;
            case "image/png":
                imagepng($this->img, $file);
                imagedestroy($this->img);
                echo "Картинка png сохранена</br>";
                break;
            default:
                echo "Не тот формат изображения (допустимые JPEG, PNG, GIF)";
        }
    }

    public function getWidth()
    {
        return imagesx($this->img);
    }

    public function getHeight()
    {
        return imagesy($this->img);
    }

    public function resize($width, $height)
    {
        $image_p = imagecreatetruecolor($width, $height);
        imagecopyresampled($image_p, $this->img, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
        $this->img = $image_p;
    }


    public function cropImage($file, $width, $height, $startX, $startY, $name)
    {
        $imagick = new Imagick(realpath($file));
        $imagick->cropImage($width, $height, $startX, $startY);
        file_put_contents($name . '.jpg', $imagick);
        echo "Картинка сохранена</br>";

    }

    public function thumbnailImage($file, $w, $h, $namefile)
    {
        $imagick = new Imagick(realpath($file));
        $imagick->thumbnailImage($w, $h, false, false);
        file_put_contents($namefile . '.jpg', $imagick);
        $imagick->destroy();
        echo "Картинка сохранена</br>";
    }


}