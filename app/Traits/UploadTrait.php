<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

trait UploadTrait
{
    public static function defaultImage()
    {
        return 'https://www.contentviewspro.com/wp-content/uploads/2017/07/default_image.png';
    }

    public static function defaultPersonImage()
    {
        return 'https://vectorified.com/images/default-user-icon-33.jpg';
    }

    public function uploadAllTypesSized($file, $directory)
    {

        // create image manager with desired driver
        $manager = new ImageManager(new Driver);

        $name = time() . '_' . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();

        // read image from file system
        $image = $manager->read($file);

        // resize image proportionally to 300px width
        $image->resize(300, 350);

        $path = 'public/' . $directory;

        // save modified image in new format
        $image->toPng()->save($path . '/' . $name);

        return (string)$name;
    }

    public function uploadAllTypes($file, $directory)
    {
        // dd(Request::getHost());
        if (Request::getHost() == '127.0.0.1' || Request::getHost() == 'localhost') {
            return $this->uploadAllTypesCPanel($file, $directory);
        } else {
            return $this->uploadAllTypesS3($file, $directory);
        }
    }

    public function uploadAllTypesCPanel($file, $directory)
    {

        $destinationPath = \public_path('storage/' . $directory);
        $fileName = time() . '.' . $file->clientExtension();
        $file->move($destinationPath, $fileName);

        return $fileName;
    }

    public function uploadAllTypesS3($file, $directory)
    {

        // Generate a unique filename
        $filename = rand(10000, 99999) . '_' . $file->getClientOriginalName();
        //        $filename = time() . '_' . rand(111, 999);

        // Store the image on S3
        $path = $file->storeAs($directory, $filename, 's3');

        // Get the URL of the uploaded file
        $url = Storage::disk('s3')->url($path);

        return $url;
    }

    public function getImage($name, $directory)
    {
        if (Request::getHost() == '127.0.0.1') {
            return $this->getImageCPanel($name, $directory);
        } else {
            return $this->getImageS3($name, $directory);
        }
    }

    public function getImageCPanel($name, $directory)
    {
        return url('storage/' . $directory . '/' . $name);
    }

    public function getImageS3($name, $directory)
    {
        return $name;
    }
}
