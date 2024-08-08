<?php

namespace App\Utilities;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageUploader
{
    public static function Upload($image, $path, $diskType){

        Storage::disk($diskType)->put($path, File::get($image));
    }
}
