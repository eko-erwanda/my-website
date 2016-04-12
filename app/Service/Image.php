<?php

namespace App\Service;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Image
{
    public function upload(UploadedFile $image)
    {
        try {
            $filename = sha1(uniqid(time())).'.'.$image->getClientOriginalExtension();
            Storage::put($filename, file_get_contents($image->getRealPath()));

            return $filename;
        } catch (Exception $e) {
            return false;
        }
    }

    public function delete($filename)
    {
        if (Storage::exists($filename)) {
            Storage::delete($filename);
        }
    }
}
