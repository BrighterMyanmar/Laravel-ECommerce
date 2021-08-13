<?php

namespace App\BMLibby;

class Helper
{
    public static function saveSingleImage($file)
    {
        $name = uniqid() . "_" . $file->getClientOriginalName();
        $destination = $_SERVER["DOCUMENT_ROOT"] . "/uploads";
        $file->move($destination, $name);
        return $name;
    }
    public static function saveMultipleImage($files)
    {
        $names = [];
        foreach ($files as $file) {
            $filename = uniqid() . "_" . $file->getClientOriginalName();
            $destination = $_SERVER["DOCUMENT_ROOT"] . "/uploads";
            $file->move($destination, $filename);
            array_push($names, $filename);
        }
        return $names;
    }
    public static function deleteFile($name)
    {
        $filename = $_SERVER["DOCUMENT_ROOT"] . "/uploads/$name";
        if (file_exists($filename)) unlink($filename);
    }

    public static function beautify($data)
    {
        echo "<pre>" . print_r($data, true) . "</pre>";
    }
}
